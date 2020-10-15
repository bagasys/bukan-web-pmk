<?php

namespace App\Exports;

use App\Alumni;
use Maatwebsite\Excel\Concerns\FromCollection;

class AlumniExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Alumni::get([
            'name', 'department', 'job', 'sex',
            'address', 'year_entry', 'year_exit',
            'year_end',
        ]);
    }
}
