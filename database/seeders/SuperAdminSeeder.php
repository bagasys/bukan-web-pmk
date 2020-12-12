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

        $ketua = User::create([
            'email' => 'ketua@pmk.its.ac.id',
            'password' => bcrypt('ketua123'),
        ]);
        $ketua->assignRole('ketua');

        $bendahara = User::create([
            'email' => 'bendahara@pmk.its.ac.id',
            'password' => bcrypt('bendahara123'),
        ]);
        $bendahara->assignRole('bendahara');

        $sekretaris = User::create([
            'email' => 'sekretaris@pmk.its.ac.id',
            'password' => bcrypt('sekretaris123'),
        ]);
        $sekretaris->assignRole('sekretaris');

        $bph_murid = User::create([
            'email' => 'bphmurid@pmk.its.ac.id',
            'password' => bcrypt('bphmurid123'),
        ]);
        $bph_murid->assignRole('bph pemuridan');

        $bph_dope = User::create([
            'email' => 'bphdope@pmk.its.ac.id',
            'password' => bcrypt('bphdope123'),
        ]);
        $bph_dope->assignRole('bph dope');

        $pkk = User::create([
            'email' => 'pkk@pmk.its.ac.id',
            'password' => bcrypt('pkk123'),
        ]);
        $pkk->assignRole('pkk');

        $mahasiswa = User::create([
            'email' => 'mahasiswa@pmk.its.ac.id',
            'password' => bcrypt('mahasiswa123'),
        ]);
        $mahasiswa->assignRole('mahasiswa');

        $dosen = User::create([
            'email' => 'dosen@pmk.its.ac.id',
            'password' => bcrypt('dosen123'),
        ]);
        $dosen->assignRole('dosen');

        $pengurustpkk = User::create([
            'email' => 'pengurustpkk@pmk.its.ac.id',
            'password' => bcrypt('pengurustpkk123'),
        ]);
        $pengurustpkk->assignRole('pengurus tpkk');

        $alumni = User::create([
            'email' => 'alumni@pmk.its.ac.id',
            'password' => bcrypt('alumni123'),
        ]);
        $alumni->assignRole('alumni');

        $pengurusalumni = User::create([
            'email' => 'pengurusalumni@pmk.its.ac.id',
            'password' => bcrypt('pengurusalumni123'),
        ]);
        $pengurusalumni->assignRole('pengurus alumni');

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
