@extends('layout.app')

<!--====== HEADER PART ENDS ======-->
@section('content')
<style>

    @import url(https://fonts.googleapis.com/css?family=Raleway:200,300,400,500,700,800);



    .flappy-dialog {
        background-color: transparent;
        border-radius: 25px;

        text-align: center;

        display: block;
        margin: 100px auto;
        width: 700px;
        overflow: hidden;

        transform-origin: center center;

        transition: transform 0.4s ease;
    }

    .flappy-dialog.hidden {
        transform: rotateX(-90deg);
    }

    .flappy-dialog h2 {
        color: #8F69E8;
        border-bottom: 1px solid rgba(0, 0, 0, 0.1);

        font-family: 'Raleway', sans-serif;
        font-size: 20px;
        line-height: 3.5;
        font-weight: 700;
        letter-spacing: 0.02em;
        text-transform: uppercase;

        margin: 0;
        padding: 0;
    }

    .flappy-dialog h1 {
        color: #666666;

        font-family: 'Raleway', sans-serif;
        font-size: 50px;
        line-height: 1.8;
        font-weight: 200;

        margin: 0;
        margin-top: 0.5em;
        padding: 0;
    }

    .flappy-dialog h3 {
        color: #888888;

        font-family: 'Raleway', sans-serif;
        font-size: 16px;
        font-weight: 300;

        display: block;
        margin: 0 auto;
        margin-bottom: 4em;
        padding: 0;
        width: 280px;
    }

    .flappy-dialog .flappy-dialog-buttons {
        background-color: #2e2e2e;
        overflow: hidden;
        position: relative;

        perspective: 500px;
    }

    .flappy-dialog button {
        color: rgba(255, 255, 255, 0.95);
        background-color: #8F69E8;
        border: none;

        font-size: 25px;
        font-weight: 500;
        line-height: 3;
        letter-spacing: 0.01em;
        text-transform: uppercase;

        padding: 0 2em;

        transform-origin: 50% 0%;
        transition: transform 0.75s cubic-bezier(0.5, 3, 0.65, 0.45) 0.3s;
    }

    .flappy-dialog button + button {
        transition-delay: 0.35s;
    }

    .flappy-dialog.hidden button {
        transform: rotateX(-90deg);
    }

    .flappy-dialog button:hover {
        background-color: #865FDF;

        transition: background-color: 0.15s ease 0s, transform 0.15s ease 0s;
        transition-delay: 0s, 0s;
        transform: rotateX(-20deg);
    }

    .flappy-dialog .left-flap,
    .flappy-dialog .right-flap
    {
        background-color: #865FDF;
        border-bottom-left-radius: 25px;

        display: block;
        margin: 0;
        padding: 0;
        width: 208px;

        position: absolute;
        top: 0;
        bottom: 0;
        left:0;

        transform-origin: 50% 0%;
        transition: transform 0.75s cubic-bezier(0.5, 3, 0.65, 0.45) 0.25s;
    }

    .flappy-dialog .right-flap {
        border-bottom-left-radius: 0px;
        border-bottom-right-radius: 25px;

        left: auto;
        right: 0;

        transition-delay: 0.4s;
    }

    .flappy-dialog.hidden .left-flap,
    .flappy-dialog.hidden .right-flap
    {
        transform: rotateX(-90deg);
    }

</style>
    <!--====== SLIDER PART START ======-->


    <section id="slider-part" class="slider-active">
        <div class="single-slider slider-2 bg_cover" style="background-image: url(images/slider/s-2.jpg)" data-overlay="4">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 col-lg-10">
                        <div class="slider-cont">
                            <h1 data-animation="bounceInLeft" data-delay="1s">Register with us and develop your skill</h1>
                            {{--<a data-animation="fadeInUp" data-delay="1.3s" href="#" class="main-btn">Sign up</a>--}}
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- single slider -->

        <div class="single-slider slider-2 bg_cover" style="background-image: url(images/slider/s-3.jpg)" data-overlay="4">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 col-lg-10">
                        <div class="slider-cont">
                            <h1 data-animation="bounceInLeft" data-delay="1s">Buy your exams material here</h1>
                            <a data-animation="fadeInUp" data-delay="1.3s" href="{{route('bookstore.index')}}" class="main-btn">Buy now</a>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- single slider -->

        <div class="single-slider slider-2 bg_cover" style="background-image: url(images/slider/s-1.jpg)" data-overlay="4">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 col-lg-10">
                        <div class="slider-cont">
                            <h1 data-animation="bounceInLeft" data-delay="1s">Register for international exams here</h1>
                            {{--<a data-animation="fadeInUp" data-delay="1.3s" href="#" class="main-btn">Register now</a>--}}
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- single slider -->
    </section>

    <!--====== SLIDER PART ENDS ======-->

    <!--====== CATEGORY PART START ======-->

    <section id="category-2-part" >
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="category-2-items pt-10">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="single-items text-center mt-30">
                                    <div class="items-image">
                                        <img style="width: 270px;height: 105px;" src="images/course/1562245407ielts.png" alt="Category">
                                    </div>
                                    <div class="items-cont">
                                        <a href="#">
                                            <h5>IELTS</h5>
                                        </a>
                                    </div>
                                </div> <!-- single items -->
                            </div>
                            <div class="col-md-6">
                                <div class="single-items text-center mt-30">
                                    <div class="items-image">
                                        <img style="width: 270px;height: 105px;" src="images/course/1562245606gre.png" alt="Category">
                                    </div>
                                    <div class="items-cont">
                                        <a href="#">
                                            <h5>GRE</h5>

                                        </a>
                                    </div>
                                </div> <!-- single items -->
                            </div>
                            <div class="col-md-6">
                                <div class="single-items text-center mt-30">
                                    <div class="items-image">
                                        <img style="width: 270px;height: 105px;" src="images/course/1562245657Toefl.png" alt="Category">
                                    </div>
                                    <div class="items-cont">
                                        <a href="#">
                                            <h5>TOEFL</h5>

                                        </a>
                                    </div>
                                </div> <!-- single items -->
                            </div>
                            <div class="col-md-6">
                                <div class="single-items text-center mt-30">
                                    <div class="items-image">
                                        <img style="width: 270px;height: 105px;" src="images/course/1562759077sat.png" alt="Category">
                                    </div>
                                    <div class="items-cont">
                                        <a href="#">
                                            <h5>SAT</h5>

                                        </a>
                                    </div>
                                </div> <!-- single items -->
                            </div>
                            <div class="col-md-6">
                                <div class="single-items text-center mt-30">
                                    <div class="items-image">
                                        <img style="width: 270px;height: 105px;" src="images/course/1562759357gmat.png" alt="Category">
                                    </div>
                                    <div class="items-cont">
                                        <a href="#">
                                            <h5>GMAT</h5>

                                        </a>
                                    </div>
                                </div> <!-- single items -->
                            </div>
                            <div class="col-md-6">
                                <div class="single-items text-center mt-30">
                                    <div class="items-image">
                                        <img style="width: 270px;height: 105px;" src="images/course/1562759343pte.png" alt="Category">
                                    </div>
                                    <div class="items-cont">
                                        <a href="#">
                                            <h5>PTE</h5>

                                        </a>
                                    </div>
                                </div> <!-- single items -->
                            </div>
                        </div> <!-- row -->
                    </div> <!-- category -->
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="category-form" id="training">
                        <div class="form-title text-center">
                            <h3>Training Registration!</h3>
                            <span>Sign up now </span>
                        </div>
                        <div class="main-form">
                            <form action="{{route('trainings.store')}}" method="post">
                                {{csrf_field()}}
                                <input type="hidden" name="metadata" value="{{ json_encode($array = ['name' => 'train']) }}" >
                                <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}">
                                <div class="single-form">
                                    <select id="train" onchange="show()" name="exams_profile" required="" class="form-control">
                                        <option value="">Select Examination Profile </option>

                                        <option value="GMAT(N40,000)">GMAT(N40,000) with Free Materials</option>

                                        <option value="GRE(N40,000)">GRE(N40,000) with Free Materials</option>

                                        <option value="IELTS(N35,000)">IELTS(N35,000) with Free Materials</option>

                                        <option value="PTE(N35,000)">PTE(N35,000) with Free Materials</option>

                                        <option value="SAT(N40,000)">SAT(N40,000) with Free Materials</option>

                                        <option value="TOEFL(N35,000)">TOEFL(N35,000) with Free Materials</option>

                                    </select>
                                </div>
                                <div class="single-form">
                                    <input type="text" name="name" placeholder="Your name">
                                </div>
                                <div id="amount">

                                </div>
                                <div class="single-form">
                                    <input type="email" name="email" placeholder="Your Mail">
                                </div>
                                <div class="single-form">
                                    <input type="text" name="whatsapp_number" placeholder="Your Whatsapp Phone Number">
                                </div>

                                <div class="single-form">
                                    <button class="main-btn" type="submit">Sign Up Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

