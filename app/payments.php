<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class payments extends Model
{
    //

    public function examRegister(){
        return $this->belongsTo('App\examRegister');
    }

    protected $fillable = ['attached','depositor_name','bank','amount','teller_id','register_id'];
}
