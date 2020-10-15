<?php

namespace App\Exports;

use App\Lecturer;
use Maatwebsite\Excel\Concerns\FromCollection;

class LecturerExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Lecturer::all();
    }
}
