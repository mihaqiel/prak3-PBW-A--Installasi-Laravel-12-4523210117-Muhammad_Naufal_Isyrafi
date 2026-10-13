<?php

use Illuminate\Support\Facades\Route;

// Halaman Utama
Route::get('/', function () {
    return view('welcome');
});

// Halaman Tentang Kami
Route::get('/tentang-kami', function () {
    return view('about');
});

// Halaman Kontak (Tugas Mandiri)
Route::get('/kontak', function () {
    return view('contact');
});
