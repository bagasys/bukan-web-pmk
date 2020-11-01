<?php

namespace Database\Seeders;

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
    }
}
