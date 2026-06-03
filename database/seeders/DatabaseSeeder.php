<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([

            // Master Reference
            SexSeeder::class,
            ReligionSeeder::class,
            BloodTypeSeeder::class,
            CountrySeeder::class,
            EducationLevelSeeder::class,
            JobSeeder::class,
            IncomeRangeSeeder::class,
            ScholarshipSeeder::class,

            // Status
            StudentStatusSeeder::class,
            lecturerStatusSeeder::class,

            // Academic Master
            FakultasSeeder::class,
            ProdiSeeder::class,
            AcademicYearSeeder::class,
            SemesterSeeder::class,
            MataKuliahSeeder::class,

            // Core Data
            DosenSeeder::class,
            MahasiswaSeeder::class,

            // Academic Transaction
            KRSSeeder::class,
            NilaiSeeder::class,
        ]);
    }
}