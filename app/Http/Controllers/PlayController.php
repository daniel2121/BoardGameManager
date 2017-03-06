<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\play;

class PlayController extends Controller
{
    public function create_play() {
      play::insert([
        'user_id' => $request['user_id'],
        'bgame_id' => $request['bgame_id'],
        'date' => $request['date']
      ]);
    }

    public function view_plays($user_id) {
      $plays = play::where('user_id', $user_id)->get();

      foreach ($plays as $play) {
        echo $play->user_id . "-" . $play->bgame_id . "<br>";
      }
    }
}
