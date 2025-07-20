<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TodoListController;
use App\Http\Controllers\ListItemController;
use App\Http\Controllers\DiaryController;

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/all-cases', function () {
        return view('all-cases');
    })->name('all-cases');

    Route::get('/my-cases', function () {
        return view('my-cases');
    })->name('my-cases');

    Route::get('/general-advice', function () {
        return view('general-advice');
    })->name('general-advice');

    Route::get('/diary', DiaryController::class)->name('diary'); 
});
