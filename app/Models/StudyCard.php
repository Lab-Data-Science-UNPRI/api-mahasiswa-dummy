<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudyCard extends Model
{
    protected $fillable = [
        'student_id',
        'lecturer_id',
        'semester_id',
        'year_id',
        'stage_id',
        'program_id',
        'study_card_code',
        'middle_term_code',
        'final_term_code',
        'student_code',
        'status_id',
        'print_study_card_id',
        'print_middle_card_id',
        'print_final_card_id',
        'calculated_ip_score',
        'closed_id',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function lecturer()
    {
        return $this->belongsTo(Lecturer::class);
    }

    public function semester()
    {
        return $this->belongsTo(Semester::class);
    }

    public function year()
    {
        return $this->belongsTo(Year::class);
    }

    public function stage()
    {
        return $this->belongsTo(Stage::class);
    }

    public function program()
    {
        return $this->belongsTo(Program::class);
    }
}