<?php

namespace App\Imports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\ToModel;

class StudentImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Student([
            'name' => $row[2],
            'nrp' => $row[3],
            'current_address' => $row[4],
            'origin_address' => $row[5],
            'phone' => $row[6],
            'department' => $row[7],
            'birthdate' => $row[8],
            'year_entry' => $row[9],
            'year_end' => $row[10],
            'guardian_name' => $row[11],
            'guardian_phone' => $row[12],
            'sex' => $row[13],
        ]);
    }
}
