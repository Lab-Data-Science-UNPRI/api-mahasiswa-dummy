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
        Schema::create('students', function (Blueprint $table) {
            $table->id();

            $table->string('code')->default('');
            $table->string('name')->default('');
            $table->string('email')->unique()->default('');

            $table->string('nim')->unique();
            $table->string('password');

            $table->string('place_of_birth')->nullable();
            $table->date('date_of_birth')->nullable();

            $table->enum('sex', ['Laki - Laki', 'Perempuan'])->default('Laki - Laki');
            $table->integer('blood')->nullable();
            $table->enum('religion', ['islam', 'kristen'])->date('islam');

            $table->string('address')->nullable();
            $table->string('village')->nullable();
            $table->string('district')->nullable();
            $table->string('town')->nullable();
            $table->string('province')->nullable();
            $table->string('postal_code')->nullable();

            $table->string('handphone')->nullable();
            $table->string('phone')->nullable();

            $table->string('from_school')->nullable();
            $table->string('school_majors')->nullable();
            $table->integer('graduate_year')->nullable();

            $table->string('father_name')->nullable();
            $table->string('father_recent_work')->nullable();
            $table->string('father_resident_card_id')->nullable();

            $table->string('mother_name')->nullable();
            $table->string('mother_recent_work')->nullable();
            $table->string('mother_resident_card_id')->nullable();

            $table->string('parent_address')->nullable();
            $table->string('parent_handphone')->nullable();
            $table->string('parent_phone')->nullable();

            $table->string('guardian_name')->nullable();
            $table->string('resident_card_id')->nullable();
            $table->string('family_card_id')->nullable();

            $table->foreignId('program_id')->nullable()
                ->constrained('programs')
                ->nullOnDelete();

            $table->foreignId('lecturer_id')->nullable()
                ->constrained('lecturers')
                ->nullOnDelete();

            $table->foreignId('current_year_id')->nullable()
                ->constrained('years')
                ->nullOnDelete();

            $table->foreignId('current_stage_id')->nullable()
                ->constrained('stages')
                ->nullOnDelete();

            $table->foreignId('current_semester_id')->nullable()
                ->constrained('semesters')
                ->nullOnDelete();

            $table->enum('status', ['aktif', 'nonaktif'])->default('aktif');
            $table->integer('visible_id')->default(1);
            $table->integer('finance_id')->default(1);

            $table->date('signup_date')->nullable();
            $table->dateTime('registration_date')->nullable();
            $table->dateTime('registered_date')->nullable();

            $table->text('note')->nullable();
            $table->text('group_link')->nullable();

            $table->string('image_file_name')->nullable();
            $table->string('image_content_type')->nullable();
            $table->integer('image_file_size')->nullable();
            $table->dateTime('image_updated_at')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};