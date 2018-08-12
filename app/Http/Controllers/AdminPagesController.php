<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Teacher;
use App\Subject;
use App\ExamType;
use App\Exam;
use App\Result;

class AdminPagesController extends Controller
{
    public function __construct(){
       $this->middleware('role:admin');
    }

    public function studentPage(){
      $students=Student::all();
      return view('admin_pannel.studentPages.student_information',compact('students'));
    }

    public function addSubject(){
      $subjects=Subject::all();
      $teachers=Teacher::all();
      return view('admin_pannel.subjects.addSubject', compact('subjects','teachers'));
    }

    public function storeSubject(Request $request){
      $subject_store=Subject::create($request->all());
    }

    public function indexSubject(){
      $subjects=Subject::all();
      return view('admin_pannel.subjects.index', compact('subjects'));
    }

    public function examDetails(Request $request){
      $term=ExamType::create($request->all());

    }

<<<<<<< HEAD
    public function exam_manages(){
      $exams=ExamType::all();
      return view('exam_name')->with('exams', $exams);
    }
    public function exam_details_store(Request $request){
      Exam::create($request->all());
    }
=======
    public function exam_manages(Request $request){
      Exam::create($request->all());
      $exams=ExamType::all();
      return view('exam_name')->with('exams', $exams);
    }
>>>>>>> 6ebba68048a04fe16d582267d8f6765eebcc4a4a

}
