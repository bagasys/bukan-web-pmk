<?php

namespace App\Imports;

use App\Models\Counselor;
use Maatwebsite\Excel\Concerns\OnEachRow;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Row;

class Counselorimport implements OnEachRow, WithHeadingRow
{
    public function onRow(Row $row)
    {
        $row = $row->toArray();

        $counselor = Counselor::firstOrCreate(
            [
                'nid' => $row['nid'],
            ],
            [
                'name' => $row['name'],
            ]
        );

        if (! $counselor->wasRecentlyCreated) {
            $counselor->update([
                'name' => $row['name'],
                'nid' => $row['nid'],
            ]);
        }
    }
}
