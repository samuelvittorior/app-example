<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\EnsureTokenIsValid;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return ('Halaman Tentang Kami');
})->middleware(EnsureTokenIsValid::class);

Route::get('/contact', function () {
    return ('Halaman Kontak Kami');
});