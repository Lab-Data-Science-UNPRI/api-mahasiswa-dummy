<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StudentResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'nim' => $this->nim,
            'code' => $this->code,
            'name' => $this->name,
            'email' => $this->email,

            'personal' => [
                'place_of_birth' => $this->place_of_birth,
                'date_of_birth' => $this->date_of_birth,
                'sex' => $this->sex,
                'religion' => $this->religion,
                'blood' => $this->blood,
            ],

            'contact' => [
                'handphone' => $this->handphone,
                'phone' => $this->phone,
                'address' => $this->address,
                'village' => $this->village,
                'district' => $this->district,
                'town' => $this->town,
                'province' => $this->province,
                'postal_code' => $this->postal_code,
            ],

            'academic' => [
                'program' => new ProgramResource($this->whenLoaded('program')),
                'lecturer' => new LecturerResource($this->whenLoaded('lecturer')),
                'current_year' => new YearResource($this->whenLoaded('currentYear')),
                'current_stage' => new StageResource($this->whenLoaded('currentStage')),
                'current_semester' => new SemesterResource($this->whenLoaded('currentSemester')),
                'status' => $this->status,
            ],

            'school' => [
                'from_school' => $this->from_school,
                'school_majors' => $this->school_majors,
                'graduate_year' => $this->graduate_year,
            ],

            'parents' => [
                'father_name' => $this->father_name,
                'mother_name' => $this->mother_name,
                'parent_address' => $this->parent_address,
                'parent_handphone' => $this->parent_handphone,
            ],
        ];
    }
}