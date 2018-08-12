<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    protected $fillable=['score','status','subject_id','exam_id'];

    public function exam(){
      return $this->belongsTo(Exam::class);
    }
    public function subject(){
      return $this->belongsTo(Subject::class);
    }
    public function student(){
      return $this->belongsTo(Student::class);
    }
}
