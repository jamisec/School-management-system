<?php

namespace App\Http\Controllers;

use App\Teacher;
use Illuminate\Http\Request;

class StudentPagesController extends Controller
{
  public function __construct(){
    $this->middleware('role:Student');
  }

  public function UsersPage(){
    $teachers=Teacher::all();
    return view('student.dashboard.users',compact('teachers'));
  }
}
