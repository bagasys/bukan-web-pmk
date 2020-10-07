<?php

namespace App\Http\Controllers;

use App\Http\Requests\MeetingRequest;
use App\Models\Meeting;

use Illuminate\Http\Request;

class MeetingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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
        $request['start'] = date('Y-m-d H:i:s'  ,strtotime($request['reservationtime'][0]));
        $request['end'] = date('Y-m-d H:i:s'  ,strtotime($request['reservationtime'][1]));

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
        $request['start'] = date('Y-m-d H:i:s'  ,strtotime($request['reservationtime'][0]));
        $request['end'] = date('Y-m-d H:i:s'  ,strtotime($request['reservationtime'][1]));

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
}
