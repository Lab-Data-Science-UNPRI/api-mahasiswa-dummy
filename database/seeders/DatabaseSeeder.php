<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            ProgramSeeder::class,
            SemesterSeeder::class,
            YearSeeder::class,
            StageSeeder::class,
            LecturerSeeder::class,
            StudentSeeder::class,
            StudyCardSeeder::class,
            CurriculumItemSeeder::class,
        ]);
    }
}