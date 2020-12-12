<?php

namespace App\Http\Controllers;

use App\Exports\PrayerRequestExport;
use App\Http\Requests\PrayerRequestRequest;
use App\Imports\PrayerRequestImport;
use App\Models\PrayerRequest;
use Auth;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Session;

class PrayerRequestController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:view prayer request')->only('index');
        $this->middleware('permission:add prayer request')->only('create');
        $this->middleware('permission:view detail prayer request')->only('show');
        $this->middleware('permission:edit prayer request')->only('edit');
        $this->middleware('permission:edit prayer request')->only('import_excel');
        $this->middleware('permission:delete prayer request')->only('delete');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (Auth::user()->hasRole(['super admin', 'bph pemuridan', 'bph dope'])) {
            $prayerRequests = PrayerRequest::all();
        } else {
            $user = Auth::user()->profileIds[0];
            $prayerRequests = PrayerRequest::where('nrp', $user->model->nrp)->get();
        }

        return view('prayer-requests.index', compact('prayerRequests'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('prayer-requests.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PrayerRequestRequest $request)
    {
        $user = Auth::user()->profileIds[0];
        PrayerRequest::create([
            'nrp' => $user->model->nrp,
            'name' => $request['name'],
            'prayer_content' => $request['prayer_content'],
            'status' => $request['status'],
        ]);

        return redirect()->route('prayer-requests.index')
            ->with('success', 'Data request doa berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PrayerRequest  $prayerRequest
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PrayerRequest  $prayerRequest
     * @return \Illuminate\Http\Response
     */
    public function edit(PrayerRequest $prayerRequest)
    {
        return view('prayer-requests.edit', compact('prayerRequest'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PrayerRequest  $prayerRequest
     * @return \Illuminate\Http\Response
     */
    public function update(PrayerRequestRequest $request, PrayerRequest $prayerRequest)
    {
        $user = Auth::user()->profileIds[0];
        $prayerRequest->nrp = $user->model->nrp;
        $prayerRequest->name = $request['name'];
        $prayerRequest->prayer_content = $request['prayer_content'];
        $prayerRequest->status = $request['status'];
        $prayerRequest->save();

        return redirect()->route('prayer-requests.index')
            ->with('success', 'Data request doa berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PrayerRequest  $prayerRequest
     * @return \Illuminate\Http\Response
     */
    public function destroy(PrayerRequest $prayerRequest)
    {
        $prayerRequest->delete();

        return redirect()->route('prayer-requests.index')
            ->with('success', 'Data request doa berhasil dihapus');
    }

    public function export_excel()
    {
        return Excel::download(new PrayerRequestExport, 'PrayerRequest.xlsx');
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
        $file->move('file_PrayerRequest', $nama_file);

        // import data
        Excel::import(new PrayerRequestImport, public_path('/file_PrayerRequest/'.$nama_file));

        // notifikasi dengan session
        Session::flash('sukses', 'Data Pray Request Berhasil Diimport!');

        // alihkan halaman kembali
        return redirect('/admin/prayer-requests');
    }
}
