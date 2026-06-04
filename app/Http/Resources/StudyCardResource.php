<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StudyCardResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'study_card_code' => $this->study_card_code,
            'middle_term_code' => $this->middle_term_code,
            'final_term_code' => $this->final_term_code,
            'student_code' => $this->student_code,

            'student' => new StudentResource($this->whenLoaded('student')),
            'lecturer' => new LecturerResource($this->whenLoaded('lecturer')),
            'program' => new ProgramResource($this->whenLoaded('program')),
            'semester' => new SemesterResource($this->whenLoaded('semester')),
            'year' => new YearResource($this->whenLoaded('year')),
            'stage' => new StageResource($this->whenLoaded('stage')),

            'calculated_ip_score' => $this->calculated_ip_score,
            'status_id' => $this->status_id,
        ];
    }
}