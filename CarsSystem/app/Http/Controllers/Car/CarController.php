<?php

namespace App\Http\Controllers\Car;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class CarController extends Controller
{
    public function create () {
    	return view('car.create');
    }

    public function store (Request $request) {
    	$brand = $request['brand'];
        $company = $request['company'];
        $color = $request['color'];
        $model = $request['model'];

        $query = "insert into cars (brand, company, color, model) values ('$brand', '$company', '$color', '$model')";

        $result = DB::insert($query);
        // DB::query($query);

        return redirect("car/create");
    }


    public function index () {
        $query = "select cars.id, cars.model, cars.brand, cars.company, cars.color, owners.name as owner_name from cars left join owners on cars.id = owners.car_id";

        $data = DB::select($query);
        // DB::query($query);

        return view('car.index')->with('cars', $data);
    }




    public function edit ($id) {
        $query = "select * from cars where id = $id limit 1";
        $data = DB::select($query);
        $row = $data[0];

        return view('car.edit')->with('car', $row);
    }


    public function update (Request $request, $id) {
        $brand = $request['brand'];
        $company = $request['company'];
        $color = $request['color'];
        $model = $request['model'];

        $query = "update cars set brand = '$brand' , company = '$company' , color = '$color' , model = '$model' where id = $id";

        $result = DB::update($query);
        // DB::query($query);

        return redirect("car/edit/$id");
    }


    public function destroy ($id) {
        $query = "delete from cars where id = $id";
        $result = DB::delete($query);
        return redirect()->back();
    }
}
