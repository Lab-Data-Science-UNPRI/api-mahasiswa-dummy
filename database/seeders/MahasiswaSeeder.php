<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('students')->insert([
    [
        'program_id' => 1,
        'advisor_lecturer_id' => 1,

        'student_number' => '221401001',

        'name' => 'Budi Santoso',

        'email' => 'budi@student.ac.id',

        'current_semester_id' => 4,

        'status_id' => 1
    ]
]);
    }
}
