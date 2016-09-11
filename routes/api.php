<?php


/*
|------------------------------------------------------------------------------------
| Api
|------------------------------------------------------------------------------------
*/
Route::group(['prefix' => 'v1', 'namespace' => 'Api', 'middleware' => 'ApiToken'], function(){
	Route::get('categories', 'CategoriesController@index');
	Route::get('categories/{id}', 'CategoriesController@show');
});


// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:api');
