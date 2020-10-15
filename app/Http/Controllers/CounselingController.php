<?php

namespace App\Http\Controllers;

use App\Models\Counseling;
use App\Http\Requests\CounselingRequest;

class CounselingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $counselings = Counseling::all();
        return view('counselings.index', compact('counselings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('counselings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CounselingRequest $request)
    {
        Counseling::create([
            'counselee_name' => $request['counselee_name'],
            'counselee_contact' => $request['counselee_contact'],
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
        return view('counselings.edit', compact('counseling'));
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
        $counseling->counselee_name = $request['counselee_name'];
        $counseling->counselee_contact = $request['counselee_contact'];
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
}
