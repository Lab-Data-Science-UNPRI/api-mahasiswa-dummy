<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CurriculumItem extends Model
{
    protected $fillable = [
        'curriculum_id',
        'number_id',
        'semester_id',
        'code',
        'title',
        'sks',
        'subject_id',
        'closed_id',
        'total_point',
        'evaluation_status_id',
        'can_be_evaluate',
        'spada_course_id',
    ];

    protected $casts = [
        'can_be_evaluate' => 'boolean',
    ];

    public function semester()
    {
        return $this->belongsTo(Semester::class);
    }
}