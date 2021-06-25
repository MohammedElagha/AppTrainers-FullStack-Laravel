<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Student;

class StudentController extends Controller
{
    public function index () {
    	$students = Student::select('*')->get();

    	return view('student.index')->with('students', $students);
    }



    public function create () {
    	return view('student.create');
    }

    public function store (Request $request) {
    	$name = $request['name'];
    	$email = $request['email'];
    	$gpa = $request['gpa'];

    	$student = new Student();
    	$student->name = $name;
    	$student->email = $email;
    	$student->gpa = $gpa;
    	$result = $student->save();

    	return redirect()->back();
    }



    public function edit ($id) {
    	$student = Student::where('id', $id)->first();

    	return view('student.edit')->with('student', $student);
    }

    public function update (Request $request, $id) {
    	$name = $request['name'];
    	$email = $request['email'];
    	$gpa = $request['gpa'];

    	// $result = Student::where('id', $id)->update(['name' => $name , 'email' => $email , 'gpa' => $gpa]);

    	$student = Student::where('id', $id)->first();
    	$student->name = $name;
    	$student->email = $email;
    	$student->gpa = $gpa;
    	$result = $student->save();

    	return redirect()->back();
    }



    public function destroy ($id) {
    	$result = Student::where('id', $id)->delete();

    	return redirect()->back();
    }
}
