<?php

namespace App\Exports;

use App\Counseling;
use Maatwebsite\Excel\Concerns\FromCollection;

class CounselingExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Counseling::all();
    }
}
