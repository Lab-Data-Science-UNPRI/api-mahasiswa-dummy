<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('programs')->insert([
            [
                'id' => 1,
                'code' => 'TI',
                'name' => 'Teknik Informatika',
                'degree' => 'S1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'code' => 'SI',
                'name' => 'Sistem Informasi',
                'degree' => 'S1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'code' => 'MI',
                'name' => 'Manajemen Informatika',
                'degree' => 'D3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
