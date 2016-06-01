<?php


Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('test', function(){
	return view('admin.default');
});