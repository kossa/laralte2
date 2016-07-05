<?php

define('ADMIN', env('APP_ADMIN', 'admin'));

Route::auth();

/*
|------------------------------------------------------------------------------------
| Api
|------------------------------------------------------------------------------------
*/
Route::group(['prefix' => 'api/v1', 'namespace' => 'Api', 'middleware' => 'ApiToken'], function(){
	Route::get('categories', 'CategoriesController@index');
	Route::get('categories/{id}', 'CategoriesController@show');
});

/*
|------------------------------------------------------------------------------------
| Admin
|------------------------------------------------------------------------------------
*/
Route::group(['prefix' => ADMIN, 'middleware'=>'auth'], function() {
    Route::get('/', ['uses'=>'CategoriesController@index', 'as'=>ADMIN.'.dash']);
    Route::resource('categories', 'CategoriesController');
    Route::resource('users', 'UsersController');
});

Route::get('/', function () {
    return view('welcome');
});

