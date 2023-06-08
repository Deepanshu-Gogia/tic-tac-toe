<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TicTacToeController;

Route::get('/', [TicTacToeController::class, 'index']);
Route::get('/js', [TicTacToeController::class, 'js']);
Route::post('/move', [TicTacToeController::class, 'move']);


