<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Level;

class AttendanceController extends Controller
{
  public function test($id,$level_id){
    $student=Student::find($id);
    $student->levels()->sync($level_id);
    dd($student);
  }
}
