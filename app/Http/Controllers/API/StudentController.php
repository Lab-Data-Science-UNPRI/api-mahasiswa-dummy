<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\StudentResource;
use App\Models\Student;
use App\Models\Lecturer;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->user();

        if (!$user instanceof Lecturer) {
            return response()->json([
                'success' => false,
                'message' => 'Hanya dosen yang dapat melihat daftar mahasiswa',
            ], 403);
        }

        $students = Student::with(['program', 'lecturer', 'currentYear', 'currentStage', 'currentSemester'])
            ->where('lecturer_id', $user->id)
            ->get();

        return response()->json([
            'success' => true,
            'message' => 'Data mahasiswa berhasil diambil',
            'data' => StudentResource::collection($students),
        ]);
    }

    public function show(Request $request, Student $student)
    {
        $user = $request->user();

        if ($user instanceof Student && $user->id !== $student->id) {
            return response()->json([
                'success' => false,
                'message' => 'Mahasiswa hanya dapat melihat datanya sendiri',
            ], 403);
        }

        if ($user instanceof Lecturer && $student->lecturer_id !== $user->id) {
            return response()->json([
                'success' => false,
                'message' => 'Dosen hanya dapat melihat mahasiswa bimbingannya',
            ], 403);
        }

        $student->load(['program', 'lecturer', 'currentYear', 'currentStage', 'currentSemester']);

        return response()->json([
            'success' => true,
            'message' => 'Detail mahasiswa berhasil diambil',
            'data' => new StudentResource($student),
        ]);
    }
}