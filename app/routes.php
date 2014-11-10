<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
*/

Route::pattern('game', '[a-z0-9-]+');
Route::pattern('category', '[a-z0-9-]+');
Route::pattern('post', '[a-z0-9-]+');
Route::pattern('year', '[0-9]+');

/**
 * Home Route
 */
Route::get('/', 'HomeController@index');

/**
 * Game Routes
 */
Route::get('games/{category?}', 'GamesController@index');
Route::get('games/{category}/{game}', 'GamesController@show');

/**
 * News Routes
 */
Route::get('news', 'PostsController@index');
Route::get('news/{post}', 'PostsController@show');

/**
 * About Route
 */
Route::get('about', 'AboutController@index');

/**
 * Practice of the day Routes
 */
Route::get('practice-of-the-day/{year?}/{month?}', 'PODController@index');

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
