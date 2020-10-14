<?php

namespace App\Exports;

use App\Models\Student;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use PhpOffice\PhpSpreadsheet\Style\Color;

class StudentExport implements FromCollection, WithHeadings, WithEvents, WithMapping
{

    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Student::get([
            'name', 'nrp', 'current_address', 'origin_address',
            'phone', 'department', 'birthdate',
            'year_entry', 'year_end', 'guardian_name', 'guardian_phone', 'sex'
        ]);
    }

    public function headings(): array
    {
        return [
            'name',
            'nrp',
            'current_address',
            'origin_address',
            'phone',
            'department',
            'birthdate',
            'year_entry',
            'year_end',
            'guardian_name',
            'guardian_phone',
            'sex',
        ];
    }

    /**
     * @return array
     */
    public function registerEvents(): array
    {
        return [
            AfterSheet::class   =>  function (AfterSheet $event) {
                $event->sheet->getDelegate()->getStyle('A1:L1')
                    ->getFill()->setFillType(Fill::FILL_SOLID)
                    ->getStartColor()->setARGB(Color::COLOR_YELLOW);
            },
        ];
    }

    /**
     * @param mixed $row
     *
     * @return array
     */
    public function map($row): array
    {
        return [
            $row->name,
            $row->nrp,
            $row->current_address,
            $row->origin_address,
            $row->phone,
            $row->department,
            $row->birthdate,
            $row->year_entry,
            $row->year_end,
            $row->guardian_name,
            $row->guardian_phone,
            $row->sex,
        ];
    }
}
