<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchases extends Model
{
    //

    protected $fillable = [
        'book','first_name','phone','email','amount','payment_status','date','trxref','address','quantity','courier_choice','courier'
    ];
}
