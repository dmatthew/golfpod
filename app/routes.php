<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::pattern('game', '[a-z0-9-]+');
Route::pattern('category', '[a-z0-9-]+');

/**
 * Home Route
 */
Route::get('/', 'HomeController@index');

/**
 * Game Routes
 */
Route::get('games', 'GamesController@index');
Route::get('games/{category}', 'GamesController@category');
Route::get('games/{category}/{game}', 'GamesController@show');

/**
 * About Route
 */
Route::get('about', 'AboutController@index');

/**
 * Users Routes
 */
Route::resource('users', 'UsersController');
//Route::get('users', 'UsersController@index');
//
//Route::get('users/{username}', 'UsersController@show');

/**
 * Sessions Routes
 */
Route::get('login', 'SessionsController@create');
Route::get('logout', 'SessionsController@destroy');
Route::resource('sessions', 'SessionsController');

Route::get('admin', function () {
    return 'Admin Page';
})->before('auth');
