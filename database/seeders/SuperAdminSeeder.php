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
    }
}
