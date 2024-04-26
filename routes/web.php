<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return ('Halaman Tentang Kami');
});
Route::get('/contact', function () {
    return view('Halaman Kontak Kami');
});