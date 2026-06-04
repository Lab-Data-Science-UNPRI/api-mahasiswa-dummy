<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\StudentResource;
use App\Http\Resources\LecturerResource;
use App\Models\Student;
use App\Models\Lecturer;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function me(Request $request)
    {
        $user = $request->user();

        if ($user instanceof Student) {
            $user->load(['program', 'lecturer', 'currentYear', 'currentStage', 'currentSemester']);

            return response()->json([
                'success' => true,
                'role' => 'student',
                'message' => 'Profile mahasiswa berhasil diambil',
                'data' => new StudentResource($user),
            ]);
        }

        if ($user instanceof Lecturer) {
            $user->load('program');

            return response()->json([
                'success' => true,
                'role' => 'lecturer',
                'message' => 'Profile dosen berhasil diambil',
                'data' => new LecturerResource($user),
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => 'User tidak dikenali',
        ], 401);
    }
}