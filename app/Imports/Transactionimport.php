<?php

namespace App\Imports;

use App\Models\Transaction;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class Transactionimport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Transaction([
            'sender_name' => $row['sender_name'],
            'sender_account' => $row['sender_account'],
            'send_date' => $row['send_date'],
            'receiver_account' => $row['receiver_account'],
            'wallet' => $row['wallet'],
            'status' => $row['status'],
            'verified_by' => $row['verified_by'],
            'verified_date' => $row['verified_date'],
            'proof' => $row['proof'],
            'amount' => $row['amount'],
            'note' => $row['note'],
        ]);
    }
}
