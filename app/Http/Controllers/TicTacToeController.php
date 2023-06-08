<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TicTacToeController extends Controller
{
    public function index()
    {
        return view('tic-tac-toe');
    }

    public function js()
    {
        echo "string";
        die();
        return view('tic-tac-toe-js');
    }

    public function move(Request $request)
    {
        // Validate the move data
        $request->validate([
            'position' => 'required|integer|min:0|max:8',
        ]);

        // Get the position of the move
        $position = $request->input('position');

        // Perform game logic here
        // Update the game board, check for a win, etc.

        // Return a JSON response with the game status
        return response()->json([
            'message' => 'Move successful',
            'game_status' => 'In progress',
            // Include other necessary data
        ]);
    }
}

