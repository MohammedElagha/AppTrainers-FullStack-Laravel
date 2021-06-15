<?php

namespace App\Http\Controllers\Car;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CarController extends Controller
{
    public function create () {
    	return view('car.create');
    }

    public function store (Request $request) {
    	var_dump("This is action");
    }
}
