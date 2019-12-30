<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exams extends Model
{
    //
    protected $fillable = ['title','exams_image','price','slug'];

    public function getExams_imageAttribute($exams_image){
        return asset($exams_image);
    }
}
