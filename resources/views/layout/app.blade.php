
<!doctype html>
<html lang="en">


<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>Rieltutor</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{URL::asset('images/favicon.png')}}" type="image/png">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="{{URL::asset('css/slick.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
    <!--====== Animate css ======-->
    <link rel="stylesheet" href="{{URL::asset('css/animate.css')}}">

    <!--====== Nice Select css ======-->
    <link rel="stylesheet" href="{{URL::asset('css/nice-select.css')}}">

    <!--====== Nice Number css ======-->
    <link rel="stylesheet" href="{{URL::asset('css/jquery.nice-number.min.css')}}">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="{{URL::asset('css/magnific-popup.css')}}">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}">
    <!--====== checkout css ======-->
    <link rel="stylesheet" href="{{URL::asset('css/checkout.css')}}">
    <!--====== Fontawesome css ======-->
    <link rel="stylesheet" href="{{URL::asset('css/font-awesome.min.css')}}">

    <!--====== Default css ======-->
    <link rel="stylesheet" href="{{URL::asset('css/default.css')}}">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}">
{{--<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>--}}
<!--====== Responsive css ======-->
    <link rel="stylesheet" href="{{URL::asset('css/responsive.css')}}">

    <!--====== form css ======-->
    <link rel="stylesheet" href="{{URL::asset('css/form.css')}}">


    <link rel="stylesheet" href="{{URL::asset('css/toaster.css')}}">



</head>
<script>


    // Loop the notification
    (function loop() {
        var rand = Math.round(Math.random() * 5000 ) + 8000;
        setTimeout(function() {
            changeNotification();
            loop();
        }, rand);
    }());

    // Change notification
    function changeNotification() {
        showNotification();
        setTimeout(function() {
            hideNotification();
        }, 5000) // duration
    }

    // Show notification
    function showNotification() {
        jQuery("#odiso").addClass("is-visible");
    }

    // Hide notification
    function hideNotification() {
        jQuery("#odiso").removeClass("is-visible");
        setTimeout(function() {
            //   getProduct();
        }, 500)
    }


</script>

<script type = "text/javascript" language = "javascript">

    var refInterval = window.setInterval('update()', 10000); // 30 seconds

    var update = function() {
        $.ajax({
            type : 'get',
            url : 'http://rieltutors.com/popup',
            // data: data,
            success : function(data){


                //    alert();

                $('.odiso-buyer-name').html(data.name+' From'+' '+data.city+ ' Registered ');

                $('.odiso-product-name').html(data.title);

                $('.odiso-secondary-text').html(data.date);
                $('.odiso-product-thumb-container').html('<img  src="http://rieltutors.com/images/course/'+data.image+'" class="odiso-product-thumb">');
            },
        });
    };
    update();

    //    setInterval(function(){
    //        var xmlhttp = new XMLHttpRequest();
    //        xmlhttp.onreadystatechange = function() {
    //            if (this.readyState == 4 && this.status == 200) {
    //                // document.getElementById("txtHint").innerHTML = this.responseText;
    //            }
    //        };
    //        xmlhttp.open("GET", "http://localhost/riel/public/test" , true);
    //        xmlhttp.send();
    //    },1000);  // run every 5 seconds
    //



</script>
<body>

<!--====== PRELOADER PART START ======-->

<div class="preloader">
    <div class="loader rubix-cube">
        <div class="layer layer-1"></div>
        <div class="layer layer-2"></div>
        <div class="layer layer-3 color-1"></div>
        <div class="layer layer-4"></div>
        <div class="layer layer-5 color-1"></div>
        <div class="layer layer-6"></div>
        <div class="layer layer-7 color-1"></div>
        <div class="layer layer-8"></div>
    </div>
</div>

<!--====== PRELOADER PART START ======-->

<!--====== HEADER PART START ======-->

<header id="header-part">
    <div class="header-top d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="header-contact">
                        <ul>
                            <li><i class="fa fa-envelope"></i><a href="#">info@rieltutor.com</a></li>
                            <li><i class="fa fa-phone"></i><span>+234-803-774-9749</span></li>
                        </ul>
                    </div> <!-- header contact -->
                </div>
                <div class="col-md-6">
                    <div class="header-right d-flex justify-content-end">
                        <div class="social d-flex">
                            <span class="follow-us">Follow Us :</span>
                            <ul>
                                <li><a href="{{route('inter.create')}}"><i class="fa fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div> <!-- social -->
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        {{--<div class="login-register">--}}
                        {{--<ul>--}}
                        {{--<li><a href="#">Login</a></li>--}}
                        {{--<li><a href="#">Register</a></li>--}}
                        {{--</ul>--}}
                        {{--</div>--}}
                    </div> <!-- header right -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- header top -->

    <div class="navigation">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="{{route('index')}}">
                            <img src="{{asset('images/riellogo.png')}}" alt="Logo">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="active" href="{{route('index')}}">Home</a>

                                </li>
                                <li class="nav-item">
                                    <a href="{{route('home.about')}}">Who we are</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#">Services</a>
                                    <ul class="sub-menu">
                                        <li><a href="/contact">Admission Processing</a></li>
                                        <li><a href="{{route('timetable.session')}}">Prep and Training Session</a></li>
                                        <li><a href="{{route('product.shop')}}">Book Store</a></li>
                                        <li><a href="#course-part">International Exam Registration</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#">Examinations</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{URL('/exam/toefl')}}">TOEFL</a></li>
                                        <li><a href="{{URL('/exam/gre')}}">GRE</a></li>
                                        <li><a href="{{URL('/exam/gmat')}}">GMAT</a></li>
                                        <li><a href="{{URL('/exam/sat')}}">SAT</a></li>
                                        <li><a href="{{URL('/exam/pte')}}">PTE</a></li>
                                        <li><a href="{{URL('/exam/ielts')}}">IELTS</a></li>
                                        <li><a href="{{route('timetable.exam')}}">Exams Dates And Timetable</a></li>

                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('home.contact')}}">Contact</a>

                                </li>

                                <li class="nav-item">
                                <li><a href="{{route('timetable.session')}}">Training Session</a></li>

                                </li>
                                <li class="nav-item">
                                    <a href="{{route('product.shop')}}">Book Store</a>

                                </li>
                            </ul>
                        </div>
                        {{--<div class="right-icon text-right">--}}
                        {{--<ul>--}}
                        {{--<li><a href="javascript:void(0)" id="search"><i class="fa fa-search"></i></a></li>--}}
                        {{--<li><a href="#"><i class="fa fa-shopping-bag"></i><span>0</span></a></li>--}}
                        {{--</ul>--}}
                        {{--</div> <!-- right icon -->--}}
                    </nav> <!-- nav -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div>
</header>

@yield('content')

@include('part.footer')