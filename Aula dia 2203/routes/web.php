<?php
 
use App\Models\ControllerCategoria;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\Controller;
 
Route::get('/produto', [ProdutoController::class, 'index'])->name('produto.index');
Route::get('/categoria',[ControllerCategoria::class, 'index'])->name('categoria.index');