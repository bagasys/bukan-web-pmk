<?php

namespace App\Imports;

use App\Counseling;
use Maatwebsite\Excel\Concerns\ToModel;

class Counselingimport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Counseling([
            //
        ]);
    }
}
