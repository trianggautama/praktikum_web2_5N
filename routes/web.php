<?php

use App\Http\Controllers\AutentikasiController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//autentikasi
Route::get('/login',[AutentikasiController::class, 'login'])->name('login');
Route::post('/login',[AutentikasiController::class, 'loginStore'])->name('login.store');
Route::post('/logout',[AutentikasiController::class, 'logout'])->name('logout');
//autentikasi

Route::get('/admin',[UserController::class, 'index'])->name('admin.index');
//mahasiswa
Route::get('/admin/mahasiswa',[MahasiswaController::class, 'index'])->name('mahasiswa.index');
Route::get('/admin/mahasiswa/create',[MahasiswaController::class, 'create'])->name('mahasiswa.create');
Route::post('/admin/mahasiswa/create',[MahasiswaController::class, 'store'])->name('mahasiswa.store');
Route::get('/admin/mahasiswa/edit/{id}',[MahasiswaController::class, 'edit'])->name('mahasiswa.edit');
Route::put('/admin/mahasiswa/edit/{id}',[MahasiswaController::class, 'update'])->name('mahasiswa.update');
Route::delete('/admin/mahasiswa/delete/{id}',[MahasiswaController::class, 'delete'])->name('mahasiswa.delete');
//mahasiswa