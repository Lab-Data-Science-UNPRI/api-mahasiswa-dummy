<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('study_cards', function (Blueprint $table) {
            $table->id();

            $table->foreignId('student_id')->nullable()
                ->constrained('students')
                ->nullOnDelete();

            $table->foreignId('lecturer_id')->nullable()
                ->constrained('lecturers')
                ->nullOnDelete();

            $table->foreignId('semester_id')->nullable()
                ->constrained('semesters')
                ->nullOnDelete();

            $table->foreignId('year_id')->nullable()
                ->constrained('years')
                ->nullOnDelete();

            $table->foreignId('stage_id')->nullable()
                ->constrained('stages')
                ->nullOnDelete();

            $table->foreignId('program_id')->nullable()
                ->constrained('programs')
                ->nullOnDelete();

            $table->string('study_card_code')->nullable();
            $table->string('middle_term_code')->nullable();
            $table->string('final_term_code')->nullable();
            $table->string('student_code')->nullable();

            $table->integer('status_id')->default(0);
            $table->integer('print_study_card_id')->default(0);
            $table->integer('print_middle_card_id')->default(0);
            $table->integer('print_final_card_id')->default(0);

            $table->decimal('calculated_ip_score', 14, 2)->default(0.0);
            $table->integer('closed_id')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('study_cards');
    }
};