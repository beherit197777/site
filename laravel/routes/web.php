<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TraditionController;
use App\Http\Controllers\ZoomController;
use App\Http\Controllers\TelegramController;
use App\Http\Controllers\BeginnerController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\BookController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// 1. Главная
Route::get('/', [HomeController::class, 'index'])->name('home');

// 2. 7 Традиция — страница с информацией о пожертвованиях
Route::get('/tradition-7', [TraditionController::class, 'index'])
    ->name('tradition');

// 3a. Подключиться в Zoom — прямой редирект
Route::get('/zoom/join', [ZoomController::class, 'join'])
    ->name('zoom.join');

// 3b. Инструкция Zoom
Route::get('/zoom/instructions', [ZoomController::class, 'instructions'])
    ->name('zoom.instructions');

// 3c. Альтернативный маршрут — телефонная инструкция (если нужна)
Route::view('/zoom-phone', 'zoom-phone')->name('zoom.phone');

// 4a. Подключиться в Telegram — редирект
Route::get('/telegram/join', [TelegramController::class, 'join'])
    ->name('telegram.join');

// 4b. Инструкция Telegram
Route::get('/telegram/instructions', [TelegramController::class, 'instructions'])
    ->name('telegram.instructions');

// 5. Новичку — общий список и разделы 1–7
Route::get('/beginner', [BeginnerController::class, 'index'])
    ->name('beginner.index');
Route::get('/beginner/{section}', [BeginnerController::class, 'show'])
    ->where('section', '[1-7]')
    ->name('beginner.section');

// 6. История Землян
Route::get('/history', [HistoryController::class, 'index'])
    ->name('history');

// 7. Книга «Анонимные Алкоголики»
Route::get('/book', [BookController::class, 'index'])
    ->name('book');
