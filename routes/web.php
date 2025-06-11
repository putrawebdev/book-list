<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BookController::class, 'index'])->name('book.index');
Route::post('/', [BookController::class, 'store'])->name('book.store');
Route::get('//{id}/edit', [BookController::class, 'edit'])->name('book.edit');
Route::put('//{id}/update', [BookController::class, 'update'])->name('book.update');
Route::delete('//{id}/delete', [BookController::class, 'destroy'])->name('book.delete');

