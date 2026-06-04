<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\StudyCardResource;
use App\Models\StudyCard;
use App\Models\Lecturer;
use Illuminate\Http\Request;

class StudyCardController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->user();

        if (!$user instanceof Lecturer) {
            return response()->json([
                'success' => false,
                'message' => 'Hanya dosen yang dapat melihat semua KRS',
            ], 403);
        }

        $studyCards = StudyCard::with(['student', 'lecturer', 'program', 'semester', 'year', 'stage'])
            ->where('lecturer_id', $user->id)
            ->get();

        return response()->json([
            'success' => true,
            'message' => 'Data KRS berhasil diambil',
            'data' => StudyCardResource::collection($studyCards),
        ]);
    }
}