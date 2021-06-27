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


Route::get('student', 'Student\StudentController@index');
Route::get('student/create', 'Student\StudentController@create');
Route::post('student/store', 'Student\StudentController@store');
Route::get('student/edit/{id}', 'Student\StudentController@edit');
Route::post('student/update/{id}', 'Student\StudentController@update');
Route::post('student/delete/{id}', 'Student\StudentController@destroy');
Route::post('student/restore/{id}', 'Student\StudentController@restore');

Route::get('collage', 'Collage\CollageController@index');
