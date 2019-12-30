<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Timetable extends Model
{
    //
    public function events(){
        return $this->belongsTo('App\Events');

    }

}
