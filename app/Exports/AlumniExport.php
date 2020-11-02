<?php

namespace App\Exports;

use App\Models\Alumni;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Style\Color;
use PhpOffice\PhpSpreadsheet\Style\Fill;

class AlumniExport implements FromCollection, WithHeadings, WithEvents, WithMapping
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Alumni::get([
            'name', 'username', 'department', 'job', 'sex',
            'address', 'avatar', 'year_entry', 'year_exit',
            'year_end',
        ]);
    }

    public function headings(): array
    {
        return [
            'name',
            'username',
            'department',
            'job',
            'sex',
            'address',
            'avatar',
            'year_entry',
            'year_exit',
            'year_end',
        ];
    }

    /**
     * @return array
     */
    public function registerEvents(): array
    {
        return [
            AfterSheet::class   =>  function (AfterSheet $event) {
                $event->sheet->getDelegate()->getStyle('A1:J1')
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
            $row->username,
            $row->department,
            $row->job,
            $row->sex,
            $row->address,
            $row->avatar,
            $row->year_entry,
            $row->year_exit,
            $row->year_end,
        ];
    }
}
