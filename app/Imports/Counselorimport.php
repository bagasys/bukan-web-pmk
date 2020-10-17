<?php

namespace App\Imports;

use App\Models\Counselor;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class Counselorimport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Counselor([
            'name' => $row['name'],
            'nrp' => $row['nrp'],
            'nid' => $row['nid'],
        ]);
    }
}
