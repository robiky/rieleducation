@extends('layout.app')
    <!--====== HEADER PART ENDS ======-->

@section('content')

    <!--====== PAGE BANNER PART START ======-->
    <!-- One "tab" for each step in the form: -->
    @if($exams->slug == 'toefl')

        <section id="page-banner" class="pt-105 pb-130 bg_cover" data-overlay="8" style="background-image: url('{{asset('images/course/1562245657Toefl.png')}}')">

    @elseif($exams->slug == 'ielts' )



                <section id="page-banner" class="pt-105 pb-130 bg_cover" data-overlay="8" style="background-image: url('{{asset('images/course/1562245407ielts.png')}}')">



    @elseif($exams->slug == 'gre' )

                        <section id="page-banner" class="pt-105 pb-130 bg_cover" data-overlay="8" style="background-image: url('{{asset('images/course/1562245606gre.png')}}')">

    @elseif($exams->slug == 'gmat' )
                                <section id="page-banner" class="pt-105 pb-130 bg_cover" data-overlay="8" style="background-image: url('{{asset('1562759357gmat.png')}}')">


    @elseif($exams->slug == 'sat' )
                                        <section id="page-banner" class="pt-105 pb-130 bg_cover" data-overlay="8" style="background-image: url('{{asset('1562759077sat.png')}}')">

    @elseif($exams->slug == 'pte' )

                                                <section id="page-banner" class="pt-105 pb-130 bg_cover" data-overlay="8" style="background-image: url('{{asset('1562759343pte.png')}}')">
    @endif

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>{{strtoupper($exams->title)}} REGISTRATION</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('index')}}">HOME</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ucwords($exams->title)}}</li>
                            </ol>
                        </nav>
                    </div>  <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== PAGE BANNER PART ENDS ======-->

    <!--====== CONTACT PART START ======-->

    <section id="contact-page" class="pt-90 pb-120 " >
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-from mt-30">
                        <div class="section-title" >
                            <h5>Register With Us</h5>
                            <h2>Fill Your Accurate Details</h2>
                        </div> <!-- section title -->
                        <div class="main-form pt-45">
                            <form id="regForm" action="{{route('exam.store')}}" method="post" enctype="multipart/form-data" data-toggle="validator">
                                {{csrf_field()}}
                                <input type="hidden" name="message" value="exams" />
                                <input type="hidden" name="amount" value="{{$exams->price }}00">
                                <input type="hidden" name="payment_method" value="both" />
                                <input type="hidden" name="currency" value="NGN" />
                                <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}">
                                <input type="hidden" name="key" value="{{ config('paystack.secretKey') }}">
                                <input type="hidden" name="metadata" value="{{ json_encode($array = ['name' => 'exam']) }}" >

                                    <!-- One "tab" for each step in the form: -->
                                    @if($exams->slug == 'toefl')
                                    <div class="tab">

                                            <h4>Please Click Next To Proceed With TOEFL ( Test Of English as a Foreign Language ) Registration  {{$exams->price }}</h4>

                                    </div>

                                        <input type="hidden" name="test_type" value="TOEFL ( Test Of English as a Foreign Language )">


                                            @elseif($exams->slug == 'ielts' )


                                        <div class="tab">

                                            <h4>Please Click Next To Proceed With IELTS ( The International English Language Testing System ) Registration</h4>

                                        </div>

                                        <input type="hidden" name="test_type" value="IELTS ( The International English Language Testing System )">

                                    @elseif($exams->slug == 'gre' )

                                        <div class="tab">
                                            <h4>Please Click Next To Proceed With GRE ( Graduate Record Examinations )Registration</h4>
                                        </div>
                                        <input type="hidden" name="test_type" value="GRE ( Graduate Record Examinations )">

                                    @elseif($exams->slug == 'gmat' )

                                        <div class="tab">
                                            <h4>Please Click Next To Proceed With GMAT ( Graduate Management Admission Test ) Registration</h4>
                                        </div>
                                        <input type="hidden" name="test_type" value="GMAT ( Graduate Management Admission Test )">

                                    @elseif($exams->slug == 'sat' )

                                        <div class="tab">
                                            <h4>Please Click Next To Proceed With SAT ( Scholastic Aptitude Test ) Registration NGN{{$exams->price }}</h4>
                                        </div>
                                        <input type="hidden" name="test_type" value="SAT ( Scholastic Aptitude Test )">

                                    @elseif($exams->slug == 'pte' )

                                        <div class="tab">
                                            <h4>Please Click Next To Proceed With PTE ( The Pearson Test of English Academic ) Registration</h4>
                                        </div>
                                        <input type="hidden" name="test_type" value="PTE ( The Pearson Test of English Academic )">
                                    @endif
                                    <div class="tab">

                                        <h4>Personal Details</h4>

                                        <div class="row">
                                            <div class="form-group single-form col-md-12">
                                                <input type="text"  name="name" placeholder="Your Full Name(SURNAME FIRST)" required="required" value="{{old('name')}}"/> <div class="help-block with-errors" ></div>
                                            </div>

                                            <div class="form-group single-form col-md-6">
                                                <input type="text" name="dob" placeholder="Date of Birth" required="" data-error="Date of Birth is required." value="{{old('dob')}}" />
                                                <div class="help-block with-errors"></div>

                                            </div>

                                            <div class="form-group single-form col-md-6">
                                                <input type="text" name="phone" placeholder="Mobile" required="" value="{{old('phone')}}"/>
                                                <div class="help-block with-errors"></div>

                                            </div>
                                            <div class="form-group single-form col-md-12">
                                                <input type="email" name="email" placeholder="Email"  required="" />
                                                <div class="help-block with-errors"></div>
                                            </div>

                                            <div class="form-group single-form col-md-6">
                                                <select class="form-control" name="gender" required="" >
                                                    <option value="">Select Gender</option>
                                                    <option value="male">Male</option>
                                                    <option value="female">Female</option>
                                                    <option value="other">Other</option>
                                                </select>
                                                <div class="help-block with-errors"></div>
                                            </div>

                                            <div class="form-group single-form col-md-6">
                                                <select class="form-control" name="coaching" required="">
                                                    <option value="">Are You Interested in our coaching?</option>
                                                    <option value="yes">Yes</option>
                                                    <option value="no">No</option>

                                                </select>
                                                <div class="help-block with-errors"></div>
                                            </div>



                                            <div class="form-group  single-form col-md-12">
                                                <input type="text" name="passport_number" placeholder="Passport Number"  required="" />
                                                <div class="help-block with-errors"></div>
                                            </div>

                                            <div class="form-group single-form col-md-12">
                                                <input type="text" name="street_address" placeholder="Street Address" required="" />
                                                <div class="help-block with-errors"></div>
                                            </div>

                                            <div class="form-group single-form col-md-6">
                                                <input type="text" name="city" placeholder="City" required="" />
                                                <div class="help-block with-errors"></div>
                                            </div>
                                            <div class="form-group single-form col-md-6">
                                                <input type="text" name="zip_code" placeholder="Postal / Zip Code" required=""/>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                            <div class="form-group single-form col-md-12">
                                                <input type="text" name="state" placeholder="State" required="" />
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>

                                    </div>

                                <div class="tab">
                                    <h4>Exams Details</h4>
                                    <div class="row">

                                    <div class="form-group single-form col-md-6">
                                        <input type="text" name="test_date" placeholder="Test Date (If Known)" required="" />
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group single-form col-md-6">
                                        <input type="text" name="test_location" placeholder="Test Location" required="" />
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group  single-form col-md-12">
                                        <input type="text" name="qualification" placeholder="Your Highest Qualification" required="" />
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group single-form col-md-6">
                                        <input type="text" name="field_of_study" placeholder="Desired Field of Study" required="" />
                                        <div class="help-block with-errors"></div>
                                    </div>
                                        <div class="form-group single-form col-md-6">
                                            <input type="text" name="country_of_study" placeholder="Desired Country of Study" required="" />
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="form-group single-form col-md-6">
                                            <input type="text" name="first_choice" placeholder="First Choice of Institution" required=""/>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="form-group single-form col-md-6">
                                            <input type="text" name="second_choice" placeholder="Second Choice of Institution" required=""/>
                                            <div class="help-block with-errors"></div>
                                        </div>

                                    </div>
                                </div>

                                    {{--<div class="tab">--}}
                                        {{--<h4>Billing and Contract</h4>--}}
                                        {{--<div class="container">--}}
                                            {{--<div class="row">--}}
                                                {{--<div class="col-lg-7" >--}}


                                                        {{--<div class="main-form pt-85">--}}

                                                                {{--<div class="row">--}}
                                                                    {{--<div class="col-md-6">--}}
                                                                        {{--<div class="single-form form-group">--}}
                                                                            {{--<input name="depositor_name" type="text" placeholder="Depositor Name" data-error="Depositor Name is required." required="" />--}}
                                                                            {{--<div class="help-block with-errors"></div>--}}
                                                                        {{--</div> <!-- single form -->--}}
                                                                    {{--</div>--}}

                                                                    {{--<div class="col-md-6">--}}
                                                                        {{--<div class="single-form form-group">--}}
                                                                            {{--<input name="bank" type="text" placeholder="Bank" data-error="bank name is required." required=""/>--}}
                                                                            {{--<div class="help-block with-errors"></div>--}}
                                                                        {{--</div> <!-- single form -->--}}
                                                                    {{--</div>--}}
                                                                    {{--<div class="col-md-6">--}}
                                                                        {{--<div class="single-form form-group">--}}
                                                                            {{--<input name="amount" type="text" placeholder="Amount" data-error="Valid email is required." required="">--}}
                                                                            {{--<div class="help-block with-errors"></div>--}}
                                                                        {{--</div> <!-- single form -->--}}
                                                                    {{--</div>--}}
                                                                    {{--<div class="col-md-6">--}}
                                                                        {{--<div class="single-form form-group">--}}
                                                                            {{--<input name="teller_id" placeholder="Transaction or Teller Id" data-error="Transaction id or teller id is required" required="">--}}
                                                                            {{--<div class="help-block with-errors"></div>--}}
                                                                        {{--</div> <!-- single form -->--}}
                                                                    {{--</div>--}}
                                                                        {{--<div class="col-md-12">--}}
                                                                            {{--<div class="single-form form-group">--}}
                                                                                {{--<input name="attached" class="form-control" type="file" placeholder="Message" data-error="Attachment of payment is required" required=""/>--}}
                                                                                {{--<div class="help-block with-errors"></div>--}}
                                                                            {{--</div> <!-- single form -->--}}

                                                                    {{--</div>--}}

                                                                {{--</div> <!-- row -->--}}

                                                        {{--</div> <!-- main form -->--}}

                                                {{--</div>--}}
                                                {{--<div class="col-lg-5">--}}
                                                    {{--<div class="contact-address " style="padding: 0px 50px 50px !important;">--}}
                                                        {{--<ul>--}}
                                                            {{--<li><p>Please Contacts +2348065956306 Before Making the Payment Thank You</p></li>--}}
                                                            {{--<li>--}}
                                                                {{--<div class="single-address">--}}
                                                                    {{--<div class="icon">--}}
                                                                        {{--<i class="fa fa-user"></i>--}}
                                                                    {{--</div>--}}
                                                                    {{--<div class="cont">--}}
                                                                        {{--<p>Odiso Edim Itakpo</p>--}}
                                                                    {{--</div>--}}
                                                                {{--</div> <!-- single address -->--}}
                                                            {{--</li>--}}
                                                            {{--<li>--}}
                                                                {{--<div class="single-address">--}}
                                                                    {{--<div class="icon">--}}
                                                                        {{--<i class="fa fa-sort-numeric-desc"></i>--}}
                                                                    {{--</div>--}}
                                                                    {{--<div class="cont">--}}
                                                                        {{--<p>0237 521 508</p>--}}

                                                                    {{--</div>--}}
                                                                {{--</div> <!-- single address -->--}}
                                                            {{--</li>--}}
                                                            {{--<li>--}}
                                                                {{--<div class="single-address">--}}
                                                                    {{--<div class="icon">--}}
                                                                        {{--<i class="fa fa-bank"></i>--}}
                                                                    {{--</div>--}}
                                                                    {{--<div class="cont">--}}
                                                                        {{--<p>Guarantee Brust Bank Plc</p>--}}
                                                                    {{--</div>--}}
                                                                {{--</div> <!-- single address -->--}}
                                                            {{--</li>--}}
                                                        {{--</ul>--}}
                                                    {{--</div> <!-- contact address -->--}}

                                                {{--</div>--}}
                                            {{--</div> <!-- row -->--}}
                                        {{--</div> <!-- container -->--}}
                                    {{--</div>--}}




                                    <div style="overflow:auto;">
                                        <div style="float:right; padding: 10px">
                                            <button type="button" class="main-btn disabled" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                                            <button type="button" class="main-btn disabled"  id="nextBtn" onclick="nextPrev(1)">Next</button>
                                            <button style="display:none;" type="submit" class="main-btn"  id="submitme" >submit</button>
                                        </div>
                                    </div>

                                    <!-- Circles which indicates the steps of the form: -->
                                    <div style="text-align:center;margin-top:40px;">
                                        <span class="step"></span>
                                        <span class="step"></span>
                                        <span class="step"></span>
                                        <span class="step"></span>
                                    </div>

                            </form>
                        </div> <!-- main form -->
                    </div> <!--  contact from -->
                </div>

            </div> <!-- row -->
        </div> <!-- container -->
    </section>

@endsection