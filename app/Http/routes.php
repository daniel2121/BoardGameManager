<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Home page to test whole system
Route::get('/home', "HomeController@home");

// Users
  // Create user
  Route::post('/users', ["uses" => "UserController@create_user"]);

  // List all users (ordering/filtering)
  Route::get('/users', ['uses' => "UserController@list_users"]);

  // View specific user
  Route::get('/users/{user_id}', "UserController@view_user");

  // Search user. Acts as ordering and filtering
  // Route::post('/users/search', ["uses" => "UserController@search_user"]);


// Board games
  // Add Board game
  Route::post('/board-games', "BoardGameController@add_board_game");

  // List all Board games (ordering/filtering)
  Route::get('/board-games', ['uses' => "BoardGameController@list_board_games"]);

  // View a specific Board game
  Route::get('/board-games/{bgame_id}', "BoardGameController@view_board_game");

  // Search Board games. Acts as ordering and filtering
  // Route::post('/board-game/search', "BoardGameController@search_board_game");

// Plays
  // Create new Play
  Route::post('/plays', "PlayController@create_play");

  // View plays by users
  Route::get('/users/{user_id}/plays', ['uses' => "PlayController@view_plays"]);

  // Search for plays by user. Acts as ordering and filtering
  // Route::post('/user/{user_id}/plays/search', "PlayController@search_plays");
