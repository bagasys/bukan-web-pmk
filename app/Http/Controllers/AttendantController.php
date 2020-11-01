<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use App\Models\Attendant;
use App\Models\Lecturer;
use App\Models\Meeting;
use App\Models\Student;
use Illuminate\Http\Request;

class AttendantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $meeting = Meeting::find($id);

        return view('attendants.create', compact('meeting'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeStudent(Request $request, $id)
    {
        $meeting = Meeting::find($id);
        $student = Student::where('nrp', $request['nrp'])->first();

        Attendant::create([
            'meeting_id' => $meeting->id,
            'nrp' => $request['nrp'],
            'origin' => 'ITS',
            'name' => $student->name,
        ]);

        return redirect()->route('attendants.create')
            ->with('success', 'Berhasil absen.');
    }

    public function storeAlumni(Request $request, $id)
    {
        $meeting = Meeting::find($id);
        $alumni = Alumni::where('username', $request['username'])->first();
        Attendant::create([
            'meeting_id' => $meeting->id,
            'username' => $request['username'],
            'origin' => 'ITS',
            'name' => $alumni->name,
        ]);

        return redirect()->route('attendants.create')
            ->with('success', 'Berhasil absen.');
    }

    public function storeLecturer(Request $request, $id)
    {
        $meeting = Meeting::find($id);
        $lecturer = Lecturer::where('nid', $request['nid'])->first();
        Attendant::create([
            'meeting_id' => $meeting->id,
            'nid' => $request['nid'],
            'origin' => 'ITS',
            'name' => $lecturer->name,
        ]);

        return redirect()->route('attendants.create')
            ->with('success', 'Berhasil absen.');
    }

    public function storePublic(Request $request, $id)
    {
        $meeting = Meeting::find($id);
        Attendant::create([
            'meeting_id' => $meeting->id,
            'origin' => $request['origin'],
            'name' => $request['name'],
        ]);

        return redirect()->route('attendants.create')
            ->with('success', 'Berhasil absen.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Attendant  $attendant
     * @return \Illuminate\Http\Response
     */
    public function show(Attendant $attendant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Attendant  $attendant
     * @return \Illuminate\Http\Response
     */
    public function edit(Attendant $attendant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Attendant  $attendant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Attendant $attendant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Attendant  $attendant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Attendant $attendant)
    {
        //
    }
}
