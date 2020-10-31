<?php

namespace App\Http\Controllers;

use App\Models\FridayServiceReport;
use Illuminate\Http\Request;

class FridayServiceReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('fridayservicereports.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fridayservicereports.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $imgName = null;
        if ($request->hasFile('image')) {
            $img = $request->file('image');
            $ext = $img->getClientOriginalExtension();
            $imgName = time().str_replace(' ', '', $request['title'].'.'.$ext);
            $imgPath = $img->storeAs('public/fridayservicereports', $imgName);
        }

        $fridayservicereport = FridayServiceReport::create([
            'title' => $request['title'],
            'speaker' => $request['speaker'],
            'date' => $request['date'],
            'content' => $request['content'],
            'image' => $imgName,
        ]);

        return redirect()->route('fridayservicereports.index')
            ->with('success', 'Reportase PJ berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FridayServiceReport  $fridayServiceReport
     * @return \Illuminate\Http\Response
     */
    public function show(FridayServiceReport $fridayservicereport)
    {
        return view('fridayservicereports.show', compact('fridayservicereport'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FridayServiceReport  $fridayServiceReport
     * @return \Illuminate\Http\Response
     */
    public function edit(FridayServiceReport $fridayservicereport)
    {
        return view('fridayservicereports.edit', compact('fridayservicereport'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FridayServiceReport  $fridayServiceReport
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FridayServiceReport $fridayservicereport)
    {
        $imgName = null;
        if ($request->hasFile('image')) {
            $img = $request->file('image');
            $ext = $img->getClientOriginalExtension();
            $imgName = time().str_replace(' ', '', $request['title'].'.'.$ext);
            $imgPath = $img->storeAs('public/fridayservicereports', $imgName);
        }

        $fridayservicereport->title = $request['title'];
        $fridayservicereport->speaker = $request['speaker'];
        $fridayservicereport->date = $request['date'];
        $fridayservicereport->content = $request['content'];
        $fridayservicereport->image = $imgName;
        $fridayservicereport->save();

        return redirect()->route('fridayservicereports.index')
            ->with('success', 'Reportase PJ berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FridayServiceReport  $fridayServiceReport
     * @return \Illuminate\Http\Response
     */
    public function destroy(FridayServiceReport $fridayservicereport)
    {
        $fridayservicereport->delete();

        return redirect()->route('fridayservicereports.index')
            ->with('success', 'Reportase PJ berhasil dihapus');
    }
}
