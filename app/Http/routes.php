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

Route::get('/', function () {
    return view('welcome');
});

/* REST API Routes*/

Route::get('/users', 'UsersController@index');

Route::get('/movies', 'MoviesController@index');

Route::post('/movies', 'MoviesController@store');

Route::post('/users/{user_id}/movies', 'UserMovieController@store');

/*Route::resource('users', 'UsersController', 
	['only' => ['index']]);*/

/*Route::resource('movies', 'MoviesController', 
	['only' => ['index', 'store']]);*/

/*Route::get('/users', function () {
    return view('users');
});

Route::get('/movies', function () {
    return view('movies');
});*/