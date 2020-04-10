<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function fees()
    {
        return $this->hasMany('App\Fee', 'student_number','student_number');
    }
}
