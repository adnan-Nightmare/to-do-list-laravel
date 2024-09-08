<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Halo\HaloController;
use App\Http\Controllers\Todo\TodoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/halo', [HaloController::class, 'index']);

Route::prefix('/todo')->controller(TodoController::class)->group(function () {
    Route::get('/', 'index')->name('todo');
    Route::post('/', 'store')->name('todo.post');
    Route::put('/{id}', 'update')->name('todo.update');
    Route::delete('/{id}', 'destroy')->name('todo.delete');
});

// Route::get('/todo', [TodoController::class, 'index'])->name('todo');
// Route::post('/todo', [TodoController::class, 'store'])->name('todo.post');
// Route::put('/todo/{id}', [TodoController::class, 'update'])->name('todo.update');
// Route::delete('/todo/{id}', [TodoController::class, 'destroy'])->name('todo.delete');
