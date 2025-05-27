<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TodoListController;
use App\Http\Controllers\ListItemController;

Route::resource('todo-lists', TodoListController::class);
Route::resource('todo-lists.items', ListItemController::class);
