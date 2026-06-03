<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;



class Student extends Authenticatable
{
    use HasApiTokens, Notifiable;

    protected $table = 'students';

    protected $fillable = [
        'code',
        'name',
        'email',
        'nim',
        'password',
        'place_of_birth',
        'date_of_birth',
        'sex',
        'blood',
        'religion',
        'address',
        'village',
        'district',
        'town',
        'province',
        'postal_code',
        'handphone',
        'phone',
        'from_school',
        'school_majors',
        'graduate_year',
        'father_name',
        'father_recent_work',
        'father_resident_card_id',
        'mother_name',
        'mother_recent_work',
        'mother_resident_card_id',
        'parent_address',
        'parent_handphone',
        'parent_phone',
        'guardian_name',
        'resident_card_id',
        'family_card_id',
        'program_id',
        'lecturer_id',
        'current_year_id',
        'current_stage_id',
        'current_semester_id',
        'status',
        'visible_id',
        'finance_id',
        'signup_date',
        'registration_date',
        'registered_date',
        'note',
        'group_link',
        'image_file_name',
        'image_content_type',
        'image_file_size',
        'image_updated_at',
    ];

    protected $hidden = [
        'password',
    ];

    protected $casts = [
        'date_of_birth' => 'date',
        'signup_date' => 'date',
        'registration_date' => 'datetime',
        'registered_date' => 'datetime',
    ];

    public function program()
    {
        return $this->belongsTo(Program::class);
    }

    public function lecturer()
    {
        return $this->belongsTo(Lecturer::class);
    }

    public function currentYear()
    {
        return $this->belongsTo(Year::class, 'current_year_id');
    }

    public function currentStage()
    {
        return $this->belongsTo(Stage::class, 'current_stage_id');
    }

    public function currentSemester()
    {
        return $this->belongsTo(Semester::class, 'current_semester_id');
    }

    public function studyCards()
    {
        return $this->hasMany(StudyCard::class);
    }
}