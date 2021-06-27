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
}


// id, name, email, collage_id