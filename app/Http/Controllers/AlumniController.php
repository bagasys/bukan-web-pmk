<?php

namespace App\Http\Controllers;

use App\Http\Requests\AlumniRequest;
use App\Models\Alumni;

class AlumniController extends Controller
{
    public function __construct()
    {
            $this->middleware('permission:view alumni')->only('index');
            $this->middleware('permission:add alumni')->only('create');
            $this->middleware('permission:view alumni')->only('view');
            $this->middleware('permission:edit alumni')->only('edit');
            $this->middleware('permission:edit alumni')->only('import_excel');
            $this->middleware('permission:delete alumni')->only('delete');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumnis = Alumni::all();

        return view('alumnis.index', compact('alumnis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('alumnis.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AlumniRequest $request)
    {
        alumni::create([
            'name' => $request['name'],
            'username' => $request['username'],
            'department' => $request['department'],
            'job' => $request['job'],
            'sex' => $request['sex'],
            'address' => $request['address'],
            'avatar' => $request['avatar'],
            'year_entry' => $request['year_entry'],
            'year_exit' => $request['year_exit'],
            'year_end' => $request['year_end'],
        ]);

        return redirect()->route('alumnis.index')
            ->with('success', 'Data alumni berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alumni  $alumni
     * @return \Illuminate\Http\Response
     */
    public function show(Alumni $alumni)
    {
        return view('alumnis.show', compact('alumni'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alumni  $alumni
     * @return \Illuminate\Http\Response
     */
    public function edit(Alumni $alumni)
    {
        return view('alumnis.edit', compact('alumni'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Alumni  $alumni
     * @return \Illuminate\Http\Response
     */
    public function update(AlumniRequest $request, Alumni $alumni)
    {
        $alumni->name = $request['name'];
        $alumni->department = $request['department'];
        $alumni->job = $request['job'];
        $alumni->sex = $request['sex'];
        $alumni->address = $request['address'];
        $alumni->avatar = $request['avatar'];
        $alumni->year_entry = $request['year_entry'];
        $alumni->year_exit = $request['year_exit'];
        $alumni->year_end = $request['year_end'];
        $alumni->save();

        return redirect()->route('alumnis.index')
            ->with('success', 'Data alumni berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alumni  $alumni
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alumni $alumni)
    {
        $alumni->delete();

        return redirect()->route('alumnis.index')
            ->with('success', 'Data alumni berhasil dihapus');
    }
}
