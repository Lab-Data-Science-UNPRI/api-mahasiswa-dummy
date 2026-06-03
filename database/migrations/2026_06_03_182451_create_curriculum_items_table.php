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

            $table->unsignedBigInteger('curriculum_id')->nullable();
            $table->integer('number_id')->nullable();

            $table->foreignId('semester_id')->nullable()
                ->constrained('semesters')
                ->nullOnDelete();

            $table->string('code')->nullable();
            $table->string('title')->nullable();
            $table->integer('sks')->default(0);

            $table->unsignedBigInteger('subject_id')->nullable();

            $table->integer('closed_id')->default(0);
            $table->float('total_point')->default(0.0);
            $table->integer('evaluation_status_id')->default(0);
            $table->boolean('can_be_evaluate')->default(true);

            $table->unsignedBigInteger('spada_course_id')->nullable();

            $table->timestamps();
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