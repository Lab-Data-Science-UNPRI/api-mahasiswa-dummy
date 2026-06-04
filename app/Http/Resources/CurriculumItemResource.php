<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CurriculumItemResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'code' => $this->code,
            'title' => $this->title,
            'sks' => $this->sks,
            'semester' => new SemesterResource($this->whenLoaded('semester')),
            'total_point' => $this->total_point,
            'can_be_evaluate' => $this->can_be_evaluate,
        ];
    }
}