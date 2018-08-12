<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{

  protected $fillable =[
      'student_name','email','password','reg_no','image','levels_id'
  ];


  public static $validationRule=array(
    'student_name'=>'required|string',
    'email'=>'required',
    'reg_no'=>'required',
    'image'=>'required',
  );

  protected $hidden = [
      'password', 'remember_token',
  ];

  public function user()
  {
      return $this->morphOne(User::class, 'userable');
  }

  public function level(){
    return $this->belongsTo(Level::class);
  }

  public function subject(){
    return $this->hasMany(Subject::class);
  }

  public function results(){
    return $this->hasMany(Result::class);
  }



}
