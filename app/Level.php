<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    protected $fillable=[
    'name',
    'semester_name'
  ];

  public function students(){
    return $this->hasMany(Student::class);
  }


}
