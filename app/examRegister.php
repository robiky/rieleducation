<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class examRegister extends Model
{
    //


    public function payment(){
        return $this->hasOne('App\payments');
    }

    protected $fillable = ['_token','test_type','name','dob','phone','email','gender','coaching','passport_number','street_address','city','state','zip_code','test_date','test_location','qualification','field_of_study','country_of_study','first_choice','second_choice','payment_status','trxref','img'];
}
