<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {

            $table->id();

            /*
            |--------------------------------------------------------------------------
            | Academic Relations
            |--------------------------------------------------------------------------
            */

            $table->foreignId('program_id')
                ->constrained('programs')
                ->cascadeOnUpdate()
                ->restrictOnDelete();

            $table->foreignId('advisor_lecturer_id')
                ->nullable()
                ->constrained('lecturers')
                ->cascadeOnUpdate()
                ->nullOnDelete();

            $table->foreignId('status_id')
                ->nullable()
                ->constrained('student_statuses')
                ->cascadeOnUpdate()
                ->nullOnDelete();

            /*
            |--------------------------------------------------------------------------
            | References
            |--------------------------------------------------------------------------
            */

            $table->foreignId('sex_id')
                ->nullable()
                ->constrained('sexes')
                ->cascadeOnUpdate()
                ->nullOnDelete();

            $table->foreignId('religion_id')
                ->nullable()
                ->constrained('religions')
                ->cascadeOnUpdate()
                ->nullOnDelete();

            $table->foreignId('blood_type_id')
                ->nullable()
                ->constrained('blood_types')
                ->cascadeOnUpdate()
                ->nullOnDelete();

            $table->foreignId('country_id')
                ->nullable()
                ->constrained('countries')
                ->cascadeOnUpdate()
                ->nullOnDelete();

            $table->foreignId('job_id')
                ->nullable()
                ->constrained('jobs')
                ->cascadeOnUpdate()
                ->nullOnDelete();

            $table->foreignId('scholarship_id')
                ->nullable()
                ->constrained('scholarships')
                ->cascadeOnUpdate()
                ->nullOnDelete();

            /*
            |--------------------------------------------------------------------------
            | Academic Current State
            |--------------------------------------------------------------------------
            */

            $table->foreignId('classroom_id')
                ->nullable()
                ->constrained('classrooms')
                ->cascadeOnUpdate()
                ->nullOnDelete();

            $table->foreignId('current_year_id')
                ->nullable()
                ->constrained('academic_years')
                ->cascadeOnUpdate()
                ->nullOnDelete();

            $table->foreignId('current_stage_id')
                ->nullable()
                ->constrained('academic_stages')
                ->cascadeOnUpdate()
                ->nullOnDelete();

            $table->foreignId('current_semester_id')
                ->nullable()
                ->constrained('semesters')
                ->cascadeOnUpdate()
                ->nullOnDelete();

            /*
            |--------------------------------------------------------------------------
            | Identity
            |--------------------------------------------------------------------------
            */

            $table->string('student_number', 50)
                ->unique();

            $table->string(
                'national_student_identification_number',
                50
            )
            ->nullable()
            ->unique();

            $table->string('name');

            $table->string('email')
                ->nullable()
                ->unique();

            /*
            |--------------------------------------------------------------------------
            | Personal
            |--------------------------------------------------------------------------
            */

            $table->string('place_of_birth')
                ->nullable();

            $table->date('date_of_birth')
                ->nullable();

            $table->string('handphone')
                ->nullable();

            $table->text('address')
                ->nullable();

            /*
            |--------------------------------------------------------------------------
            | Education Background
            |--------------------------------------------------------------------------
            */

            $table->string('from_school')
                ->nullable();

            $table->year('graduate_year')
                ->nullable();

            $table->integer('recognized_sks')
                ->default(0);

            $table->timestamps();

            /*
            |--------------------------------------------------------------------------
            | Indexes
            |--------------------------------------------------------------------------
            */

            $table->index('program_id');

            $table->index('advisor_lecturer_id');

            $table->index('status_id');

            $table->index('current_year_id');

            $table->index('current_semester_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};