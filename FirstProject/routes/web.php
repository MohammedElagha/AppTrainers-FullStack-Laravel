<?php

use Illuminate\Support\Facades\Route;

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


Route::get('student/grade', function () { 
	return view('hello')->with(['name' => 'Mohammed Hosam', 'GPA' => 98.11, 'grades' => ['Web 1' => 75 , 'Web 2' => 77.05 , 'JAVA 1' => 80.5, 'Operating Systems' => 90.65]]); 
});

Route::get('courses', function () {
    return view('course.index')->with(['courses' => [['name' => 'JAVA 1' , 'id' => 'CS-1877' , 'credit' => 3] , ['name' => 'Web 1' , 'id' => 'CS-1771' , 'credit' => 3] , ['name' => 'Android' , 'id' => 'MOBI-8777' , 'credit' => 4]]]);
});

Route::get('students', function () {
	return view('student.index')->with(['students' => [ ['name' => 'Ali' , 'GPA' => 88.44] , ['name' => 'Sarah' , 'GPA' => 77.44] , ['name' => 'Hosam' , 'GPA' => 90.3] ]]);
});


Route::get('cars', 'CarController@get_cars');


Route::get('brands', function () {
	return view('example.brands')->with(['brands' => [
		['name' => 'MB' , 'country' => 'GER'] ,
		['name' => 'VW' , 'country' => 'GER'] ,
		['name' => 'KIA' , 'country' => 'KOR'] ,
		['name' => 'Toyota' , 'country' => 'JAP']
	]]);
});


Route::get('student/finance/report', 'Student\StudentFinanceController@finance_report');