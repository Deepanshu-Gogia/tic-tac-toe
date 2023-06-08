<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TicTacToeController;

Route::get('/', [TicTacToeController::class, 'index']);
Route::post('/move', [TicTacToeController::class, 'move']);

Route::get('/new-game', function () {
    return view('tic-tac-toe-js');
});