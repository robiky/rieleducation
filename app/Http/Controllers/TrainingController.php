<?php

namespace App\Http\Controllers;

use App\Training;
use Illuminate\Http\Request;
use Paystack;

class TrainingController extends Controller
{
    //
    public function store(Request $request){

    // dd($request->all());
$this->validate($request,[
   'exams_profile'=> 'required',
    'name'=> 'required',
    'email'=>'required',
    'whatsapp_number'=>'required'
]);

Training::create([
    'exams_profile'=> $request->exams_profile,
    'name'=> $request->name,
    'payment_status'=> 0,
    'trxref'=>$request->reference,
    'email'=>$request->email,
    'whatsapp_number'=>$request->whatsapp_number
]);

        return Paystack::getAuthorizationUrl()->redirectNow();

    }
}
