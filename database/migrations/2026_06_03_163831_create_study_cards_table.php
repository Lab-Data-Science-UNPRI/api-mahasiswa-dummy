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

    $table->foreignId('student_id')
        ->constrained('students')
        ->cascadeOnUpdate()
        ->restrictOnDelete();

    $table->foreignId('lecturer_id')
        ->nullable()
        ->constrained('lecturers')
        ->cascadeOnUpdate()
        ->nullOnDelete();

    $table->foreignId('program_id')
        ->constrained('programs')
        ->cascadeOnUpdate()
        ->restrictOnDelete();

    $table->foreignId('semester_id')
        ->constrained('semesters')
        ->cascadeOnUpdate()
        ->restrictOnDelete();

    $table->foreignId('year_id')
        ->constrained('academic_years')
        ->cascadeOnUpdate()
        ->restrictOnDelete();

    $table->foreignId('stage_id')
        ->nullable()
        ->constrained('academic_stages')
        ->cascadeOnUpdate()
        ->nullOnDelete();

    $table->string('study_card_code')
        ->unique();

    $table->decimal('calculated_ip_score', 5, 2)
        ->default(0);

    $table->timestamps();

    $table->index('student_id');
    $table->index('semester_id');
    $table->index('year_id');
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
