<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use App\play;
use Redirect;

class PlayController extends Controller
{
    public function create_play(Request $request) {
      play::insert([
        'user_id' => $request['user_id'],
        'bgame_id' => $request['bgame_id'],
        // 'date' => date('Y-m-d')
        'date' => $request['date']
      ]);

      return Redirect::back()->withSuccess('Message sent!');
    }

    public function view_plays($user_id) {
      $order  = Input::get('order');
      $bgame_max = Input::get('bgame_max');
      $bgame_min = Input::get('bgame_min');
      $min_date = Input::get('min_date');
      $max_date = Input::get('max_date');

      if ($order == '') {
        $order = "bgame_id-asc";
      }
      if ($bgame_max == '') {
        $bgame_max = 9999;
      }
      if ($bgame_min == '') {
        $bgame_min = 0;
      }
      if ($min_date == '') {
        $min_date = '2000-01-01';
      }
      if ($max_date == '') {
        $max_date = '2099-01-01';
      }

      $plays = play::where('user_id', $user_id)
                   ->where('date', '<=', $max_date)
                   ->where('date', '>=', $min_date)
                   ->where('bgame_id', '<=', $bgame_max)
                   ->where('bgame_id', '>=', $bgame_min)
                   ->orderBy(explode("-", $order)[0],explode("-", $order)[1])
                   ->get();

      return view('plays', ['plays' => $plays]);
    }

    public function search_plays(Request $request) {
      $order_by = $request['ordered_by'];
      $name_part = $request['name_part'];

      $plays = play::where('name', 'like', '%'.$name_part.'%')
                   ->orderBy($order_by, 'desc')
                   ->get();

      return view('plays', ['plays' => $plays]);
    }
}
