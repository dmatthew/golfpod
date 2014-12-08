<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
*/

/**
 * Route constraint patterns.
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
 * Admin Routes
 */
Route::group(array('prefix' => 'admin', 'before' => ['auth', 'auth.admin'], 'namespace' => 'Admin'), function () {
    Route::get('/', ['as' => 'dashboard', 'uses' => 'AdminController@index']);
    Route::resource('users', 'UsersController');
    Route::resource('games', 'GamesController');
    Route::resource('pods', 'PODController');
    Route::resource('posts', 'PostsController');
});

/**
 * Users Routes
 */
Route::resource('users', 'UsersController');

/**
 * Sessions Routes
 */
Route::get('login', ['as' => 'getLogin', 'uses' => 'SessionsController@create']);
Route::post('login', ['as' => 'postLogin', 'uses' => 'SessionsController@store']);
Route::get('logout', ['as' => 'getLogout', 'uses' => 'SessionsController@destroy']);

/**
 * Registration Routes
 */
Route::get('register', ['as' => 'getRegister', 'uses' => 'RegistrationController@create']);
Route::post('register', ['as' => 'postRegister', 'uses' => 'RegistrationController@store']);
