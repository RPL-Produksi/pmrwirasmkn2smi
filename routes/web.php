<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\PurnawiraController;
use App\Http\Controllers\VisiMisiController;
use Illuminate\Support\Facades\Route;



Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home');
});

Route::controller(PurnawiraController::class)->group(function () {
    Route::get('/purnawira', 'index')->name('purnawira.index');
    Route::get('/purnawira/{tahun}/data', 'show')->name('purnawira.show');
});

Route::controller(ProfilController::class)->group(function () {
    Route::get('/profil', 'index')->name('profil.index');
});

Route::controller(VisiMisiController::class)->group(function () {
    Route::get('/visi-misi', 'index')->name('visi-misi.index');
});

Route::controller(InformasiController::class)->group(function () {
    Route::get('/informasi', 'index')->name('informasi.index');
});
