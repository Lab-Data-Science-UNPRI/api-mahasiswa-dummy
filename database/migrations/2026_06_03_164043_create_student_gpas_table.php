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
        Schema::create('student_gpas', function (Blueprint $table) {

    $table->id();

    $table->foreignId('student_id')
        ->constrained('students')
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

    $table->decimal('semester_gpa', 4, 2)
        ->default(0);

    $table->decimal('cumulative_gpa', 4, 2)
        ->default(0);

    $table->unsignedSmallInteger('total_passed_sks')
        ->default(0);

    $table->timestamps();

    $table->unique([
        'student_id',
        'semester_id',
        'year_id'
    ]);
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_gpas');
    }
};
