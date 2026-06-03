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
        Schema::create('curriculum_items', function (Blueprint $table) {

    $table->id();

    $table->foreignId('curriculum_id')
        ->constrained('curriculums')
        ->cascadeOnUpdate()
        ->cascadeOnDelete();

    $table->foreignId('subject_id')
        ->constrained('subjects')
        ->cascadeOnUpdate()
        ->restrictOnDelete();

    $table->foreignId('semester_id')
        ->constrained('semesters')
        ->cascadeOnUpdate()
        ->restrictOnDelete();

    $table->unsignedTinyInteger('sks');

    $table->decimal('total_point', 6, 2)
        ->default(0);

    $table->boolean('can_be_evaluated')
        ->default(true);

    $table->timestamps();

    $table->unique([
        'curriculum_id',
        'subject_id'
    ]);
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('curriculum_items');
    }
};
