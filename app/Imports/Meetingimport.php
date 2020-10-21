<?php

namespace App\Imports;

use App\Models\Meeting;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class Meetingimport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Meeting([
            'title' => $row['title'],
            'description' => $row['description'],
            'type' => $row['type'],
            'start' => $row['start'],
            'end' => $row['end'],
        ]);
    }
}
