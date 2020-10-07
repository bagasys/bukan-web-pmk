<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Requests\StudentRequest;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StudentRequest $request)
    {
        Student::create([
            'name' => $request['name'],
            'nrp' => $request['nrp'],
            'origin_address' => $request['origin_address'],
            'current_address' => $request['current_address'],
            'phone' => $request['phone'],
            'department' => $request['department'],
            'birthdate' => $request['birthdate'],
            'year_entry' => $request['year_entry'],
            'year_end' => $request['year_end'],
            'guardian_name' => $request['guardian_name'],
            'guardian_phone' => $request['guardian_phone'],
            'sex' => $request['sex'],
        ]);

        return redirect()->route('students.index')
            ->with('success', 'Data mahasiswa berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(StudentRequest $request, Student $student)
    {
        $student->name = $request['name'];
        $student->nrp = $request['nrp'];
        $student->current_address = $request['current_address'];
        $student->origin_address = $request['origin_address'];
        $student->phone = $request['phone'];
        $student->department = $request['department'];
        $student->birthdate = $request['birthdate'];
        $student->year_entry = $request['year_entry'];
        $student->year_end = $request['year_end'];
        $student->guardian_name = $request['guardian_name'];
        $student->guardian_phone = $request['guardian_phone'];
        $student->sex = $request['sex'];
        $student->save();

        return redirect()->route('students.index')
            ->with('success', 'Data mahasiswa berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()->route('students.index')
            ->with('success', 'Data mahasiswa berhasil dihapus');
    }
}
