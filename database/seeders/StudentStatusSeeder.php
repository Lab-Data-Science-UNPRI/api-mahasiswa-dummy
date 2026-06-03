<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class StudentStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('student_statuses')->insert([
    ['code' => 'ACTIVE', 'name' => 'Aktif'],
    ['code' => 'LEAVE', 'name' => 'Cuti'],
    ['code' => 'DROP_OUT', 'name' => 'Drop Out'],
    ['code' => 'GRADUATED', 'name' => 'Lulus'],
]);
    }
}
