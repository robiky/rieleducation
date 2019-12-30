<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    //

    protected $fillable = ['exams_profile','name','email','whatsapp_number','payment_status','trxref'];
}
