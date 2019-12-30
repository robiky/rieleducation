@extends('layout.app')


@section('content')

    <!--====== SEARCH BOX PART ENDS ======-->

    <!--====== PAGE BANNER PART START ======-->

    <section id="page-banner" class="pt-105 pb-130 bg_cover" data-overlay="8" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>Contact</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact</li>
                            </ol>
                        </nav>
                    </div>  <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== PAGE BANNER PART ENDS ======-->

    <!--====== CONTACT PART START ======-->

    <section id="contact-page" class="pt-90 pb-120 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="contact-from">
                        <div class="section-title">
                            <h5>Contact Us</h5>
                            <h2>Keep in touch</h2>
                        </div> <!-- section title -->
                        <div class="main-form pt-45">
                            <form action="{{route('contact.store')}}" method="post" data-toggle="validator">

                                {{csrf_field()}}

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="single-form form-group">
                                            <input name="name" type="text" placeholder="Your name" data-error="Name is required." required="required">
                                            <div class="help-block with-errors"></div>
                                        </div> <!-- single form -->
                                    </div>


                                    <div class="col-md-6">
                                        <div class="single-form form-group">
                                            <input name="email" type="email" placeholder="Email" data-error="Valid email is required." required="required">
                                            <div class="help-block with-errors"></div>
                                        </div> <!-- single form -->
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single-form form-group">
                                            <input name="subject" type="text" placeholder="Subject" data-error="Subject is required." required="required">
                                            <div class="help-block with-errors"></div>
                                        </div> <!-- single form -->
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single-form form-group">
                                            <input name="number" type="text" placeholder="Phone" data-error="Phone is required." required="required">
                                            <div class="help-block with-errors"></div>
                                        </div> <!-- single form -->
                                    </div>
                                    <div class="col-md-12">
                                        <div class="single-form form-group">
                                            <textarea name="message" placeholder="Message" data-error="Please,leave us a message." required="required"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div> <!-- single form -->
                                    </div>
                                    <p class="form-message"></p>
                                    <div class="col-md-12">
                                        <div class="single-form">
                                            <button type="submit" >Send</button>
                                        </div> <!-- single form -->
                                    </div>
                                </div> <!-- row -->
                            </form>
                        </div> <!-- main form -->
                    </div> <!--  contact from -->
                </div>
                <div class="col-lg-4">
                    <div class="contact-address">
                        <div class="contact-heading">
                            <h5>Address</h5>
                            <p>If you have any further questions, please don’t hesitate to contact me.</p>
                        </div>
                        <ul>
                            <li>
                                <div class="single-address">
                                    <div class="icon">
                                        <i class="fa fa-home"></i>
                                    </div>
                                    <div class="cont">
                                        <p>No. 84 Goldie Street, Calabar South, CRS , Nigeria</p>
                                    </div>
                                </div> <!-- single address -->
                            </li>
                            <li>
                                <div class="single-address">
                                    <div class="icon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <div class="cont">
                                        <p>+234 803 774 9749 </p>
                                        <p>+234 807 708 4851 </p>
                                    </div>
                                </div> <!-- single address -->
                            </li>
                            <li>
                                <div class="single-address">
                                    <div class="icon">
                                        <i class="fa fa-envelope-o"></i>
                                    </div>
                                    <div class="cont">
                                        <p>info@rieltutors.com</p>
                                        <p>sales@rieltutors.com</p>
                                    </div>
                                </div> <!-- single address -->
                            </li>
                            <li>
                                <div class="single-address">
                                    <div class="icon">
                                        <i class="fa fa-globe"></i>
                                    </div>
                                    <div class="cont">
                                        <p>www.rieltutors.com</p>

                                    </div>
                                </div> <!-- single address -->
                            </li>
                        </ul>
                    </div> <!-- contact address -->

                </div>
            </div> <!-- row -->
        </div> <!-- container -->

    </section>
    <div class="map map-big">
        <div ><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3974.9301256089157!2d8.330022314020432!3d4.951277096405446!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x106786476bf467f1%3A0xa15e07f8ffc4fd65!2s84+Goldie+St%2C+Esin+Ufot+Efut%2C+Calabar!5e0!3m2!1sen!2sng!4v1565985609392!5m2!1sen!2sng" width="1585" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
    </div> <!-- map -->
    <!--====== CONTACT PART ENDS ======-->

@endsection