<div class="flappy-dialog">
    <h2>Just checking...</h2>

    <h1>Delete your account?</h1>
    <h3>This action is final and you will be unable to recover any data</h3>

    <div class="flappy-dialog-buttons">
        <div class="left-flap"></div>
        <button>Yes</button><button>No</button>
        <div class="right-flap"></div>
    </div>
</div>
    <script>
        function show(){
            var option = document.getElementById("train").value;
            if(option == "GMAT(N40,000)")
            {
                document.getElementById('amount').innerHTML += '<input type="hidden" name="amount" value="4000000">\r\n';
            }
            if(option == "GRE(N40,000)")
            {
                document.getElementById('amount').innerHTML += '<input type="hidden" name="amount" value="4000000">\r\n';
            }
            if(option == "IELTS(N35,000)")
            {
                document.getElementById('amount').innerHTML += '<input type="hidden" name="amount" value="3500000">\r\n';
            }
            if(option == "PTE(N35,000)")
            {
                document.getElementById('amount').innerHTML += '<input type="hidden" name="amount" value="3500000">\r\n';
            }
            if(option == "SAT(N40,000)")
            {
                document.getElementById('amount').innerHTML += '<input type="hidden" name="amount" value="4000000">\r\n';
            }
            if(option == "TOEFL(N35,000)")
            {
                document.getElementById('amount').innerHTML += '<input type="hidden" name="amount" value="3500000">\r\n';
            }
        }
    </script>


    <!--====== CATEGORY PART ENDS ======-->


    <!--====== ABOUT PART START ======-->

    <section id="about-part" class="pt-65">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-title mt-50">
                        <h5>About us</h5>
                        <h2>Welcome to Rieltutors </h2>
                    </div> <!-- section title -->
                    <div class="about-cont">
                        <p>we are one of the best service oriented organisation in Nigeria. having our team of dedicated workers handle your registartion and tutorials is one of the key factors that endear clients to our services. we are dedicated to serve and render topnotch services to our numerous clients.</p>
                        <a href="{{route('home.about')}}" class="main-btn mt-55">Learn More</a>
                    </div>
                </div> <!-- about cont -->
                <div class="col-lg-6 offset-lg-1">
                    <div class="about-event mt-50">
                        <div class="event-title">
                            <h3>Place your Ads Here</h3>
                        </div> <!-- event title -->
                      <div>
                          <img src="http://www.localdealspamphlet.com/wp-content/uploads/2018/08/advertise-gif.gif" alt="" style="height: 300px;">
                      </div>
                    </div> <!-- about event -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
        <div class="about-bg">
            <img src="images/about/bg-1.png" alt="About">
        </div>
    </section>

    <!--====== ABOUT PART ENDS ======-->
    <!--====== COURSE PART START ======-->

    <section id="course-part" class="pt-115 pb-115 gray-bg" style="background-image: url({{asset('images/course/course-shape.png')}})">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title pb-45">
                        <h5>international Exams</h5>
                        <h2>Register With Us</h2>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row course-slide mt-30">

                @foreach($exams as $exam)

                    {{--the choosen one --}}
                    <div class="col-lg-4">
                        <div class="single-course-2">
                            <div class="thum">
                                <div class="image">
                                    <img style="width:400px;height: 350px;" src="{{$exam->exams_image}}" alt="exams image">
                                </div>

                                <div class="course-teacher d-flex align-items-center">
                                    <div class="teacher ml-10">
                                        <div class="name">
                                            <a ><h6>NGN {{number_format($exam->price)}}</h6></a>
                                        </div>

                                    </div>
                                    <div class="price-btn d-flex align-items-center justify-content-between ml-10">

                                        <div class="button pt-10">
                                            <a href="{{route('exams.singleExam',['slug'=>$exam->slug])}}" class="main-btn"><i class="fa fa-cart-plus"></i> Register Now</a>

                                        </div>
                                    </div>

                                </div>
                            </div>



                        </div> <!-- single course -->



                    </div>

                @endforeach


            </div> <!-- course slide -->
        </div> <!-- container -->
    </section>

    <!--====== COURSE PART ENDS ======-->



    <!--====== COUNTER PART START ======-->

    <div id="counter-part" class="bg_cover pt-65 pb-110" data-overlay="8" style="background-image: url(images/bg-2.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-counter text-center mt-40">
                        <span><span class="counter">3,860</span>+</span>
                        <p>Students enrolled</p>
                    </div> <!-- single counter -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-counter text-center mt-40">
                        <span><span class="counter">12</span>+</span>
                        <p>Years of Working</p>
                    </div> <!-- single counter -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-counter text-center mt-40">
                        <span><span class="counter">5</span>+</span>
                        <p>Country Branches</p>
                    </div> <!-- single counter -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-counter text-center mt-40">
                        <span><span class="counter">40</span>+</span>
                        <p>Tutors</p>
                    </div> <!-- single counter -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div>

    <!--====== COUNTER PART ENDS ======-->


    <!--====== APPLY PART START ======-->
    <section class="admission-row pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-8">
                    <div class="admission-card mt-30">
                        <div class="card-image">
                            <a href="#"><img src="images/admission/admission-1.jpg" alt="Admission"></a>
                        </div>
                        <div class="card-content">
                            <h4 class="card-titles">Our visions</h4>
                            <p>Realizing the full potential of education, a universal access to knowledge  to drive a new era of development </p>
                        </div>
                    </div> <!-- admission card -->
                </div>

                <div class="col-lg-4 col-md-8">
                    <div class="admission-info mt-30">
                        <h3 class="admission-title">RIEL EDUCATION</h3>
                        <p>Quality does not come cheap or free but it comes affordable. Attend our paid training/tutorials and pass your exams in one sitting. High score guaranteed! .</p>
                        <h4 class="help-line">Help Line</h4>
                        <span>+234 803 774 9749</span>
                    </div> <!-- admission info -->
                </div>

                <div class="col-lg-4 col-md-8">
                    <div class="admission-card mt-30">
                        <div class="card-image">
                            <a href="#"><img src="images/admission/admission-2.jpg" alt="Admission"></a>
                        </div>
                        <div class="card-content">
                            <h4 class="card-titles">Our Mission</h4>
                            <p>We work hard every day to make Africa the world's most respected continent and to be a part of a  service brand.</p>
                        </div>
                    </div> <!-- admission card -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== APPLY PART ENDS ======-->

    <!--====== VIDEO FEATURE PART START ======-->

    <section id="video-feature" class="bg_cover pt-60 pb-110" style="background-image: url(images/bg-1.jpg)">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-last order-lg-first">
                    <div class="video text-lg-left text-center pt-50">
                        <a class="Video-popup" href="https://www.youtube.com/watch?v=bRRtdzJH1oE"><i class="fa fa-play"></i></a>
                    </div> <!-- row -->
                </div>
                <div class="col-lg-5 offset-lg-1 order-first order-lg-last">
                    <div class="feature pt-50">
                        <div class="feature-title">
                            <h3>Our Quality</h3>
                        </div>
                        <ul>
                            <li>
                                <div class="single-feature">
                                    <div class="icon">
                                        <img src="images/all-icon/f-1.png" alt="icon">
                                    </div>
                                    <div class="cont">
                                        <h4>Core Competence</h4>
                                        <p>Our omnibus knowledge and skill in the Training/Coaching of International exams like [TOEFL | PTE | IELTS | GRE | GMAT | ACT | SAT].</p>
                                    </div>
                                </div> <!-- single feature -->
                            </li>
                            <li>
                                <div class="single-feature">
                                    <div class="icon">
                                        <img src="images/all-icon/f-2.png" alt="icon">
                                    </div>
                                    <div class="cont">
                                        <h4>Alumni Support And Fees</h4>
                                        <p>Currently in Nigeria, our fees for (Exam registration, training, and other related services) are the most affordable..</p>
                                    </div>
                                </div> <!-- single feature -->
                            </li>
                            <li>
                                <div class="single-feature">
                                    <div class="icon">
                                        <img src="images/all-icon/f-3.png" alt="icon">
                                    </div>
                                    <div class="cont">
                                        <h4>Quality Training</h4>
                                        <p>Our academic department is committed to high quality training and result oriented coaching.</p>
                                    </div>
                                </div> <!-- single feature -->
                            </li>
                        </ul>
                    </div> <!-- feature -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
        <div class="feature-bg"></div> <!-- feature bg -->
    </section>

    <!--====== VIDEO FEATURE PART ENDS ======-->


    <!--====== PUBLICATION PART START ======-->

    <section id="publication-part" class="pt-115 pb-120 gray-bg">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-6 col-md-8 col-sm-7">
                    <div class="section-title pb-60">
                        <h5>Publications</h5>
                        <h2>From Store </h2>
                    </div> <!-- section title -->
                </div>
                <div class="col-lg-6 col-md-4 col-sm-5">
                    <div class="products-btn text-right pb-60">
                        <a href="{{route('product.shop')}}" class="main-btn">All Book</a>
                    </div> <!-- products btn -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                @foreach($products as $product)
                    <div class="col-lg-3 col-md-6 col-sm-8">
                        <div class="single-publication mt-30 text-center">
                            <div class="image">
                                <img src="{{$product->image}}" alt="Publication">
                                <div class="add-cart">

                                </div>
                            </div>
                            <div class="content pt-10">
                                <h5 class="book-title"><a href="#">{{$product->name}} </a></h5>

                                <div class="price-btn d-flex align-items-center justify-content-between">
                                    <div class="price pt-20">
                                        <span class="discount-price">NGN{{number_format($product->price + 1000)}}</span>
                                        <span class="normal-price">NGN{{number_format($product->price )}}</span>
                                    </div>
                                    <div class="button pt-10">
                                        <a href="{{route('product.single',['slug'=>$product->slug])}}" class="main-btn"><i class="fa fa-cart-plus"></i> Buy Now</a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- single publication -->
                    </div>
                @endforeach
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== PUBLICATION PART ENDS ======-->

    <!--====== TESTIMONIAL PART START ======-->

    <section id="testimonial" class="bg_cover pt-115 pb-115" data-overlay="8" style="background-image: url(images/bg-2.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title pb-40">
                        <h5>Testimonial</h5>
                        <h2>What they say</h2>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row testimonial-slide mt-40">
                <div class="col-lg-6">
                    <div class="single-testimonial">
                        <div class="testimonial-thum">
                            {{--<img src="images/pp.png" alt="Testimonial">--}}
                            <div class="quote">
                                <i class="fa fa-quote-right"></i>
                            </div>
                        </div>
                        <div class="testimonial-cont">
                            <p>It was a long and complicated process but thank God i stumbled upon the Rieltutors website. </p>
                            <h6>Odiso Edim</h6>
                            <span>Bsc, IT and BIS</span>
                        </div>
                    </div> <!-- single testimonial -->
                </div>
                <div class="col-lg-6">
                    <div class="single-testimonial">
                        <div class="testimonial-thum">
                            {{--<img src="images/pp.jpg" alt="Testimonial">--}}
                            <div class="quote">
                                <i class="fa fa-quote-right"></i>
                            </div>
                        </div>
                        <div class="testimonial-cont">
                            <p>I titled this testimonial "IMPOSSIBLE IS NOTHING" mainly because I had a few setbacks that made the prospects of securing the F1 Visa look bleak. </p>
                            <h6>Redeem Onema</h6>
                            <span>Bsc, Micro BioChemistry</span>
                        </div>
                    </div> <!-- single testimonial -->
                </div>
                <div class="col-lg-6">
                    <div class="single-testimonial">
                        <div class="testimonial-thum">
                            {{--<img src="images/pp.jpg" alt="Testimonial">--}}
                            <div class="quote">
                                <i class="fa fa-quote-right"></i>
                            </div>
                        </div>
                        <div class="testimonial-cont">
                            <p>I was searching for agencies that could help me in processing my results on SAT and TOEFL to a school in the U.S. </p>
                            <h6>Kelvin Itakpo</h6>
                            <span>Msc, Public Administration</span>
                        </div>
                    </div> <!-- single testimonial -->
                </div>
            </div> <!-- testimonial slide -->
        </div> <!-- container -->
    </section>

    <!--====== TEASTIMONIAL PART ENDS ======-->
    <!--====== TEACHERS PART START ======-->

    {{--<section id="teachers-page" class="pt-90 pb-120 gray-bg">--}}
        {{--<div class="container">--}}
            {{--<div class="row align-items-end">--}}
                {{--<div class="col-lg-6 col-md-8 col-sm-7">--}}
                    {{--<div class="section-title pb-60">--}}
                        {{--<h5>Our Workers</h5>--}}
                        {{--<h2>Our Staff </h2>--}}
                    {{--</div> <!-- section title -->--}}
                {{--</div>--}}

            {{--</div> <!-- row -->--}}
            {{--<div class="row justify-content-center">--}}
                {{--<div class="col-lg-3 col-md-6 col-sm-8">--}}
                    {{--<div class="single-teacher-2 text-center mt-30">--}}
                        {{--<div class="teacher-image">--}}
                            {{--<img src="images/pp.png" alt="Teacher">--}}
                            {{--<div class="teacher-social " style="background-image: url(images/teachers/teacher-3/hover.png)">--}}
                                {{--<ul>--}}
                                    {{--<li><a href="#"><i class="fa fa-facebook-f"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-twitter"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-google-plus"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-linkedin"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-instagram"></i></a></li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="teacher-content">--}}
                            {{--<h6 class="teacher-title"><a href="#">Odiso Edim</a></h6>--}}
                            {{--<span>Vice Chancellor</span>--}}
                        {{--</div>--}}
                    {{--</div> <!-- single teacher 2 -->--}}
                {{--</div>--}}
                {{--<div class="col-lg-3 col-md-6 col-sm-8">--}}
                    {{--<div class="single-teacher-2 text-center mt-30">--}}
                        {{--<div class="teacher-image">--}}
                            {{--<img src="images/pp.png" alt="Teacher">--}}
                            {{--<div class="teacher-social " style="background-image: url(images/teachers/teacher-3/hover.png)">--}}
                                {{--<ul>--}}
                                    {{--<li><a href="#"><i class="fa fa-facebook-f"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-twitter"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-google-plus"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-linkedin"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-instagram"></i></a></li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="teacher-content">--}}
                            {{--<h6 class="teacher-title"><a href="#">Odiso Edim</a></h6>--}}
                            {{--<span>Vice Chancellor</span>--}}
                        {{--</div>--}}
                    {{--</div> <!-- single teacher 2 -->--}}
                {{--</div>--}}
                {{--<div class="col-lg-3 col-md-6 col-sm-8">--}}
                    {{--<div class="single-teacher-2 text-center mt-30">--}}
                        {{--<div class="teacher-image">--}}
                            {{--<img src="images/pp.png" alt="Teacher">--}}
                            {{--<div class="teacher-social " style="background-image: url(images/teachers/teacher-3/hover.png)">--}}
                                {{--<ul>--}}
                                    {{--<li><a href="#"><i class="fa fa-facebook-f"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-twitter"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-google-plus"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-linkedin"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-instagram"></i></a></li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="teacher-content">--}}
                            {{--<h6 class="teacher-title"><a href="#">Odiso Edim</a></h6>--}}
                            {{--<span>Vice Chancellor</span>--}}
                        {{--</div>--}}
                    {{--</div> <!-- single teacher 2 -->--}}
                {{--</div>--}}
                {{--<div class="col-lg-3 col-md-6 col-sm-8">--}}
                    {{--<div class="single-teacher-2 text-center mt-30">--}}
                        {{--<div class="teacher-image">--}}
                            {{--<img src="images/pp.png" alt="Teacher">--}}
                            {{--<div class="teacher-social " style="background-image: url(images/teachers/teacher-3/hover.png)">--}}
                                {{--<ul>--}}
                                    {{--<li><a href="#"><i class="fa fa-facebook-f"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-twitter"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-google-plus"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-linkedin"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-instagram"></i></a></li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="teacher-content">--}}
                            {{--<h6 class="teacher-title"><a href="#">Odiso Edim</a></h6>--}}
                            {{--<span>Vice Chancellor</span>--}}
                        {{--</div>--}}
                    {{--</div> <!-- single teacher 2 -->--}}
                {{--</div>--}}
                {{--<div class="col-lg-3 col-md-6 col-sm-8">--}}
                    {{--<div class="single-teacher-2 text-center mt-30">--}}
                        {{--<div class="teacher-image">--}}
                            {{--<img src="images/pp.png" alt="Teacher">--}}
                            {{--<div class="teacher-social " style="background-image: url(images/teachers/teacher-3/hover.png)">--}}
                                {{--<ul>--}}
                                    {{--<li><a href="#"><i class="fa fa-facebook-f"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-twitter"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-google-plus"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-linkedin"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-instagram"></i></a></li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="teacher-content">--}}
                            {{--<h6 class="teacher-title"><a href="#">Odiso Edim</a></h6>--}}
                            {{--<span>Vice Chancellor</span>--}}
                        {{--</div>--}}
                    {{--</div> <!-- single teacher 2 -->--}}
                {{--</div>--}}
                {{--<div class="col-lg-3 col-md-6 col-sm-8">--}}
                    {{--<div class="single-teacher-2 text-center mt-30">--}}
                        {{--<div class="teacher-image">--}}
                            {{--<img src="images/pp.png" alt="Teacher">--}}
                            {{--<div class="teacher-social " style="background-image: url(images/teachers/teacher-3/hover.png)">--}}
                                {{--<ul>--}}
                                    {{--<li><a href="#"><i class="fa fa-facebook-f"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-twitter"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-google-plus"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-linkedin"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-instagram"></i></a></li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="teacher-content">--}}
                            {{--<h6 class="teacher-title"><a href="#">Odiso Edim</a></h6>--}}
                            {{--<span>Vice Chancellor</span>--}}
                        {{--</div>--}}
                    {{--</div> <!-- single teacher 2 -->--}}
                {{--</div>--}}
                {{--<div class="col-lg-3 col-md-6 col-sm-8">--}}
                    {{--<div class="single-teacher-2 text-center mt-30">--}}
                        {{--<div class="teacher-image">--}}
                            {{--<img src="images/pp.png" alt="Teacher">--}}
                            {{--<div class="teacher-social " style="background-image: url(images/teachers/teacher-3/hover.png)">--}}
                                {{--<ul>--}}
                                    {{--<li><a href="#"><i class="fa fa-facebook-f"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-twitter"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-google-plus"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-linkedin"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-instagram"></i></a></li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="teacher-content">--}}
                            {{--<h6 class="teacher-title"><a href="#">Odiso Edim</a></h6>--}}
                            {{--<span>Vice Chancellor</span>--}}
                        {{--</div>--}}
                    {{--</div> <!-- single teacher 2 -->--}}
                {{--</div>--}}
                {{--<div class="col-lg-3 col-md-6 col-sm-8">--}}
                    {{--<div class="single-teacher-2 text-center mt-30">--}}
                        {{--<div class="teacher-image">--}}
                            {{--<img src="images/pp.png" alt="Teacher">--}}
                            {{--<div class="teacher-social " style="background-image: url(images/teachers/teacher-3/hover.png)">--}}
                                {{--<ul>--}}
                                    {{--<li><a href="#"><i class="fa fa-facebook-f"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-twitter"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-google-plus"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-linkedin"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-instagram"></i></a></li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="teacher-content">--}}
                            {{--<h6 class="teacher-title"><a href="#">Odiso Edim</a></h6>--}}
                            {{--<span>Vice Chancellor</span>--}}
                        {{--</div>--}}
                    {{--</div> <!-- single teacher 2 -->--}}
                {{--</div>--}}
            {{--</div> <!-- row -->--}}

        {{--</div> <!-- container -->--}}
    {{--</section>--}}

    <!--====== TEACHERS PART ENDS ======-->

@endsection
<!--====== SEARCH BOX PART START ======-->
