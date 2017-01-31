<?php

/*
|------------------------------------------------------------------------------------
| Api
|------------------------------------------------------------------------------------
*/
Route::group(['prefix' => 'v1', 'namespace' => 'Api', 'middleware' => ['api', 'ApiToken']], function(){
    Route::get('categories', 'CategoriesController@index');
    Route::get('categories/{id}', 'CategoriesController@show');
});


// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
