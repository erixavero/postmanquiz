<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//read cat and item
Route::get('/', "catController@getCats");
Route::get('/cat/{id}', "itemController@getItems");

//insert cat and item
Route::post('/insertCat','catController@insertCat');
Route::post('/insertItem','itemController@insertItem');

//read cat and item by id
Route::get('/toedititem/{id}', "itemController@getItem");
Route::get('/toeditcat/{id}', "catController@getCat");

//edit cat and item
Route::post('/changeCat','catController@changeCat');
Route::post('/changeItem','itemController@changeItem');

//delete cat and item
Route::get('/deleteItem/{id}', "itemController@delItem");
Route::get('/deleteCat/{id}', "catController@delCat");
