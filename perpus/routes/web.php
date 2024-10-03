<?php

use App\Http\Controllers\PerpusCon;
use Illuminate\Support\Facades\Route;

// Rute untuk Barang
Route::get('perpus', [PerpusCon::class, 'index'])->name('coba.index');
Route::get('perpus/create', [PerpusCon::class, 'create'])->name('coba.create');
Route::post('perpus/store', [PerpusCon::class, 'store'])->name('coba.store');
Route::get('perpus/{id}/edit', [PerpusCon::class, 'edit'])->name('coba.edit');
Route::put('perpus/{id}', [PerpusCon::class, 'update'])->name('coba.update');
Route::delete('perpus/{id}', [PerpusCon::class, 'destroy'])->name('coba.destroy');

// Rute untuk Registrasi
Route::get('register', [PerpusCon::class, 'showRegistrationForm'])->name('register');
Route::post('register', [PerpusCon::class, 'register'])->name('register.submit');

// Rute untuk Login
Route::get('login', [PerpusCon::class, 'showLoginForm'])->name('login');
Route::post('login', [PerpusCon::class, 'login'])->name('login.submit');

// Rute untuk Logout
Route::post('logout', [PerpusCon::class, 'logout'])->name('logout');