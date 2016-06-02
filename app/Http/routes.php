<?php

define('ADMIN', env('APP_ADMIN', 'admin'));

/*
|------------------------------------------------------------------------------------
| Api
|------------------------------------------------------------------------------------
*/
Route::group(['prefix' => 'api/v1', 'namespace' => 'Api'], function(){
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

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('test', function(){
	return view('admin.default');
});