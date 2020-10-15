<?php

namespace App\Exports;

use App\PrayerRequest;
use Maatwebsite\Excel\Concerns\FromCollection;

class PrayerRequestExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return PrayerRequest::all();
    }
}
