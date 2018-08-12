<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
  protected $fillable = [
      'teacher_name','email','password','image','contact'
  ];


  public static $validationRule=array(
    'teacher_name'=>'required|string',
    'contact'=>'required|string',
    'image'=>'required',
    'contact'=>'required|numeric',


  );


  protected $hidden = [
      'password', 'remember_token',
  ];

  public function user()
  {
      return $this->morphOne(User::class, 'userable');
  }

  
}
