<?php

namespace App\Exports;

use App\Models\Meeting;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Style\Color;
use PhpOffice\PhpSpreadsheet\Style\Fill;

class MeetingExport implements FromCollection, WithHeadings, WithEvents, WithMapping
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Meeting::get([
            'title', 'description', 'type', 'start', 'end',
        ]);
    }

    public function headings(): array
    {
        return [
                'title',
                'description',
                'type',
                'start',
                'end',
            ];
    }

    /**
     * @return array
     */
    public function registerEvents(): array
    {
        return [
            AfterSheet::class   =>  function (AfterSheet $event) {
                $event->sheet->getDelegate()->getStyle('A1:E1')
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
            $row->title,
            $row->description,
            $row->type,
            $row->start,
            $row->end,
        ];
    }
}
