<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Illuminate\Pagination\Paginator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function singleProduct($slug)
    {
        $product = Product::where('slug',$slug)->first();
       // $categories = $post->categories->modelKeys();

        return view('single')->with('products',$product)->with('relateds',Product::inRandomOrder()->take(4)->get());
       // return view('single',['products'=>Product::find($slug)]);
    }
    public function index()
    {

       return view('product',['products'=>Product::simplePaginate(8)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('/admin/book');

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

       // dd($request->all());
        $this->validate($request,[
            'name'=>'required',
            'image'=>'required',
            'price'=>'required'

        ]);

        $book_image = $request->image;

        $book_image_name = time().$book_image->getClientOriginalName();

        $book_image->move('images/event/', $book_image_name);

        Product::create([
           'name'=> $request->name,
            'image'=> 'images/event/'.$book_image_name,
            'description'=> $request->description,
            'price'=> $request->price,
            'slug' => Str::slug($request->name, '-')
        ]);

        Session::flash('success','You successfully added a new product');

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
