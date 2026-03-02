<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\HomeController;

// Route /hello
Route::get('/hello', function () {
    return "Hello Laravel!";
});

// Route /about
Route::get('/about', function () {
    // Silakan isi sesuai data diri Anda
    return "Nama: Reinhard Frano Randaling <br> NIM: 245150707111043";
});

// Route /home mengarah ke controller
Route::get('/home', [HomeController::class, 'index']);
