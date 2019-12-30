<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    //
protected $fillable = ['title','featured','contents','timetable_id','category_id','location','date','time','slug'];

public function getFeaturedAttribute($featured){
    return asset($featured);
}

    public function category(){
        return $this->belongsTo('App\Category');
    }

    public  function timetable(){
        return $this->belongsTo('App\Timetable');
    }
}
