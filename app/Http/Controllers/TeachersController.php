<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Teacher;
use App\User;

class TeachersController extends Controller
{

  public function __construct(){
    $this->middleware('role:admin')->except('create','store');
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
   */


   public function index()
   {
     $teachers=Teacher::all();
     return view('teacher.index',compact('teachers'));
   }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teacher.auth.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $teacher=Teacher::create($request->all());
      User::create([
        'name' => $teacher->teacher_name,
        'email' => $request['email'],
        'userable_type' => 'Teacher',
        'userable_id' => $teacher->id,
        'password' => bcrypt($request['password']),
      ]);
      return redirect()->route('index.teacher');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher)
    {
      $teacher = Teacher::all();

      return view('teacher.edit', compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
