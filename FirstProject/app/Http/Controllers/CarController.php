<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarController extends Controller
{
    public function get_cars () {
    	$cars = [ 
			['brand' => 'MB' , 'name' => 'MB' , 'model' => 'S-Class' , 'year' => 2018] , 
			['brand' => 'MB' , 'name' => 'MB' , 'model' => 'X-Class' , 'year' => 2020] ,
			['brand' => 'VM' , 'name' => 'Skoda' , 'model' => 'Octavia' , 'year' => 2014]
		];

    	return view('example.cars')->with(['cars' => $cars]);
    }
}
