<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Mahasiswa extends Model
{
    //
    use HasFactory, HasApiTokens;

    protected $fillable = [
        'nim',
        'nama',
        'email',
        'password',
        'prodi',
        'fakultas',
        'angkatan',
        'semester'
    ];

    protected $hidden = [
        'password'
    ];

    public function krs()
    {
        return $this->hasMany(Krs::class);
    }

    public function nilai()
    {
        return $this->hasMany(Nilai::class);
    }
}
