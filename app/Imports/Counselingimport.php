<?php

namespace App\Imports;

use App\Models\Counseling;
use App\Models\Counselor;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class Counselingimport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        $counselor = Counselor::where('name', $row['counselor_name'])->first();
        $row['counselor_id'] = $counselor->id;

        return new Counseling([
            // 'nrp' => $row['nrp'],
            'counselee_name' => $row['counselee_name'],
            'counselee_contact' => $row['counselee_contact'],
            'counselor_id' => $row['counselor_id'],
        ]);
    }
}
