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
    Schema::create('curriculums', function (Blueprint $table) {
        $table->id();

        $table->foreignId('program_id')
            ->constrained('programs')
            ->cascadeOnUpdate()
            ->restrictOnDelete();

        $table->string('code', 20)->unique();

        $table->string('name', 150);

        $table->year('year')->nullable();

        $table->boolean('is_active')
            ->default(true);

        $table->timestamps();

        $table->index('program_id');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('curriculums');
    }
};
