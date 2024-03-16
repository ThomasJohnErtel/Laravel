<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\CategoriaController;

Route::get('/categoria', [CategoriaController::class, 'index'])->name('categoria.index');
Route::get('/categoria/edit/{categoria}', [CategoriaController::class, 'edit'])->name('categoria.edit');
Route::post('/categoria/edit/{categoria}', [categoriaController::class, 'update'])->name('categoria.update');
Route::get('/categoria/create', [CategoriaController::class, 'create'])->name('categoria.create');
Route::post('/categoria/create', [CategoriaController::class, 'insert'])->name('categoria.insert');