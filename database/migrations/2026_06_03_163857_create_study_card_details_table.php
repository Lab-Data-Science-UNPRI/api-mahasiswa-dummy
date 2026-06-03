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
        Schema::create('study_card_details', function (Blueprint $table) {

    $table->id();

    $table->foreignId('study_card_id')
        ->constrained('study_cards')
        ->cascadeOnUpdate()
        ->cascadeOnDelete();

    $table->foreignId('subject_id')
        ->constrained('subjects')
        ->cascadeOnUpdate()
        ->restrictOnDelete();

    $table->unsignedTinyInteger('sks');

    $table->timestamps();

    $table->unique([
        'study_card_id',
        'subject_id'
    ]);
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('study_card_details');
    }
};
