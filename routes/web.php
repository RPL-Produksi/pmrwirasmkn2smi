<?php

use App\Http\Controllers\BlogsController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;



Route::controller(HomeController::class)->group(function() {
    Route::get('/', 'index')->name('home');
});

// Route::controller(BlogsController::class)->group(function() {
//     Route::get('/blogs', 'index')->name('blogs.index');
// });