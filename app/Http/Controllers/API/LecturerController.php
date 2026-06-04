<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\LecturerResource;
use App\Models\Lecturer;

class LecturerController extends Controller
{
    public function index()
    {
        $lecturers = Lecturer::with('program')->get();

        return response()->json([
            'success' => true,
            'message' => 'Data dosen berhasil diambil',
            'data' => LecturerResource::collection($lecturers),
        ]);
    }

    public function show(Lecturer $lecturer)
    {
        $lecturer->load('program');

        return response()->json([
            'success' => true,
            'message' => 'Detail dosen berhasil diambil',
            'data' => new LecturerResource($lecturer),
        ]);
    }
}