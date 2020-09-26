<?php

namespace App\Http\Controllers;

use App\Models\Lecturer;
use Illuminate\Http\Request;

class LecturerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lecturers = Lecturer::all();
        return view('lecturer.index', compact('lecturers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lecturer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'nid' => 'required|string',
            'department' => 'required|string',
            'sex' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);

        Lecturer::create([
            'name' => $request['name'],
            'nid' => $request['nid'],
            'department' => $request['department'],
            'address' => $request['address'],
            'sex' => $request['sex'],
            'email' => $request['email'],
            'phone' => $request['phone'],
        ]);

        return redirect()->route('lecturer.index')
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

        return view('lecturer.show', compact('lecturer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lecturer  $lecturer
     * @return \Illuminate\Http\Response
     */
    public function edit(Lecturer $lecturer)
    {
        return view('lecturer.edit', compact('lecturer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lecturer  $lecturer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lecturer $lecturer)
    {
        $request->validate([
            'name' => 'required|string',
            'nid' => 'required|string',
            'department' => 'required|string',
            'sex' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);

        $lecturer->name = $request['name'];
        $lecturer->nid = $request['nid'];
        $lecturer->department = $request['department'];
        $lecturer->sex = $request['sex'];
        $lecturer->email = $request['email'];
        $lecturer->phone = $request['phone'];
        $lecturer->save();

        return redirect()->route('lecturer.index')
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

        return redirect()->route('lecturer.index')
            ->with('success', 'Data dosen berhasil dihapus');
    }
}
