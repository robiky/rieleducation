@extends('layout.app')

@section('content')
    <!--====== PAGE BANNER PART START ======-->

    <section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url(images/page-banner-1.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>{{$events->title}}</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{$events->title}}</li>
                            </ol>
                        </nav>
                    </div> <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== PAGE BANNER PART ENDS ======-->

    <!--====== EVENTS PART START ======-->

    <section id="event-single" class="pt-120 pb-120 gray-bg">
        <div class="container">
            <div class="events-area">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="events-left">
                            <h3>{{$events->title}}</h3>
                            {{--<a href="#"><span><i class="fa fa-calendar"></i>{{$events->created_at->diffForHumans()}}</span></a>--}}
                            {{--<a href="#"><span><i class="fa fa-clock-o"></i> {{$events->time}}</span></a>--}}
                            {{--<a href="#"><span><i class="fa fa-map-marker"></i> {{$events->location}}</span></a>--}}
                            <img src="{{$events->featured}}" alt="Event image">
                            <p>{{$events->contents}}</p>
                        </div> <!-- events left -->
                    </div>

                </div> <!-- row -->
            </div> <!-- events-area -->
        </div> <!-- container -->
    </section>

    <!--====== EVENTS PART ENDS ======-->

    @endsection
