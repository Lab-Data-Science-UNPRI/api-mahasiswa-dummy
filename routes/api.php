<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\ProfileController;
use App\Http\Controllers\API\AcademicController;
use App\Http\Controllers\API\StudentController;
use App\Http\Controllers\API\LecturerController;
use App\Http\Controllers\API\StudyCardController;
use App\Http\Controllers\API\CurriculumItemController;

Route::post('/student/login', [AuthController::class, 'loginStudent']);
Route::post('/lecturer/login', [AuthController::class, 'loginLecturer']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);

    Route::get('/profile', [ProfileController::class, 'me']);

    Route::get('/my-study-cards', [AcademicController::class, 'myStudyCards']);
    Route::get('/my-curriculum-items', [AcademicController::class, 'myCurriculumItems']);
    Route::get('/academic-summary', [AcademicController::class, 'summary']);

    Route::get('/students', [StudentController::class, 'index']);
    Route::get('/students/{student}', [StudentController::class, 'show']);

    Route::get('/lecturers', [LecturerController::class, 'index']);
    Route::get('/lecturers/{lecturer}', [LecturerController::class, 'show']);

    Route::get('/study-cards', [StudyCardController::class, 'index']);
    Route::get('/curriculum-items', [CurriculumItemController::class, 'index']);
});