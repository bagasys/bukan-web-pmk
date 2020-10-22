<?php

namespace App\Imports;

use App\Models\Lecturer;
use Maatwebsite\Excel\Concerns\OnEachRow;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Row;

class Lecturerimport implements OnEachRow, WithHeadingRow
{
    public function onRow(Row $row)
    {
        $row = $row->toArray();

        $lecturer = Lecturer::firstOrCreate(
            [
                'nid' => $row['nid'],
                'email' => $row['email'],
            ],
            [
                'name' => $row['name'],
                'department' => $row['department'],
                'address' => $row['address'],
                'sex' => $row['sex'],
                'phone' => $row['phone'],
            ]
        );

        if (! $lecturer->wasRecentlyCreated) {
            $lecturer->update([
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
}
