@extends('layout.app')
    <!--====== HEADER PART ENDS ======-->

@section('content')


    <!--====== SHOP PART START ======-->

    <!--====== PAGE BANNER PART START ======-->

    <section id="page-banner" class="pt-105 pb-130 bg_cover" data-overlay="8" style="background-image: url(images/page-banner-1.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>Bookstore Checkout</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">bookstore checkout</li>
                            </ol>
                        </nav>
                    </div>  <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== PAGE BANNER PART ENDS ======-->

    <!--====== SHOP PART START ======-->

    <div class="container pt-105 pb-130 ">
<div class="row">
    <div class="card-body ">



        <div class="payment">

            <div class="creditcard">
                <div class="">

                    <div class="card-info pt-15">
                        <img src="{{$products->image}}" alt="">

                    </div>
                </div>
            </div>

            <div class="form">
                <form method="POST" action="{{ route('pay') }}" id="paymentForm" data-toggle="validator" onSubmit="return checkstatevalue()">
                    {{ csrf_field() }}
                    <input type="hidden" id="title" name="book" value="{{$products->name}}">
                    <input type="hidden" name="amount" value="{{$products->price }}00">
                    <label for="name">Client Name</label>
                    <input type="text" id="name" name="first_name" placeholder="Odiso Edim" value="{{old('first_name')}}" required="">
                    <label for="phone">Phone Number</label>
                    <input type="text" id="phone" name="phone" placeholder="08065956306" value="{{old('phone')}}" required="">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="itakpoodiso@gmail.com"  value="{{old('email')}}" required="">
                    <input type="hidden" name="payment_method" value="both" />
                    <input type="hidden" name="metadata" value="{{ json_encode($array = ['name' => 'book']) }}" >

                    <input type="hidden" name="currency" value="NGN" />
                    <label for="qty">Quantity</label>
                    <input type="number" name="quantity" value="1" >
                    <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}">
                    <input type="hidden" name="key" value="{{ config('paystack.secretKey') }}">

                    <label for="exp">Send through Courier</label>
                        <select onchange="yesnoCheck(this)" name="courier_choice" >
                            <option value="No">No</option>
                            <option value="Yes">Yes</option>


                        </select>




<div id="showThem" class="form-group" style="display: none">

    <label for="exp">Select Courier</label>
    <select type="text" name="courier"  class="form-control" >
        <option value="">Select Courier Service</option>

        <option value="EMS">EMS COURIER    (AT LEAST 10 TO 14  WORKING DAYS - HOME DELIVERY)    INTER-STATE (N2500)</option>
        <option value="GIG">GIG LOGISTICS   (48 HOURS - PICK UP STATION DELIVERY)    INTER STATE (N2500)</option>
        <option value="HOME">HOME DELIVERY (24 -48 HOURS WITHIN THE CROSS RIVER STATE )  (N2500)</option>

    </select>

<div class="single-form">

    <label  for="Address">Delivery Address</label>
    <textarea class="form-control" type="text" name="address" placeholder="14 ediba lane"></textarea>
</div>


</div>

                    <div class="add-btn pt-15">
                    <button class="main-btn" type="submit">Purchase</button>
                    </div>
                </form>


            </div>

        </div>

    </div>
</div>

        <div class="related-item pt-110">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title pb-10">
                        <h3>Related products</h3>
                    </div>
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">

                @foreach( $relateds  as $related)

                    <div class="col-lg-3 col-md-6 col-sm-8">
                        <div class="single-publication mt-30 text-center">
                            <div class="image">
                                <img src="{{$related->image}}" alt="Publication">

                            </div>
                            <div class="content pt-10">
                                <h5 class="book-title"><a href="#">{{$related->name}}</a></h5>
                                <p class="writer-name"><span>By</span> Scott Trench</p>
                                <div class="price-btn d-flex align-items-center justify-content-between">
                                    <div class="price pt-20">
                                        <span class="discount-price">$250</span>
                                        <span class="normal-price">$200</span>
                                    </div>
                                    <div class="button pt-10">
                                        <a href="{{route('product.single', ['slug'=>$related->slug])}}" class="main-btn"><i class="fa fa-cart-plus"></i> Buy Now</a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- single publication -->

                    </div>

                @endforeach
            </div> <!-- row -->

        </div> <!-- related item -->



    </div>
    <script>




        function yesnoCheck(that) {
            if (that.value == "Yes") {
                //alert("check");
                document.getElementById("showThem").style.display = "block";
                document.getElementById('showThem').innerHTML += '<input type="hidden" name="amount" value="{{$products->price + 2500}}00">\r\n';
            } else {
                document.getElementById("showThem").style.display = "none";
                document.getElementById('showThem').innerHTML += '<input type="hidden" name="amount" value="{{$products->price }}00">\r\n';
            }
        }

    </script>
    <!--====== COURSES PART ENDS ======-->


    <!--====== COURSES PART ENDS ======-->
@endsection