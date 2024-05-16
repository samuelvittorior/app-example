<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
Route::post('/mahasiswa', [MahasiswaController::class, 'store']);
Route::get('/mahasiswa/{nim}', [MahasiswaController::class, 'show']);
Route::put('/mahasiswa/{nim}', [MahasiswaController::class, 'update']);
Route::delete('/mahasiswa/{nim}', [MahasiswaController::class, 'destroy']);
