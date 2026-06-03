<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $fillable = [
        'code',
        'name',
        'degree',
    ];

    public function students()
    {
        return $this->hasMany(Student::class);
    }

    public function lecturers()
    {
        return $this->hasMany(Lecturer::class);
    }

    public function studyCards()
    {
        return $this->hasMany(StudyCard::class);
    }
}