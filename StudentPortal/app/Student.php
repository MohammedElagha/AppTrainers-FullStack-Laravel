<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use SoftDeletes;

    public function collage () {
    	return $this->belongsTo('App\Collage');
    }

    public function registered_courses () {
        return $this->hasMany('App\RegisteredCourse');
    }
}


// id, name, email, collage_id