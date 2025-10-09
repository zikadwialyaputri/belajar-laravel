<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\QuestionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/pcr', function () {
    return 'Selamat Datang di Website Kampus PCR';
});
Route::get('/mahasiswa', function () {
    return 'Halloooo Mahasiswaaaa';
});
Route::get('/nama/{param1}', function ($param1) {
    return 'Nama Saya : ' . $param1;
});
Route::get('/nim/{param1?}', function ($param1 = '') {
    return 'Nim Saya : ' . $param1;
});
Route::get('mahasiswa/{param1}', [MahasiswaController::class, 'show']);
Route::get('/about', function () {
    return view('halaman-about');
});
Route::get('/mkindex', [MatakuliahController::class, 'index']);
Route::get('/mkcreate', [MatakuliahController::class, 'create']);
Route::get('/mkstore', [MatakuliahController::class, 'store']);
Route::get('/mkshow', [MatakuliahController::class, 'show']);
Route::get('/mkedit', [MatakuliahController::class, 'edit']);
Route::get('/mkupdate', [MatakuliahController::class, 'update']);
Route::get('/mkdestroy', [MatakuliahController::class, 'destroy']);

Route::get('/matakuliah/show/{id?}', [MatakuliahController::class, 'show']);
Route::get('/home', [HomeController::class, 'index']);

Route::get('/question', function () {
    return view('home');
    })->name('question.form');

Route::post('/question/store', [QuestionController::class, 'store'])->name('question.store');

Route::get('/auth', [AuthController::class, 'index'])->name('auth.index');
Route::post('/auth/login', [AuthController::class, 'login'])->name('auth.login');
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard')->middleware('web');
