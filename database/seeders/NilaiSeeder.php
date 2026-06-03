<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class NilaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('student_grades')->insert([
    [
        'student_id' => 1,
        'subject_id' => 1,
        'study_card_id' => 1,

        'numeric_grade' => 85,

        'letter_grade' => 'A',

        'grade_point' => 4,

        'sks' => 3,

        'is_passed' => true
    ]
]);
    }
}
