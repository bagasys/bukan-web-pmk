<?php

namespace App\Imports;

use App\PrayerRequest;
use Maatwebsite\Excel\Concerns\ToModel;

class PrayerRequestimport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new PrayerRequest([
            //
        ]);
    }
}
