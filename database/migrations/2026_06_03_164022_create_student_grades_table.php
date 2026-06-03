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
        Schema::create('student_grades', function (Blueprint $table) {

    $table->id();

    $table->foreignId('student_id')
        ->constrained('students')
        ->cascadeOnUpdate()
        ->restrictOnDelete();

    $table->foreignId('subject_id')
        ->constrained('subjects')
        ->cascadeOnUpdate()
        ->restrictOnDelete();

    $table->foreignId('study_card_id')
        ->nullable()
        ->constrained('study_cards')
        ->cascadeOnUpdate()
        ->nullOnDelete();

    /*
    |--------------------------------------------------------------------------
    | Grade
    |--------------------------------------------------------------------------
    */

    $table->decimal('numeric_grade', 5, 2)
        ->nullable();

    $table->string('letter_grade', 2)
        ->nullable();

    $table->decimal('grade_point', 3, 2)
        ->default(0);

    /*
    |--------------------------------------------------------------------------
    | Academic Result
    |--------------------------------------------------------------------------
    */

    $table->unsignedTinyInteger('sks')
        ->default(0);

    $table->boolean('is_passed')
        ->default(false);

    /*
    |--------------------------------------------------------------------------
    | Metadata
    |--------------------------------------------------------------------------
    */

    $table->timestamps();

    /*
    |--------------------------------------------------------------------------
    | Indexes
    |--------------------------------------------------------------------------
    */

    $table->index('student_id');

    $table->index('subject_id');

    $table->index('letter_grade');

    $table->unique([
        'student_id',
        'subject_id',
        'study_card_id'
    ]);
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_grades');
    }
};
