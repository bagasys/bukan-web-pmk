<?php

namespace App\Imports;

use App\Models\Lecturer;
use App\Models\ProfileId;
use App\Models\User;
use Maatwebsite\Excel\Concerns\OnEachRow;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Row;

class Lecturerimport implements OnEachRow, WithHeadingRow
{
    public function onRow(Row $row)
    {
        $row = $row->toArray();

        $lecturer = Lecturer::firstOrCreate(
            [
                'nid' => $row['nid'],
                'email' => $row['email'],
            ],
            [
                'name' => $row['name'],
                'department' => $row['department'],
                'address' => $row['address'],
                'sex' => $row['sex'],
                'phone' => $row['phone'],
            ]
        );

        User::firstOrcreate([
            'email' => $row['nid'],
            'password' => bcrypt($row['nid']),
        ])->assignRole('dosen');

        $model_id = Lecturer::select('id')->where('nid', $row['nid'])->first();
        $user_id = User::select('id')->where('email', $row['nid'])->first();

        ProfileId::firstOrcreate([
            'profile_id' => $row['nid'],
            'user_id' => $user_id->id,
            'model_id' => $model_id->id,
            'model_type' => 'App\Models\Lecturer',
        ]);

        if (! $lecturer->wasRecentlyCreated) {
            $lecturer->update([
                'name' => $row['name'],
                'nid' => $row['nid'],
                'department' => $row['department'],
                'address' => $row['address'],
                'sex' => $row['sex'],
                'email' => $row['email'],
                'phone' => $row['phone'],
            ]);
        }
    }
}
