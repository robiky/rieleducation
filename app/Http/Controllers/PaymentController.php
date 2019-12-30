<?php

namespace App\Http\Controllers;

use App\examRegister;
use App\Mail\Admin;
use App\Mail\adminTrainer;
use App\Mail\bookPurchase;
use App\Mail\Rieltutor;
use App\Mail\studentExamRegAlert;
use App\Purchases;
use App\Mail\Trainings;
use App\Training;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

use App\Http\Requests;

use Illuminate\Support\Facades\Session;
use Paystack;

class PaymentController extends Controller
{

    /**
     * Redirect the User to Paystack Payment Page
     * @return Url
     */
    public function redirectToGateway(Request $request)
    {
        if ($request->courier_choice == 'Yes'){
            $quantity =   $request->quantity;
            $request->amount =  $request->amount * $quantity;
        }


        $this->validate($request,[
            'first_name' => 'required',
            'phone'=> 'required',
            'email'=>'required',
            'book'=>'required'
        ]);
        Purchases::create([
            'first_name'=>$request->first_name,
            'book'=>$request->book,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'payment_status'=>0,
            'address'=>$request->address,
            'trxref'=>$request->reference,
            'quantity'=>$request->quantity,
            'courier_choice'=>$request->courier_choice,
            'courier'=>$request->courier

        ]);

        return Paystack::getAuthorizationUrl()->redirectNow();
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback()
    {
        $paymentDetails = Paystack::getPaymentData();
        $chkStatus = $paymentDetails['data']['status'];

        $amt = $paymentDetails['data']['amount'];
        $amount = substr($amt, 0, -2);
        $paymentDate = Carbon::today();
        $paymentID = $paymentDetails['data']['reference'];
        $title = $paymentDetails['data']['metadata']['name'];
        $email= $paymentDetails['data']['customer']['email'];






        if ($chkStatus==='success' ) {

            // $purchases =  DB::table('purchases')->where('trxref', $paymentID)->first();
            if ($title == 'book'){
                Purchases::where('trxref',$paymentID)->update([
                    'payment_status'=>'1',
                    'date' => $paymentDate,
                    'amount' => $amount,
                    'action'=> " Made Payment of " .number_format($amount)." for books purchasing"
                ]);
                $purchases =Purchases::where('trxref',$paymentID)->first();
                Mail::to($email)->send(new Rieltutor($purchases));
                Mail::to('register@rieltutors.com')->send(new bookPurchase($purchases));
                Session::flash('success','You Order Has been placed and its been processed');
            }


            if ($title == 'exam'){
                ## exams payment update here
                $img = '1562759077sat.png';
                $examRegister =  examRegister::where('trxref',$paymentID)->first();

                if ($examRegister->test_type == 'SAT ( Scholastic Aptitude Test )'){

                    $img = '1562759077sat.png';
                }elseif ($examRegister->test_type == 'TOEFL ( Test Of English as a Foreign Language )'){
                    $img = '1562245657Toefl.png';
                }elseif ($examRegister->test_type == 'IELTS ( The International English Language Testing System )'){
                    $img = '1562245407ielts.png';
                }elseif ($examRegister->test_type == 'GRE ( Graduate Record Examinations )'){
                    $img = '1562245606gre.png';
                }elseif ($examRegister->test_type == 'GMAT ( Graduate Management Admission Test )'){

                    $img = '1562759357gmat.png';

                }elseif ($examRegister->test_type == 'SAT ( Scholastic Aptitude Test )'){

                    $img = '1562759077sat.png';

                }

                examRegister::where('trxref',$paymentID)
                    ->update([
                        'payment_status'=>'1',
                        'updated_at'=>Carbon::today(),
                        'img'=>$img
                    ]);

                $examRegister =  examRegister::where('trxref',$paymentID)->first();

                Mail::to($email)->send(new studentExamRegAlert($examRegister));
                Mail::to('register@rieltutors.com')->send(new Admin($examRegister));
                Session::flash('success','You registration Was Successfully and its been processed');
            }

            if ($title == 'train'){

                //$trainings   =  DB::table('trainings')->where('trxref', $paymentID)->first();

                Training::where('trxref',$paymentID)
                    ->update([
                        'payment_status'=>1,
                        'updated_at'=>Carbon::today()
                    ]);
                $trainings =Training::where('trxref',$paymentID)->first();
                Mail::to($email)->send(new Trainings($trainings));
                Mail::to('register@rieltutors.com')->send(new adminTrainer($trainings));
                Session::flash('success','You successfully sign up for a training');
            }else{
                Session::flash('error','You sign up for a training failed. try again later');
            }


        } else {
            //Dont Give Value and return to Failure page
            Session::flash('error','You Order Failed');

        }

        return redirect()->back();
    }

}