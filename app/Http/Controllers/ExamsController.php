<?php

namespace App\Http\Controllers;

use App\examRegister;
use App\payments;
use Illuminate\Http\Request;
use Unicodeveloper\Paystack\Facades\Paystack;

class ExamsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        foreach ($request->except('_token') as $data => $value) {
            $valids[$data] = "required";
        }
        $request->validate($valids);
//        $this->validate($request,[
//            'attached' => 'required',
//        ]);

        $input = $request->all();
//       $attached = $request->attached;
//       $attached_new_name = time().$attached->getClientOriginalName();
//        $attached_new_name =  $attached->move('images/review/',$attached_new_name);
//
//       $input['attached'] = $attached_new_name;

//       $payment = payments::create($input);
      $trxref =  $request->reference;
      $input['payment_status'] = 0;
      $input['trxref'] = $trxref;


        examRegister::create($input);


        return Paystack::getAuthorizationUrl()->redirectNow();
//        Session::flash('success','You successfully Registered For an Exam');
//       return redirect()->back();


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
