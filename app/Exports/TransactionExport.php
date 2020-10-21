<?php

namespace App\Exports;

use App\Models\Transaction;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Style\Color;
use PhpOffice\PhpSpreadsheet\Style\Fill;

class TransactionExport implements FromCollection, WithHeadings, WithEvents, WithMapping
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Transaction::get([
            'sender_name', 'sender_account', 'send_date', 'receiver_account',
            'wallet', 'status', 'verified_by', 'verified_date',
            'proof', 'amount', 'note',
        ]);
    }

    public function headings(): array
    {
        return [
                'sender_name',
                'sender_account',
                'send_date',
                'receiver_account',
                'wallet',
                'status',
                'verified_by',
                'verified_date',
                'proof',
                'amount',
                'note',
            ];
    }

    /**
     * @return array
     */
    public function registerEvents(): array
    {
        return [
            AfterSheet::class   =>  function (AfterSheet $event) {
                $event->sheet->getDelegate()->getStyle('A1:K1')
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
            $row->sender_name,
            $row->sender_account,
            $row->send_date,
            $row->receiver_account,
            $row->wallet,
            $row->status,
            $row->verified_by,
            $row->verified_date,
            $row->proof,
            $row->amount,
            $row->note,
        ];
    }
}
