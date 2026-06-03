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
    Schema::create('programs', function (Blueprint $table) {
        $table->id();

        $table->foreignId('faculty_id')
            ->constrained('faculties')
            ->cascadeOnUpdate()
            ->restrictOnDelete();

        $table->string('code', 20)->unique();

        $table->string('name', 150);

        $table->string('degree', 20)->nullable();

        $table->timestamps();

        $table->index('faculty_id');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programs');
    }
};
