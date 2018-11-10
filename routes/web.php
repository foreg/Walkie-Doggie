<?php
header('Access-Control-Allow-Origin:  *');
header('Access-Control-Allow-Methods:  POST, GET, OPTIONS, PUT, DELETE');
header('Access-Control-Allow-Headers:  Content-Type, X-Auth-Token, Origin, Authorization');
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
})->name('landing');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/addProfileInfo', 'ProfileController@addProfileInfo')->name('addProfileInfo');

Route::post('/registerVK', 'RegisterController@createByVK');

Route::get('/addDog', 'DogController@showAddDog')->name('addDog');
Route::post('/addDog', 'DogController@addDog');

Route::get('/editDog/{id}', 'DogController@showEditDog')->name('editDog');
Route::post('/editDog/{id}', 'DogController@editDog');
Route::post('/walkDog/{id}', 'DogController@walkDog');
Route::get('/walkDog/{id}', 'DogController@showWalkDog')->name('walkDog');

Route::get('/getCoords', 'MapController@getCoords');
Route::get('/getCoordsJSONP', 'MapController@getCoordsJSONP');
Route::post('/getCoords', 'MapController@getCoords');
Route::get('/map', 'MapController@index');