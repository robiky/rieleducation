<?php

namespace App\Http\Controllers;

use App\Exams;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class SingleExamsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('/admin/exams');
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
       //dd($request->all());
        foreach ($request->except('_token') as $data => $value) {
            $valids[$data] = "required";
        }
        $request->validate($valids);

        $exams = $request->all();
        $exam_image = $request->exams_image;
        $exam_new_image_name = time().$exam_image->getClientOriginalName();
        $exam_new_image_name = $exam_image->move('images/course/',$exam_new_image_name);

        $exams['exams_image'] = $exam_new_image_name;

        Exams::create([
            'title'=> $request->title,
            'exams_image'=>$exam_new_image_name,
            'price'=> $request->price,
            'slug' => Str::slug($request->title, '-')
        ]);
        Session::flash('success','You successfully added a new exams category');
        return redirect()->back();
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
