<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RespostaController;

Route::get('/thomas', function () {
    return view('licaothomas');
});

Route::get('/', function () {
    return view('home');
});

Route::post('/resposta', [RespostaController::class, 'receba'])->name('devolva');