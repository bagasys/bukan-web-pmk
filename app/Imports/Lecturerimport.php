<?php

namespace App\Imports;

use App\Models\Lecturer;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class Lecturerimport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Lecturer([
            'name' => $row['name'],
            'nid' => $row['nid'],
            'department' => $row['department'],
            'address' => $row['address'],
            'sex' => $row['sex'],
            'email' => $row['email'],
            'phone' => $row['phone'],
        ]);
    }
}
