<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\StudyCardResource;
use App\Http\Resources\CurriculumItemResource;
use App\Http\Resources\StudentResource;
use App\Models\Student;
use App\Models\CurriculumItem;
use Illuminate\Http\Request;

class AcademicController extends Controller
{
    public function myStudyCards(Request $request)
    {
        $user = $request->user();

        if (!$user instanceof Student) {
            return response()->json([
                'success' => false,
                'message' => 'Endpoint ini hanya untuk mahasiswa',
            ], 403);
        }

        $studyCards = $user->studyCards()
            ->with(['lecturer', 'program', 'semester', 'year', 'stage'])
            ->get();

        return response()->json([
            'success' => true,
            'message' => 'Data KRS mahasiswa berhasil diambil',
            'data' => StudyCardResource::collection($studyCards),
        ]);
    }

    public function myCurriculumItems(Request $request)
    {
        $user = $request->user();

        if (!$user instanceof Student) {
            return response()->json([
                'success' => false,
                'message' => 'Endpoint ini hanya untuk mahasiswa',
            ], 403);
        }

        $items = CurriculumItem::with('semester')
            ->where('semester_id', $user->current_semester_id)
            ->get();

        return response()->json([
            'success' => true,
            'message' => 'Data mata kuliah semester berjalan berhasil diambil',
            'data' => CurriculumItemResource::collection($items),
        ]);
    }

    public function summary(Request $request)
    {
        $user = $request->user();

        if (!$user instanceof Student) {
            return response()->json([
                'success' => false,
                'message' => 'Endpoint ini hanya untuk mahasiswa',
            ], 403);
        }

        $user->load([
            'program',
            'lecturer',
            'currentYear',
            'currentStage',
            'currentSemester',
            'studyCards.lecturer',
            'studyCards.program',
            'studyCards.semester',
            'studyCards.year',
            'studyCards.stage',
        ]);

        $items = CurriculumItem::with('semester')
            ->where('semester_id', $user->current_semester_id)
            ->get();

        return response()->json([
            'success' => true,
            'message' => 'Ringkasan akademik mahasiswa berhasil diambil',
            'data' => [
                'profile' => new StudentResource($user),
                'study_cards' => StudyCardResource::collection($user->studyCards),
                'curriculum_items' => CurriculumItemResource::collection($items),
            ],
        ]);
    }
}