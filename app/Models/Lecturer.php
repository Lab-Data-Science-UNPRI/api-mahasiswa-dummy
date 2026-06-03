<?php

namespace App\Models;



use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Lecturer extends Authenticatable
{
    use HasApiTokens, Notifiable;

    protected $table = 'lecturers';

    protected $fillable = [
        'code',
        'nidn',
        'name',
        'password',
        'short_name',
        'place_of_birth',
        'date_of_birth',
        'address',
        'handphone',
        'phone',
        'email',
        'front_title',
        'rear_title',
        'first_degree_title',
        'first_degree_major',
        'first_degree_university',
        'second_degree_title',
        'second_degree_major',
        'second_degree_university',
        'religion',
        'sex',
        'status',
        'visible_id',
        'program_id',
    ];

    protected $hidden = [
        'password',
    ];

    protected $casts = [
        'date_of_birth' => 'date',
    ];

    public function program()
    {
        return $this->belongsTo(Program::class);
    }

    public function students()
    {
        return $this->hasMany(Student::class);
    }

    public function studyCards()
    {
        return $this->hasMany(StudyCard::class);
    }
}
