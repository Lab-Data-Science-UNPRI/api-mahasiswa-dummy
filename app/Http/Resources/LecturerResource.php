<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LecturerResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'nidn' => $this->nidn,
            'code' => $this->code,
            'name' => trim(($this->front_title ? $this->front_title . ' ' : '') . $this->name . ($this->rear_title ? ', ' . $this->rear_title : '')),
            'short_name' => $this->short_name,
            'email' => $this->email,
            'handphone' => $this->handphone,
            'program' => new ProgramResource($this->whenLoaded('program')),
            'status' => $this->status,
        ];
    }
}