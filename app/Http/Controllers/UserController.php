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

      foreach ($users as $user) {
        echo $user->id . "-" . $user->name . "<br>";
      }
    }

    public function view_user($user_id) {
      $user = user::find($user_id);
      echo $user->id . "-" . $user->name . "<br>";
    }
}
