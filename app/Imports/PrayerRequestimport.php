<?php

namespace App\Imports;

use App\Models\PrayerRequest;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class PrayerRequestimport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new PrayerRequest([
            'name' => $row['name'],
            'prayer_content' => $row['prayer_content'],
            'status' => $row['status'],
        ]);
    }
}
