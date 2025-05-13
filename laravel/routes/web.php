<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');

use App\Http\Controllers\ZoomController;

Route::get('/zoom-instructions', [ZoomController::class, 'index'])
    ->name('zoom.instructions');

Route::view('/zoom-phone', 'zoom-phone')->name('zoom.phone');
