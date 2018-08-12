<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Teacher;
use App\Subject;
use App\ExamType;
use App\Exam;
use App\Result;

class ResultsController extends Controller
{
    public function make_result(){
        $exams=ExamType::with('exam')->get();

        return view('result')->with('exams',$exams);
    }

    public function result(Request $request){
      if ($request->has('manage_marks')) {
        $students=Student::with('level')->get();
        return view('marks')->with('students',$students);
      }
    }

    public function result_store(Request $request){
      Result::create($request->all());

        if (isset($_POST['manage_marks'])) {
          $students=Student::all();
          dd($students);
          //return view('student.index',compact('students'));
        }
        //return view('result')->with('exams',$exams);

    }
}
