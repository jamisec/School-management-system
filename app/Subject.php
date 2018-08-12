<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable=[
      'subject_name','subject_code','teacher_id'
    ];

    public function teacher()
    {
        return $this->belongsTo(Teacher::class, 'teacher_id');
    }


    public function students()
    {
        return $this->belongsToMany(Student::class);
    }


    public function result()
    {
        return $this->hasOne(Result::class);
    }
    
}
