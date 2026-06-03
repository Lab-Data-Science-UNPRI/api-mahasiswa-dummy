<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

Route::post('/student/login', [AuthController::class, 'loginStudent']);
Route::post('/lecturer/login', [AuthController::class, 'loginLecturer']);




Route::middleware('auth:sanctum')->group(function () {

    Route::post('/logout', [AuthController::class, 'logout']);

    // Route::get('/profile', [ProfileController::class, 'index']);

    // Route::get('/krs', [KrsController::class, 'index']);

    // Route::get('/nilai', [NilaiController::class, 'index']);
});