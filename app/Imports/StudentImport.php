<?php

namespace App\Imports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class StudentImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Student([
            'name' => $row['name'],
            'nrp' => $row['nrp'],
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
        ]);
    }
}
