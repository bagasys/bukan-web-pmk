<?php

namespace App\Imports;

use App\Models\Counseling;
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
        // $row['counselor_id'] = Counseling::find(1)->counselor()->where('name',$row['counselor_name']);
        return new Counseling([
            'counselee_name' => $row['counselee_name'],
            'counselee_contact' => $row['counselee_contact'],
            'counselor_id' => $row['counselor_id'],
        ]);
    }
}
