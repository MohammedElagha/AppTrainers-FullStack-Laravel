<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RegisteredCourse extends Model
{
    use SoftDeletes;

    public function course () {
        return $this->belongsTo('App\Course');
    }

    public function course_4_credit () {
        return $this->belongsTo('App\Course')->where('credit', '>=', 4);
    }
}
