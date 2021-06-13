<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentFinanceController extends Controller
{
    public function finance_report () {
    	$report = ['Jan' => 500 , 'Feb' => 350 , 'Apr' => 900];
    	return view('student.finance.report')->with(['report' => $report]);
    }
}
