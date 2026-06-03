<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Semester extends Model
{
    protected $fillable = [
        'name',
        'number',
    ];

    public function students()
    {
        return $this->hasMany(Student::class, 'current_semester_id');
    }

    public function studyCards()
    {
        return $this->hasMany(StudyCard::class);
    }

    public function curriculumItems()
    {
        return $this->hasMany(CurriculumItem::class);
    }
}