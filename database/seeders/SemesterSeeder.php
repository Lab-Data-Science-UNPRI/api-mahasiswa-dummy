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
        //
        DB::table('semesters')->insert([
            ['id' => 1, 'name' => 'Semester 1', 'number' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'name' => 'Semester 2', 'number' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'name' => 'Semester 3', 'number' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 4, 'name' => 'Semester 4', 'number' => 4, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
