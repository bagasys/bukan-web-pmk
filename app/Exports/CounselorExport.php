<?php

namespace App\Exports;

use App\Counselor;
use Maatwebsite\Excel\Concerns\FromCollection;

class CounselorExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Counselor::all();
    }
}
