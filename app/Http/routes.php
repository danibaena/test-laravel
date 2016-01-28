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

/* UI Routes */

Route::get('/home', function() {
	return view('home');
});

/* REST API Routes*/

Route::get('/users', 'UsersController@index');

Route::get('/movies', 'MoviesController@index');

Route::post('/movies', 'MoviesController@store');

Route::post('/users/{userId}/movies', 'UserMovieController@store');

Route::put('/users/{userId}/movies/{movieId}', 'UserMovieController@update');

Route::delete('/users/{userId}/movies/{movieId}', 'UserMovieController@destroy');
