<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\QuestionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MultipleuploadsController;

Route::get('/', function () {
    return view('welcome');
});

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

// Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::resource('pelanggan', PelangganController::class);
Route::resource('user', UserController::class);

Route::get('/auth', function () {
    return view('home');

});
// Route::get('/auth', [AuthController::class, 'index']);
// Route::post('/auth/login', [AuthController::class, 'login']);

Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
Route::delete('/profile/delete', [ProfileController::class, 'destroy'])->name('profile.destroy');

Route::get('/multipleuploads', [MultipleuploadsController::class, 'index'])->name('uploads');
Route::post('/save', [MultipleuploadsController::class, 'store'])->name('uploads.store');

//halaman guest
Route::middleware('guest')->group(function () {

    // Halaman Form Login
    Route::get('/auth', [AuthController::class, 'index'])->name('login');

    // Proses Submit Login
    Route::post('/auth/login', [AuthController::class, 'login'])->name('login.process');

    // Halaman Depan
    Route::get('/', function () {
        return view('welcome');
    });
});

//halaman wajib login
Route::middleware('auth')->group(function () {

    // Logout (Bisa diaksees semua user yang login)
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    // --- DASHBOARD UNTUK USER BIASA ---
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Fitur User Biasa (Contoh: Kirim Pertanyaan)
    Route::post('question/store', [QuestionController::class, 'store'])->name('question.store');
    Route::get('/home', [HomeController::class, 'index']);

    // Khusus admin
    Route::middleware(['role:admin'])->prefix('admin')->group(function () {
        Route::resource('user', UserController::class);
        Route::resource('pelanggan', PelangganController::class);
    });
});
