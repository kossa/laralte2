<?php

define('ADMIN', env('APP_ADMIN', 'admin'));

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Auth::routes();

/*
|------------------------------------------------------------------------------------
| Admin
|------------------------------------------------------------------------------------
*/
Route::group(['prefix' => ADMIN, 'as' => ADMIN . '.', 'middleware'=>'auth'], function() {
    Route::get('/', ['uses'=>'CategoriesController@index', 'as'=>'dash']);
    Route::resource('categories', 'CategoriesController');
    Route::resource('users', 'UsersController');
});

Route::get('/', function () {
    return view('welcome');
});

