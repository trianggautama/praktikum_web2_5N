<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});


Route::get('/admin',[UserController::class, 'index']);

//mahasiswa
Route::get('/admin/mahasiswa',[MahasiswaController::class, 'index']);
Route::get('/admin/mahasiswa/create',[MahasiswaController::class, 'create']);
Route::post('/admin/mahasiswa/create',[MahasiswaController::class, 'store']);
Route::get('/admin/mahasiswa/edit/{id}',[MahasiswaController::class, 'edit']);
Route::put('/admin/mahasiswa/edit/{id}',[MahasiswaController::class, 'update']);
Route::delete('/admin/mahasiswa/delete/{id}',[MahasiswaController::class, 'delete']);
//mahasiswa