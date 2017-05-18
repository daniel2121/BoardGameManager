<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use App\board_game;
use URL;

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
      $order  = Input::get('order');
      $filter = Input::get('filter');
      $min_id = Input::get('min_id');
      $max_id = Input::get('max_id');

      if ($order == '') {
        $order = "id_asc";
      }
      if ($filter == '') {
        $filter = "";
      }
      if ($min_id == '') {
        $min_id = 0;
      }
      if ($max_id == '') {
        $max_id = 9999;
      }

      $board_games = board_game::where('id', '<=', $max_id)
                               ->where('id', '>=', $min_id)
                               ->where('name', 'LIKE', '%'.$filter.'%')
                               ->orderBy(explode("_", $order)[0],explode("_", $order)[1])
                               ->get();

      return view('board-games', ['board_games' => $board_games]);
    }

    public function view_board_game($bgame_id) {
      $board_game = board_game::find($bgame_id);
      // echo $board_game->id . "-" . $board_game->name. "-" . $board_game->designers. "-" . /*$board_game->cover . "<br>";*/

      // '<a href="'.URL::to('/').'/images/'.$board_game->cover.'">'.$board_game->cover.'</a><br>';
      return view('board-game', ['board_game' => $board_game]);
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
