<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\board_game;

class BoardGameController extends Controller
{
    //
    public function add_board_game(Request $request) {
      board_game::insert([
        'name' => $request['name'],
        'designers' => $request['designers'],
        'cover' => $request['cover']
      ]);
    }

    public function list_board_games() {
      $board_games = board_game::all();

      return view('board-games', ['board_games' => $board_games]);
    }

    public function view_board_game($bgame_id) {
      $board_game = board_game::find($bgame_id);
      echo $board_game->id . "-" . $board_game->name. "-" . $board_game->designers. "-" . $board_game->cover . "<br>";
    }

    public function search_board_game(Request $request) {
      $order_by = $request['ordered_by'];
      $name_part = $request['name_part'];

      $board_games = board_game::where('name', 'like', '%'.$name_part.'%')
                   ->orderBy($order_by, 'desc')
                   ->get();

      return view('board-games', ['board_games' => $board_games]);
    }
}
