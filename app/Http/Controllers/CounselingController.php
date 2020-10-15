<?php

namespace App\Http\Controllers;

use App\Http\Requests\CounselingRequest;
use App\Models\Counseling;
use App\Models\Counselor;

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
        Counseling::create([
            'counselee_name' => $request['counselee_name'],
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
        $counseling->counselee_name = $request['counselee_name'];
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
}
