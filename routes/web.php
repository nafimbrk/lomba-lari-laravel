<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\JarakController;

Route::view('/', 'home');

Route::get('peserta', [PesertaController::class, 'index']);
Route::get('peserta/tambah', [PesertaController::class, 'create']);
Route::post('peserta/tambah', [PesertaController::class, 'store']);
Route::get('peserta/update/{id}', [PesertaController::class, 'edit']);
Route::post('peserta/update/{id}', [PesertaController::class, 'update']);
Route::get('peserta/hapus/{id}', [PesertaController::class, 'hapus']);
Route::post('peserta/hapus/{id}', [PesertaController::class, 'destroy']);

Route::get('jarak', [JarakController::class, 'index']);
Route::get('jarak/tambah', [JarakController::class, 'create']);
Route::post('jarak/tambah', [JarakController::class, 'store']);
Route::get('jarak/update/{id}', [JarakController::class, 'edit']);
Route::post('jarak/update/{id}', [JarakController::class, 'update']);
Route::get('jarak/hapus/{id}', [JarakController::class, 'hapus']);
Route::post('jarak/hapus/{id}', [JarakController::class, 'destroy']);



Route::get('/pendaftaran', [PendaftaranController::class, 'index'])->name('pendaftaran.index');
Route::get('/pendaftaran/create', [PendaftaranController::class, 'create'])->name('pendaftaran.create');
Route::post('/pendaftaran/store', [PendaftaranController::class, 'store'])->name('pendaftaran.store');
Route::get('/pendaftaran/{id}/edit', [PendaftaranController::class, 'edit'])->name('pendaftaran.edit');
Route::put('/pendaftaran/{id}', [PendaftaranController::class, 'update'])->name('pendaftaran.update');
Route::delete('/pendaftaran/{id}', [PendaftaranController::class, 'destroy'])->name('pendaftaran.destroy');
