<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CurriculumItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('curriculum_items')->insert([
            [
                'curriculum_id' => 1,
                'number_id' => 1,
                'semester_id' => 1,
                'code' => 'IF101',
                'title' => 'Algoritma dan Pemrograman',
                'sks' => 3,
                'subject_id' => 1,
                'closed_id' => 0,
                'total_point' => 3.0,
                'evaluation_status_id' => 1,
                'can_be_evaluate' => true,
                'spada_course_id' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'curriculum_id' => 1,
                'number_id' => 2,
                'semester_id' => 1,
                'code' => 'IF102',
                'title' => 'Basis Data',
                'sks' => 3,
                'subject_id' => 2,
                'closed_id' => 0,
                'total_point' => 3.0,
                'evaluation_status_id' => 1,
                'can_be_evaluate' => true,
                'spada_course_id' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'curriculum_id' => 1,
                'number_id' => 3,
                'semester_id' => 1,
                'code' => 'IF103',
                'title' => 'Matematika Diskrit',
                'sks' => 3,
                'subject_id' => 3,
                'closed_id' => 0,
                'total_point' => 3.0,
                'evaluation_status_id' => 1,
                'can_be_evaluate' => true,
                'spada_course_id' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'curriculum_id' => 1,
                'number_id' => 4,
                'semester_id' => 1,
                'code' => 'IF104',
                'title' => 'Sistem Operasi',
                'sks' => 3,
                'subject_id' => 4,
                'closed_id' => 0,
                'total_point' => 3.0,
                'evaluation_status_id' => 1,
                'can_be_evaluate' => true,
                'spada_course_id' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'curriculum_id' => 1,
                'number_id' => 5,
                'semester_id' => 2,
                'code' => 'IF105',
                'title' => 'Pemrograman Web',
                'sks' => 3,
                'subject_id' => 5,
                'closed_id' => 0,
                'total_point' => 3.0,
                'evaluation_status_id' => 1,
                'can_be_evaluate' => true,
                'spada_course_id' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'curriculum_id' => 1,
                'number_id' => 6,
                'semester_id' => 2,
                'code' => 'IF106',
                'title' => 'Jaringan Komputer',
                'sks' => 3,
                'subject_id' => 6,
                'closed_id' => 0,
                'total_point' => 3.0,
                'evaluation_status_id' => 1,
                'can_be_evaluate' => true,
                'spada_course_id' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'curriculum_id' => 1,
                'number_id' => 7,
                'semester_id' => 2,
                'code' => 'IF107',
                'title' => 'Rekayasa Perangkat Lunak',
                'sks' => 3,
                'subject_id' => 7,
                'closed_id' => 0,
                'total_point' => 3.0,
                'evaluation_status_id' => 1,
                'can_be_evaluate' => true,
                'spada_course_id' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
