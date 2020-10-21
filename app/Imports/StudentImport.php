<?php

namespace App\Imports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\OnEachRow;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Row;

class StudentImport implements onEachRow, WithHeadingRow
{
    public function onRow(Row $row)
    {
        $row = $row->toArray();

        $student = Student::firstOrCreate(
            ['nrp' => $row['nrp']],
            [
                'name' => $row['name'],
                'current_address' => $row['current_address'],
                'origin_address' => $row['origin_address'],
                'phone' => $row['phone'],
                'department' => $row['department'],
                'birthdate' => $row['birthdate'],
                'year_entry' => $row['year_entry'],
                'year_end' => $row['year_end'],
                'guardian_name' => $row['guardian_name'],
                'guardian_phone' => $row['guardian_phone'],
                'sex' => $row['sex'],
            ]
        );

        // if (!$student->wasRecentlyCreated) {
        //     $student->update([
        //         'name' => $row['name'],
        //         'current_address' => $row['current_address'],
        //         'origin_address' => $row['origin_address'],
        //         'phone' => $row['phone'],
        //         'department' => $row['department'],
        //         'birthdate' => $row['birthdate'],
        //         'year_entry' => $row['year_entry'],
        //         'year_end' => $row['year_end'],
        //         'guardian_name' => $row['guardian_name'],
        //         'guardian_phone' => $row['guardian_phone'],
        //         'sex' => $row['sex'],
        //     ]);
        // }
        return $student;
    }
}
