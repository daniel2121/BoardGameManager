<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use App\user;
use Redirect;

class UserController extends Controller
{
    public function create_user(Request $request) {
      user::insert(['name' => $request['name']]);
      return Redirect::back()->withSuccess('Message sent!');
    }

    public function list_users() {
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

      $users = user::where('id', '<=', $max_id)
                   ->where('id', '>=', $min_id)
                   ->where('name', 'LIKE', '%'.$filter.'%')
                   ->orderBy(explode("_", $order)[0],explode("_", $order)[1])
                   ->get();

      return view('users', ['users' => $users]);
    }

    public function view_user($user_id) {
      $user = user::find($user_id);
      echo $user->id . "-" . $user->name . "<br>";
    }

    public function search_user(Request $request) {
      $order_by = $request['ordered_by'];
      $name_part = $request['name_part'];

      $users = user::where('name', 'like', '%'.$name_part.'%')
                   ->orderBy($order_by, 'desc')
                   ->get();

      return view('users', ['users' => $users]);
    }
}
