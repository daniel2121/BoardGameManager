<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\user;

class UserController extends Controller
{
    public function create_user(Request $request) {
      user::insert(['name' => $request['name']]);
    }

    public function list_users() {
      $users = user::all();

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
