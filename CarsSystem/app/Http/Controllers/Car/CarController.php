<?php

namespace App\Http\Controllers\Car;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CarController extends Controller
{
    public function create ($id) {
    	return view('car.create')->with('id', $id);
    }

    public function store (Request $request, $id) {
    	// brand, company, model, color

    	// HTTP Method: GET, POST




    	// GET params, POST data
    	$brand = $request['brand'];
    	$company = $request['company'];
    	$model = $request['model'];
    	$color = $request['color'];

    	if ($request->has('brand')) {
    		$brand = $request['brand'];
    	}





    	// GET params
    	
    	if ($request->query->has('brand')) {
    		$brand = $request->query('brand');
    	}



    	// Headers
    	if ($request->headers->has('User-Agent')) {
    		$user_agent = $request->header('User-Agent');
    	}

        // processing

        return redirect("car/$id/create");
    }
}
