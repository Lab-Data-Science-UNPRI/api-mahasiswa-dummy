<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('programs')->insert([
    [
        'faculty_id' => 1,
        'code' => 'IF',
        'name' => 'Informatika',
        'degree' => 'S1'
    ],
    [
        'faculty_id' => 1,
        'code' => 'SI',
        'name' => 'Sistem Informasi',
        'degree' => 'S1'
    ]
]);
    }
}
