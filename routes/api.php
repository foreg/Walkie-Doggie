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
Route::get('/walkData', 'WalkDataController@index');
Route::get('walkData/{id}', 'WalkDataController@show');
Route::post('walkData', 'WalkDataController@store');
Route::put('walkData/{id}', 'WalkDataController@update');
Route::delete('walkData/{id}', 'WalkDataController@delete');

Route::get('users', 'UserController@index');
Route::get('users/{user}', 'UserController@show');
Route::post('users', 'UserController@store');
Route::put('users/{user}', 'UserController@update');
Route::delete('users/{user}', 'UserController@delete');

Route::get('dogs', 'DogDataController@index');
Route::get('dogs/{dog}', 'DogDataController@show');
Route::post('dogs', 'DogDataController@store');
Route::put('dogs/{dog}', 'DogDataController@update');
Route::delete('usedogsrs/{dog}', 'DogDataController@delete');