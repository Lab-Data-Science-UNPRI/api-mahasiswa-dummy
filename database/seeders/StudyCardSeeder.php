<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudyCardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('study_cards')->insert([
            [
                'student_id' => 1,
                'lecturer_id' => 1,
                'semester_id' => 1,
                'year_id' => 2,
                'stage_id' => 1,
                'program_id' => 1,
                'study_card_code' => 'KRS-2026-001',
                'middle_term_code' => 'UTS-2026-001',
                'final_term_code' => 'UAS-2026-001',
                'student_code' => 'STD001',
                'status_id' => 1,
                'print_study_card_id' => 0,
                'print_middle_card_id' => 0,
                'print_final_card_id' => 0,
                'calculated_ip_score' => 3.75,
                'closed_id' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
