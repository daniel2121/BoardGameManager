<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\board_game;

class BoardGameController extends Controller
{
    //
    public function add_board_game() {
      board_game::insert([
        'name' => $request['name'],
        'designer' => $request['designer'],
        'cover' => $request['cover']
      ]);
    }

    public function list_board_games() {
      $board_games = board_game::all();

      foreach ($board_games as $board_game) {
        echo $board_game->id . "-" . $board_game->name . "<br>";
      }
    }

    public function view_board_game($bgame_id) {
      $board_game = board_game::find($bgame_id);
      echo $board_game->id . "-" . $board_game->name . "<br>";
    }
}
