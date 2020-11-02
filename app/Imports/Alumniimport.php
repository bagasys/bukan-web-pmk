<?php

namespace App\Imports;

use App\Models\Alumni;
use Maatwebsite\Excel\Concerns\OnEachRow;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Row;

class Alumniimport implements OnEachRow, WithHeadingRow
{
    public function onRow(Row $row)
    {
        $row = $row->toArray();

        $alumni = Alumni::firstOrCreate(
            [
                'name' => $row['name'],
            ],
            [
                'username' => $row['username'],
                'department' => $row['department'],
                'job' => $row['job'],
                'sex' => $row['sex'],
                'address' => $row['address'],
                'avatar' => $row['avatar'],
                'year_entry' => $row['year_entry'],
                'year_exit' => $row['year_exit'],
                'year_end' => $row['year_end'],
            ]
        );

        if (! $alumni->wasRecentlyCreated) {
            $alumni->update([
                'name' => $row['name'],
                'username' => $row['username'],
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
}
