<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stage extends Model
{
    protected $fillable = [
        'name',
    ];

    public function students()
    {
        return $this->hasMany(Student::class, 'current_stage_id');
    }

    public function studyCards()
    {
        return $this->hasMany(StudyCard::class);
    }
}