<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    //
    protected $fillable = [
        'nidn',
        'nama',
        'email'
    ];

    public function mataKuliah()
    {
        return $this->hasMany(MataKuliah::class);
    }
}
