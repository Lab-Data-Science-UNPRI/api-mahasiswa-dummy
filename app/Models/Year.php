<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Year extends Model
{
    protected $fillable = [
        'name',
        'year',
    ];

    public function students()
    {
        return $this->hasMany(Student::class, 'current_year_id');
    }

    public function studyCards()
    {
        return $this->hasMany(StudyCard::class);
    }
}