<?php

use App\Http\Controllers\Admin\AuthController;
use Illuminate\Support\Facades\Route;

// Admin
use App\Http\Controllers\Admin\PesanController;
use App\Http\Controllers\Admin\RekomendasiController;
use App\Http\Controllers\Admin\SeleksiController;
use App\Http\Controllers\Admin\KontakController;
use App\Http\Controllers\Admin\KurikulumController;
use App\Http\Controllers\Admin\PengaturanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('user.beranda');
});
Route::get('/hubungi', function () {
    return view('user.hubungi');
});
Route::get('/beasiswa', function () {
    return view('user.beasiswa');
});
Route::get('/pendaftaran', function () {
    return view('user.pendaftaran');
});
Route::get('/prodi', function () {
    return view('user.prodi');
});

// Auth
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/postLogin', [AuthController::class, 'postLogin'])->name('auth.post.login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/login', function(){
    return view('auth.login');
})->name('login');

// Admin
Route::prefix('admin')->group(function (){
    Route::get('/dashboard', function(){
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::resource('pesan', PesanController::class);
    Route::resource('rekomendasi', RekomendasiController::class);
    Route::resource('kurikulum', KurikulumController::class);
    Route::resource('seleksi', SeleksiController::class);
    Route::resource('kontak', KontakController::class);

    // pengaturan
    Route::get('/pengaturan', [PengaturanController::class, 'index']);
});