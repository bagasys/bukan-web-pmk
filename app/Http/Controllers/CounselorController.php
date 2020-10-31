<?php

namespace App\Http\Controllers;

use App\Exports\CounselorExport;
use App\Http\Requests\CounselorRequest;
use App\Imports\CounselorImport;
use App\Models\Counselor;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Session;

class CounselorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $pageNumber = $request->query('page');
        $counselors = Counselor::paginate(10, ['*'], 'page', $pageNumber);

        return view('counselors.index', compact('counselors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('counselors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CounselorRequest $request)
    {
        Counselor::create([
            'name' => $request['name'],
            'nid' => $request['nid'],
        ]);

        return redirect()->route('counselors.index')
            ->with('success', 'Data konselor berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Counselor  $counselor
     * @return \Illuminate\Http\Response
     */
    public function show(Counselor $counselor)
    {
        return view('counselors.show', compact('counselor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Counselor  $counselor
     * @return \Illuminate\Http\Response
     */
    public function edit(Counselor $counselor)
    {
        return view('counselors.edit', compact('counselor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Counselor  $counselor
     * @return \Illuminate\Http\Response
     */
    public function update(CounselorRequest $request, Counselor $counselor)
    {
        $counselor->name = $request['name'];
        $counselor->nid = $request['nid'];
        $counselor->save();

        return redirect()->route('counselors.index')
            ->with('success', 'Data konselor berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Counselor  $counselor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Counselor $counselor)
    {
        $counselor->delete();

        return redirect()->route('counselors.index')
            ->with('success', 'Data konselor berhasil dihapus');
    }

    public function export_excel()
    {
        return Excel::download(new CounselorExport, 'counselor.xlsx');
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
        $file->move('file_counselor', $nama_file);

        // import data
        Excel::import(new CounselorImport, public_path('/file_counselor/'.$nama_file));

        // notifikasi dengan session
        Session::flash('sukses', 'Data Konselor Berhasil Diimport!');

        // alihkan halaman kembali
        return redirect('/admin/counselors');
    }
}
