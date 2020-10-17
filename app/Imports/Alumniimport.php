<?php

namespace App\Imports;

use App\Models\Alumni;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class Alumniimport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Alumni([
            'name' => $row['name'],
            'department' => $row['department'],
            'job' => $row['job'],
            'sex' => $row['sex'],
            'address' => $row['address'],
            'avatar' => $row['avatar'],
            'year_entry' => $row['year_entry'],
            'year_exit' => $row['year_exit'],
            'year_end' => $row['year_end'],
        ]);
    }
}
