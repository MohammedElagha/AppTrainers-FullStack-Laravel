<?php

namespace App\Http\Controllers\Owner;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class OwnerController extends Controller
{
    public function create () {
    	$cars = DB::select("select * from cars");

    	return view('owner.create')->with('cars', $cars);
    }


    public function store (Request $request) {
    	$name = $request['name'];
    	$car_id = $request['car_id'];

    	$result = DB::table('owners')->insert(['name' => $name , 'car_id' => $car_id]);

    	return redirect()->back();
    }


    public function index () {
    	$data = DB::table('owners')->select('owners.id', 'name', 'car_id', 'brand as car_brand')
    			->join('cars', 'owners.car_id', 'cars.id')
    			// ->where('cars.color', 'like' , '%white%')
    			->whereNull('cars.color')
    			// ->whereNotNull('cars.color')
    			->orderBy('owners.name', 'ASC')
		    	->limit(3)->get();

    	return view('owner.index')->with('owners', $data);
    }

    public function edit ($id) {
    	$row = DB::table('owners')->where('id', $id)->first();
    	$cars = DB::select("select * from cars");

    	return view('owner.edit')->with('owner', $row)->with('cars', $cars);
    }

    public function update (Request $request, $id) {
    	$name = $request['name'];
    	$car_id = $request['car_id'];

    	$result = DB::table('owners')->where('id', $id)->update(['name' => $name , 'car_id' => $car_id]);
    }

    public function destroy ($id) {
    	$result = DB::table('owners')->where('id', $id)->delete();
    }
}
