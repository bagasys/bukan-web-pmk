<?php

namespace App\Imports;

use App\Models\Alumni;
use App\Models\ProfileId;
use App\Models\User;
use Maatwebsite\Excel\Concerns\OnEachRow;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Row;

class Alumniimport implements OnEachRow, WithHeadingRow
{
    public function onRow(Row $row)
    {
        $row = $row->toArray();

        $alumni = Alumni::firstOrCreate(
            [
                'name' => $row['name'],
            ],
            [
                'username' => $row['username'],
                'department' => $row['department'],
                'job' => $row['job'],
                'sex' => $row['sex'],
                'address' => $row['address'],
                'avatar' => $row['avatar'],
                'year_entry' => $row['year_entry'],
                'year_exit' => $row['year_exit'],
                'year_end' => $row['year_end'],
            ]
        );

        User::firstOrcreate([
            'email' => $row['username'],
            'password' => bcrypt($row['username']),
        ])->assignRole('alumni');

        $model_id = Alumni::select('id')->where('username', $row['username'])->first();
        $user_id = User::select('id')->where('email', $row['username'])->first();

        ProfileId::firstOrcreate([
            'profile_id' => $row['username'],
            'user_id' => $user_id->id,
            'model_id' => $model_id->id,
            'model_type' => 'App\Models\Alumni',
        ]);

        if (! $alumni->wasRecentlyCreated) {
            $alumni->update([
                'name' => $row['name'],
                'username' => $row['username'],
                'department' => $row['department'],
                'job' => $row['job'],
                'sex' => $row['sex'],
                'address' => $row['address'],
                'avatar' => $row['avatar'],
                'year_entry' => $row['year_entry'],
                'year_exit' => $row['year_exit'],
                'year_end' => $row['year_end'],
            ]);
        }
    }
}
