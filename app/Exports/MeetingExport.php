<?php

namespace App\Exports;

use App\Meeting;
use Maatwebsite\Excel\Concerns\FromCollection;

class MeetingExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Meeting::all();
    }
}
