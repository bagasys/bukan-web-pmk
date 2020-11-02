<?php

namespace App\Http\Controllers;

use App\Exports\MeetingExport;
use App\Http\Requests\MeetingRequest;
use App\Imports\MeetingImport;
use App\Models\Meeting;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Session;

class MeetingController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:view meeting')->only('index');
        $this->middleware('permission:add meeting')->only('create');
        $this->middleware('permission:view detail meeting')->only('show');
        $this->middleware('permission:edit meeting')->only('edit');
        $this->middleware('permission:edit meeting')->only('import_excel');
        $this->middleware('permission:delete meeting')->only('delete');
    }

    public function index(Request $request)
    {
        $meetings = Meeting::all();

        return view('meetings.index', compact('meetings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('meetings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \app\Http\Requests\MeetingRequest
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(MeetingRequest $request)
    {
        $request['reservationtime'] = explode(' - ', $request['reservationtime']);
        $request['start'] = date('Y-m-d H:i:s', strtotime($request['reservationtime'][0]));
        $request['end'] = date('Y-m-d H:i:s', strtotime($request['reservationtime'][1]));

        Meeting::create([
            'title' => $request['title'],
            'description' => $request['description'],
            'type' => $request['type'],
            'start' => $request['start'],
            'end' => $request['end'],
        ]);

        return redirect()->route('meetings.index')
            ->with('success', 'Meeting berhasil dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param Meeting $meeting
     * @return \Illuminate\Http\Response
     */
    public function show(Meeting $meeting)
    {
        return view('meetings.show', compact('meeting'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Meeting $meeting
     * @return \Illuminate\Http\Response|\Illuminate\View\View
     */
    public function edit(Meeting $meeting)
    {
        return view('meetings.edit', compact('meeting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \app\Http\Requests\MeetingRequest
     * @param  Meeting $meeting
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(MeetingRequest $request, Meeting $meeting)
    {
        $request['reservationtime'] = explode(' - ', $request['reservationtime']);
        $request['start'] = date('Y-m-d H:i:s', strtotime($request['reservationtime'][0]));
        $request['end'] = date('Y-m-d H:i:s', strtotime($request['reservationtime'][1]));

        $meeting->title = $request['title'];
        $meeting->description = $request['description'];
        $meeting->type = $request['type'];
        $meeting->start = $request['start'];
        $meeting->end = $request['end'];

        $meeting->save();

        return redirect()->route('meetings.index')
            ->with('success', 'Meeting Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Meeting $meeting
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Meeting $meeting)
    {
        $meeting->delete();

        return redirect()->route('meetings.index')
            ->with('success', 'Meeting berhasil dihapus');
    }

    public function export_excel()
    {
        return Excel::download(new MeetingExport, 'meeting.xlsx');
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
        $file->move('file_meeting', $nama_file);

        // import data
        Excel::import(new MeetingImport, public_path('/file_meeting/'.$nama_file));

        // notifikasi dengan session
        Session::flash('sukses', 'Data meeting Berhasil Diimport!');

        // alihkan halaman kembali
        return redirect('/admin/meetings');
    }
}
