<?php

namespace App\Http\Controllers;

use App\Exports\LecturerExport;
use App\Http\Requests\LecturerRequest;
use App\Imports\LecturerImport;
use App\Models\Lecturer;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Session;

class LecturerController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:view lecturer')->only('index');
        $this->middleware('permission:add lecturer')->only('create');
        $this->middleware('permission:view detail lecturer')->only('show');
        $this->middleware('permission:edit lecturer')->only('edit');
        $this->middleware('permission:edit lecturer')->only('import_excel');
        $this->middleware('permission:delete lecturer')->only('destroy');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $pageNumber = $request->query('page');
        $lecturers = Lecturer::paginate(10, ['*'], 'page', $pageNumber);

        return view('lecturers.index', compact('lecturers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lecturers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\LecturerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LecturerRequest $request)
    {
        Lecturer::create([
            'name' => $request['name'],
            'nid' => $request['nid'],
            'department' => $request['department'],
            'address' => $request['address'],
            'sex' => $request['sex'],
            'email' => $request['email'],
            'phone' => $request['phone'],
        ]);

        return redirect()->route('lecturers.index')
            ->with('success', 'Data dosen berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lecturer  $lecturer
     * @return \Illuminate\Http\Response
     */
    public function show(Lecturer $lecturer)
    {
        return view('lecturers.show', compact('lecturer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lecturer  $lecturer
     * @return \Illuminate\Http\Response
     */
    public function edit(Lecturer $lecturer)
    {
        return view('lecturers.edit', compact('lecturer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\LecturerRequest  $request
     * @param  \App\Models\Lecturer  $lecturer
     * @return \Illuminate\Http\Response
     */
    public function update(LecturerRequest $request, Lecturer $lecturer)
    {
        $lecturer->name = $request['name'];
        $lecturer->nid = $request['nid'];
        $lecturer->department = $request['department'];
        $lecturer->address = $request['address'];
        $lecturer->sex = $request['sex'];
        $lecturer->email = $request['email'];
        $lecturer->phone = $request['phone'];
        $lecturer->save();

        return redirect()->route('lecturers.index')
            ->with('success', 'Data dosen berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lecturer  $lecturer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lecturer $lecturer)
    {
        $lecturer->delete();

        return redirect()->route('lecturers.index')
            ->with('success', 'Data dosen berhasil dihapus');
    }

    public function export_excel()
    {
        return Excel::download(new LecturerExport, 'dosen.xlsx');
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
        $file->move('file_dosen', $nama_file);

        // import data
        Excel::import(new LecturerImport, public_path('/file_dosen/'.$nama_file));

        // notifikasi dengan session
        Session::flash('sukses', 'Data Dosen Berhasil Diimport!');

        // alihkan halaman kembali
        return redirect('/admin/lecturers');
    }
}
