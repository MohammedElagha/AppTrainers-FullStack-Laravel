<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Collage extends Model
{
    use SoftDeletes;

    public function students () {
    	return $this->hasMany('App\Student');
    }
}


// id, name