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
    return view('welcome');
});

Route::get('car/create', 'Car\CarController@create');
Route::post('car/store', 'Car\CarController@store');
Route::get('car', 'Car\CarController@index');
Route::get('car/edit/{id}', 'Car\CarController@edit');
Route::post('car/update/{id}', 'Car\CarController@update');
Route::post('car/delete/{id}', 'Car\CarController@destroy');

Route::get('owner/create', 'Owner\OwnerController@create');
Route::post('owner/store', 'Owner\OwnerController@store');
Route::get('owner', 'Owner\OwnerController@index');