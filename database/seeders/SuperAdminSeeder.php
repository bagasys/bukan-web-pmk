<?php

namespace Database\Seeders;

use App\Models\ProfileId;
use App\Models\Student;
use App\Models\User;
use Illuminate\Database\Seeder;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'email' => 'superadmin@pmk.its.ac.id',
            'password' => bcrypt('superadmin'),
        ]);

        $user->assignRole('super admin');

        $dosen = User::create([
            'email' => 'kevin@pmk.its.ac.id',
            'password' => bcrypt('kevin123'),
        ]);

        $dosen->assignRole('dosen');

        $mahasiswa = User::create([
            'email' => 'adrian@pmk.its.ac.id',
            'password' => bcrypt('kevin123'),
        ]);

        $mahasiswa->assignRole('mahasiswa');

        $alumni = User::create([
            'email' => 'alumni@pmk.its.ac.id',
            'password' => bcrypt('kevin123'),
        ]);

        $alumni->assignRole('alumni');

        // $student = Student::create([
        //     'name' => 'adrian',
        //     'nrp' => '123245',
        //     'origin_address' => 'Surabaya',
        //     'current_address' => 'Surabaya',
        //     'phone' => '0895383',
        //     'department' => 'inf',
        //     'birthdate' => '2001-05-24',
        //     'year_entry' => 2019,
        //     'year_end' => 2023,
        //     'guardian_name' => 'irfan',
        //     'guardian_phone' => '08938934',
        //     'sex' => 'L',
        // ]);

        // $lecturer = Student::create([
        //     'name' => 'adrian',
        //     'nrp' => '123245',
        //     'origin_address' => 'Surabaya',
        //     'current_address' => 'Surabaya',
        //     'phone' => '0895383',
        //     'department' => 'inf',
        //     'birthdate' => '2001-05-24',
        //     'year_entry' => 2019,
        //     'year_end' => 2023,
        //     'guardian_name' => 'irfan',
        //     'guardian_phone' => '08938934',
        //     'sex' => 'L',
        // ]);

        // $student = Student::create([
        //     'name' => 'adrian',
        //     'nrp' => '123245',
        //     'origin_address' => 'Surabaya',
        //     'current_address' => 'Surabaya',
        //     'phone' => '0895383',
        //     'department' => 'inf',
        //     'birthdate' => '2001-05-24',
        //     'year_entry' => 2019,
        //     'year_end' => 2023,
        //     'guardian_name' => 'irfan',
        //     'guardian_phone' => '08938934',
        //     'sex' => 'L',
        // ]);

        // $profile = ProfileId::create([
        //     'profile_id' => '1',
        //     'user_id' => 3,
        //     'model_id' => 1,
        //     'model_type' => 'App\Models\Student',
        // ],[
        //     'profile_id' => '2',
        //     'user_id' => 2,
        //     'model_id' => 1,
        //     'model_type' => 'App\Models\Lecturer',
        // ],[
        //     'profile_id' => '3',
        //     'user_id' => 4,
        //     'model_id' => 1,
        //     'model_type' => 'App\Models\Alumni',
        // ]);
    }
}
