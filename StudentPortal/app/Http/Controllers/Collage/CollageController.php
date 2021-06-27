<?php

namespace App\Http\Controllers\Collage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Collage;

class CollageController extends Controller
{
    public function index () {
    	$collages = Collage::with('students')->get();

    	dd($collages->toArray());

    	// foreach ($collages as $collage) {
    	// 	foreach($collage->students as $student) {
    	// 		$student->name;
    	// 	}
    	// }

    	// $collage->students[0]->name;
    }
}
