<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
  protected $fillable=['name','subject_id','student_id',];

  public function student(){
    return $this->belongsToMany(Student::class,'student_id');
  }

  public function teacher(){
    return $this->belongsTo(Teacher::class);
  }

  public function subject(){
    return $this->belongsTo(Subject::class);
  }

}
