<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('lecturers', function (Blueprint $table) {
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

            /*
            |--------------------------------------------------------------------------
            | Master References
            |--------------------------------------------------------------------------
            */

            $table->foreignId('rank_id')
                ->nullable()
                ->constrained('lecturer_ranks')
                ->cascadeOnUpdate()
                ->nullOnDelete();

            $table->foreignId('grade_id')
                ->nullable()
                ->constrained('lecturer_grades')
                ->cascadeOnUpdate()
                ->nullOnDelete();

            $table->foreignId('type_id')
                ->nullable()
                ->constrained('lecturer_types')
                ->cascadeOnUpdate()
                ->nullOnDelete();

            $table->foreignId('religion_id')
                ->nullable()
                ->constrained('religions')
                ->cascadeOnUpdate()
                ->nullOnDelete();

            $table->foreignId('sex_id')
                ->nullable()
                ->constrained('sexes')
                ->cascadeOnUpdate()
                ->nullOnDelete();

            $table->foreignId('status_id')
                ->nullable()
                ->constrained('lecturer_statuses')
                ->cascadeOnUpdate()
                ->nullOnDelete();

            $table->foreignId('bond_id')
                ->nullable()
                ->constrained('employment_bonds')
                ->cascadeOnUpdate()
                ->nullOnDelete();

            $table->foreignId('certification_id')
                ->nullable()
                ->constrained('certifications')
                ->cascadeOnUpdate()
                ->nullOnDelete();

            /*
            |--------------------------------------------------------------------------
            | Identity
            |--------------------------------------------------------------------------
            */

            $table->string('lecturer_number', 50)->unique();

            $table->string('name');

            $table->string('front_title')->nullable();

            $table->string('rear_title')->nullable();

            $table->string('email')->nullable()->unique();

            /*
            |--------------------------------------------------------------------------
            | Personal
            |--------------------------------------------------------------------------
            */

            $table->string('place_of_birth')->nullable();

            $table->date('date_of_birth')->nullable();

            $table->string('handphone')->nullable();

            /*
            |--------------------------------------------------------------------------
            | Research Profile
            |--------------------------------------------------------------------------
            */

            $table->string('orcid_id')->nullable();

            $table->string('scopus_id')->nullable();

            $table->string('google_scholar_id')->nullable();

            /*
            |--------------------------------------------------------------------------
            | Career
            |--------------------------------------------------------------------------
            */

            $table->date('starting_date_at')->nullable();

            $table->decimal('credit_score', 8, 2)
                ->default(0);

            $table->timestamps();

            /*
            |--------------------------------------------------------------------------
            | Indexes
            |--------------------------------------------------------------------------
            */

            $table->index('program_id');

            $table->index('status_id');

            $table->index('rank_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('lecturers');
    }
};