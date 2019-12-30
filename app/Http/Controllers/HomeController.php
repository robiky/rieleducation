<?php

namespace App\Http\Controllers;

use App\Events;
use App\Exams;
use App\Product;
use Carbon\CarbonImmutable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index')
                ->with('products',Product::orderBy('created_at','desc')->take(4)->get())
                ->with('events',Events::orderBy('created_at','desc')->take(3)->get())
                ->with('exams',Exams::all());


    }


    public function about()
    {
        return view('about');

    }

    public function contact()
    {
        return view('contacts');

    }


    public function storeContact()
    {
        return view('contacts');

    }
    public function shop()
    {
        return view('product');

    }
    public function singleEvent($slug)
    {
       $event = Events::where('slug',$slug)->first();

       return view('events')->with('events',$event);

    }
    public function singleExam($slug)
    {
        $exam = Exams::where('slug',$slug)->first();

        return view('register')->with('exams',$exam);

    }


    public  function popUp(){



            $users = DB::table('exam_registers')
                ->where('view_status', '=', 1)
                //->where('view_status', '=', 1)
                ->latest()
                ->take(4)
                ->limit(1)
                ->get();

            foreach ($users as $user){

                if ($user->view_status == 1) {
                    $date = new CarbonImmutable;

                    $response = array(
                        'title' => $user->test_type,
                        'date' => $date->calendar(),
                        'image' => $user->img,
                        'name' => $user->name,
                        'city' => $user->city
                    );

                    DB::table('exam_registers')->where('id', '=', $user->id)
                        ->update([
                            'view_status' => 0,
                        ]);

                }



            }
            if ($users->isEmpty()){
                DB::table('exam_registers')
                    ->where('view_status', '=', 0)->update(array('view_status' => 1));
            }
            // return \Response::json($response);



            return response()->json(array('title'=>$response['title'],'date'=>$response['date'],'image'=>$response['image'],'name'=>$response['name'],'city'=>$response['city']), 200);






        }


}
