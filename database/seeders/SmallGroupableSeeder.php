<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class SmallGroupableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Tabel pivot KK, record dosen
        DB::table('small_groupables')->insert([
            'small_group_id' => 1,
            'small_groupable_id' => 1,
            'small_groupable_type' => 'App\Models\Lecturer',
            'is_leader' => 1,
        ]);

        // Tabel pivot KK, record mahasiswa
        DB::table('small_groupables')->insert([
            'small_group_id' => 1,
            'small_groupable_id' => 1,
            'small_groupable_type' => 'App\Models\Student',
            'is_leader' => 0,
        ]);
    }
}
