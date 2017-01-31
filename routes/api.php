<?php

use Illuminate\Http\Request;


/*
|------------------------------------------------------------------------------------
| Api
|------------------------------------------------------------------------------------
*/
Route::group(['prefix' => 'v1', 'namespace' => 'Api', 'middleware' => 'ApiToken:api'], function(){
    Route::get('categories', 'CategoriesController@index');
    Route::get('categories/{id}', 'CategoriesController@show');
});


// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
