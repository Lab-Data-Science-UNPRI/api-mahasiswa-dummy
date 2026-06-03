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
        Schema::create('subjects', function (Blueprint $table) {
    $table->id();

    $table->string('code', 20)->unique();
    $table->string('name', 200);

    $table->unsignedTinyInteger('sks');

    $table->unsignedTinyInteger('theory_sks')->default(0);
    $table->unsignedTinyInteger('practice_sks')->default(0);

    $table->boolean('is_active')->default(true);

    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subjects');
    }
};
