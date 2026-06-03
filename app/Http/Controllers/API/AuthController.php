<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //

    public function loginStudent(Request $request)
    {
        $request->validate([
            'nim' => 'required',
            'password' => 'required',
        ]);

        $student = Student::where('nim', $request->nim)->first();

        if (!$student || !Hash::check($request->password, $student->password)) {
            return response()->json([
                'success' => false,
                'message' => 'NIM atau Password salah',
            ], 401);
        }

        $token = $student->createToken('student_token')->plainTextToken;

        return response()->json([
            'success' => true,
            'message' => 'Login mahasiswa berhasil',
            'token' => $token,
            'token_type' => 'Bearer',
            'role' => 'student',
            'data' => $student,
        ]);
    }

    public function loginLecturer(Request $request)
    {
        $request->validate([
            'nidn' => 'required',
            'password' => 'required',
        ]);

        $lecturer = Lecturer::where('nidn', $request->nidn)->first();

        if (!$lecturer || !Hash::check($request->password, $lecturer->password)) {
            return response()->json([
                'success' => false,
                'message' => 'NIDN atau Password salah',
            ], 401);
        }

        $token = $lecturer->createToken('lecturer_token')->plainTextToken;

        return response()->json([
            'success' => true,
            'message' => 'Login dosen berhasil',
            'token' => $token,
            'token_type' => 'Bearer',
            'role' => 'lecturer',
            'data' => $lecturer,
        ]);
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        return response()->json([
            'success' => true,
            'message' => 'Logout berhasil',
        ]);
    }
}