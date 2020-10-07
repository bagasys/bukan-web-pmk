<?php

namespace App\Http\Controllers;

use App\Http\Requests\CounselorRequest;
use App\Models\Counselor;

class CounselorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $counselors = Counselor::all();

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
            'nrp' => $request['nrp'],
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
        $counselor->nrp = $request['nrp'];
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
}
