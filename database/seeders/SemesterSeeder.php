<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class SemesterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 8; $i++) {

    DB::table('semesters')->insert([
        'code' => "SEM-$i",
        'name' => "Semester $i",
        'semester_number' => $i
    ]);
}
    }
}
