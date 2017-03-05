<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\user;

class UserController extends Controller
{
    //
    public function create_user() {
      echo "create_user";
      user::insert([
        'name' => 'Daniel'
      ]);
    }

    public function list_users() {
      echo "list_users";
    }

    public function view_user() {
      echo "view_user";
    }
}
