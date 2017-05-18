<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use App\play;

class HomeController extends Controller
{
    public function home() {

      return view('home');
    }
}
