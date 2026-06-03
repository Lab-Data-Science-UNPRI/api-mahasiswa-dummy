<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class NilaiResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'nama_mahasiswa' => $this-> mahasiswa->nama,
            'nilai_angka' => $this->nilai_angka,
            'nilai_huruf' => $this->nilai_huruf,

            'mata_kuliah' => [
                'id' => $this->mataKuliah->id,
                'kode_mk' => $this->mataKuliah->kode_mk,
                'nama_mk' => $this->mataKuliah->nama_mk,
                'sks' => $this->mataKuliah->sks,
                'semester' => $this->mataKuliah->semester,
            ],
        ];
    }
}
