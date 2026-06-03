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
        Schema::create('lecturers', function (Blueprint $table) {
            $table->id();

            $table->string('code')->default('');
            $table->string('name')->default('');
            $table->string('short_name')->nullable();

            $table->string('place_of_birth')->nullable();
            $table->date('date_of_birth')->nullable();

            $table->string('address')->nullable();
            $table->string('handphone')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();

            $table->string('front_title')->nullable();
            $table->string('rear_title')->nullable();

            $table->string('first_degree_title')->nullable();
            $table->string('first_degree_major')->nullable();
            $table->string('first_degree_university')->nullable();

            $table->string('second_degree_title')->nullable();
            $table->string('second_degree_major')->nullable();
            $table->string('second_degree_university')->nullable();

            $table->enum('religion', ['islam', 'kristen'])->default('islam');
            $table->enum('sex', ['Laki - Laki', 'Perempuan'])->default('Laki - Laki');
            $table->enum('status', ['aktif', 'nonaktif'])->default('aktif');
            $table->integer('visible_id')->default(1);
            $table->foreignId('program_id')->nullable()
                ->constrained('programs')
                ->nullOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lecturers');
    }
};