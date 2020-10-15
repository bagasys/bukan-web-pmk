<?php

namespace App\Imports;

use App\Meeting;
use Maatwebsite\Excel\Concerns\ToModel;

class Meetingimport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Meeting([
            //
        ]);
    }
}
