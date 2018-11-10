<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/addProfileInfo', 'ProfileController@addProfileInfo')->name('addProfileInfo');

Route::get('/addDog', 'DogController@showAddDog')->name('addDog');
Route::post('/addDog', 'DogController@addDog');

Route::get('/editDog/{id}', 'DogController@showEditDog')->name('editDog');
Route::post('/editDog/{id}', 'DogController@editDog');


Route::get('/getCoords', 'MapController@getCoords');
Route::get('/map', 'MapController@index');