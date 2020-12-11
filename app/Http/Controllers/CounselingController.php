<?php

namespace App\Http\Controllers;

use App\Exports\CounselingExport;
use App\Http\Requests\CounselingRequest;
use App\Imports\CounselingImport;
use App\Models\Counseling;
use App\Models\Counselor;
use Auth;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Session;

class CounselingController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:view counseling')->only('index');
        $this->middleware('permission:add counseling')->only('create');
        $this->middleware('permission:edit counseling')->only('edit');
        $this->middleware('permission:edit counseling')->only('import_excel');
        $this->middleware('permission:delete counseling')->only('delete');
    }

    public function index(Request $request)
    {
        // dd($user);
        if (Auth::user()->hasRole('super admin')) {
            $counselings = Counseling::all();
        } else {
            $user = Auth::user()->profileIds[0];
            $counselings = Counseling::where('nrp', $user->model->nrp);
        }

        return view('counselings.index', compact('counselings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $counselors = Counselor::all();

        return view('counselings.create', compact('counselors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CounselingRequest $request)
    {
        $nrp = Auth::user()->profileIds[0]->model->nrp;
        // dd($user->model->nrp);
        Counseling::create([
            'nrp' => $nrp,
            'counselee_contact' => $request['counselee_contact'],
            'counselor_id' => $request['counselor_id'],
        ]);

        return redirect()->route('counselings.index')
            ->with('success', 'Data counseling berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Counseling  $counseling
     * @return \Illuminate\Http\Response
     */
    public function show(Counseling $counseling)
    {
        return view('counselings.show', compact('counseling'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Counseling  $counseling
     * @return \Illuminate\Http\Response
     */
    public function edit(Counseling $counseling)
    {
        $counselors = Counselor::all();

        return view('counselings.edit', compact('counseling', 'counselors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Counseling  $counseling
     * @return \Illuminate\Http\Response
     */
    public function update(CounselingRequest $request, Counseling $counseling)
    {
        $counseling->nrp = $request['nrp'];
        $counseling->counselee_contact = $request['counselee_contact'];
        $counseling->counselor_id = $request['counselor_id'];
        $counseling->save();

        return redirect()->route('counselings.index')
            ->with('success', 'Data counseling berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Counseling  $counseling
     * @return \Illuminate\Http\Response
     */
    public function destroy(Counseling $counseling)
    {
        $counseling->delete();

        return redirect()->route('counselings.index')
            ->with('success', 'Data counseling berhasil dihapus');
    }

    public function export_excel()
    {
        return Excel::download(new CounselingExport, 'counseling.xlsx');
    }

    public function import_excel(Request $request)
    {
        // validasi
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx',
        ]);

        // menangkap file excel
        $file = $request->file('file');

        // membuat nama file unik
        $nama_file = rand().$file->getClientOriginalName();

        // upload ke folder file_siswa di dalam folder public
        $file->move('file_counseling', $nama_file);

        // import data
        Excel::import(new CounselingImport, public_path('/file_counseling/'.$nama_file));

        // notifikasi dengan session
        Session::flash('sukses', 'Data Konseling Berhasil Diimport!');

        // alihkan halaman kembali
        return redirect('/admin/counselings');
    }
}
