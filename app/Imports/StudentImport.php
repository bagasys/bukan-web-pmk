<?php

namespace App\Imports;

use App\Models\ProfileId;
use App\Models\Student;
use App\Models\User;
use Maatwebsite\Excel\Concerns\OnEachRow;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Row;

class StudentImport implements onEachRow, WithHeadingRow
{
    public function onRow(Row $row)
    {
        $row = $row->toArray();

        $student = Student::firstOrCreate(
            ['nrp' => $row['nrp']],
            [
                'name' => $row['name'],
                'current_address' => $row['current_address'],
                'origin_address' => $row['origin_address'],
                'phone' => $row['phone'],
                'department' => $row['department'],
                'birthdate' => $row['birthdate'],
                'year_entry' => $row['year_entry'],
                'year_end' => $row['year_end'],
                'guardian_name' => $row['guardian_name'],
                'guardian_phone' => $row['guardian_phone'],
                'sex' => $row['sex'],
            ]
        );

        User::firstOrcreate([
            'email' => $row['nrp'],
            'password' => bcrypt($row['nrp']),
        ])->assignRole('mahasiswa');

        $model_id = Student::select('id')->where('nrp', $row['nrp'])->first();
        $user_id = User::select('id')->where('email', $row['nrp'])->first();

        ProfileId::firstOrcreate([
            'profile_id' => $row['nrp'],
            'user_id' => $user_id->id,
            'model_id' => $model_id->id,
            'model_type' => 'App\Models\Student',
        ]);

        if (! $student->wasRecentlyCreated) {
            $student->update([
                'name' => $row['name'],
                'current_address' => $row['current_address'],
                'origin_address' => $row['origin_address'],
                'phone' => $row['phone'],
                'department' => $row['department'],
                'birthdate' => $row['birthdate'],
                'year_entry' => $row['year_entry'],
                'year_end' => $row['year_end'],
                'guardian_name' => $row['guardian_name'],
                'guardian_phone' => $row['guardian_phone'],
                'sex' => $row['sex'],
            ]);
        }
    }
}
