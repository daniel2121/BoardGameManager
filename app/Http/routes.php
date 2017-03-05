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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/hello', function () { echo "get hello"; });
// Route::post('/hello', function () { echo "post hello"; });
// Route::put('/hello', function () { echo "put hello"; });
// Route::delete('/hello', function () { echo "delete hello"; });

// TODO: ordering
Route::post('/user', ["uses" => "UserController@create_user"]);
Route::get('/user', "UserController@list_users");
Route::get('/user/{user_id}', "UserController@view_user");

Route::post('/board-game', "BoardGameController@add_board_game");
Route::get('/board-game', "BoardGameController@list_board_games");
Route::get('/board-game/{bgame_id}', "BoardGameController@view_board_game");

Route::post('/play', "PlayController@create_play");
Route::get('/user/{user_id}/play', "PlayController@view_plays");
