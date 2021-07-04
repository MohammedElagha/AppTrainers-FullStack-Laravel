<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Student;
use Illuminate\Support\Facades\Storage;

class StudentController extends Controller
{
    public function index () {
        $max_credit = 3;

    	$students = Student::with('collage')
                    ->with('registered_courses')
                    ->with(['registered_courses.course' => function ($query) use ($max_credit) {
                        $query->where('credit', '>=', $max_credit);
                    }])
                    ->withTrashed()->select('*')->get();

        foreach ($students as $student) {
            $student->picture = 'http://localhost/TrainLaravel2021/StudentPortal/storage/app/' . $student->picture;
        }

        // dd($students->toArray());

    	return view('student.index')->with('students', $students);
    }



    public function create () {
    	return view('student.create');
    }

    public function store (Request $request) {
    	$name = $request['name'];
    	$email = $request['email'];
    	$gpa = $request['gpa'];



        $picture = $request->file('picture');
        // $name = 'pic.png';
        // $name = $picture->getClientOriginalName();
        $file_name = time() + rand(1, 10000000000) . '.' . $picture->getClientOriginalExtension();
        $path = "uploads/students/$file_name";
        Storage::disk('local')->put($path, file_get_contents($picture));



    	$student = new Student();
    	$student->name = $name;
    	$student->email = $email;
    	$student->gpa = $gpa;
        $student->picture = $path;
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


    public function restore ($id) {
        $result = Student::where('id', $id)->restore();

        return redirect()->back();
    }
}
