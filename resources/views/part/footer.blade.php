
    <!--====== FOOTER PART START ======-->

    <footer id="footer-part">
        <div class="footer-top pt-40 pb-70 text-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-about mt-40">
                            <div class="logo text-center">
                                <a href="#"><img src="{{asset('images/riellogo2.png')}}" alt="Logo"></a>
                            </div>
                            <p>Gravida nibh vel velit auctor aliquetn quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate.</p>
                            <ul class="mt-20 text-center">
                                <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div> <!-- footer about -->
                    </div>

                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer top -->

        <div class="footer-copyright pt-10 pb-25">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="copyright text-md-left text-center pt-15">
                            <p>&copy; Copyrights 2019 Rieltutor All rights reserved. </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="copyright text-md-right text-center pt-15">
                            <p>Designed by <span>odim tech</span> </p>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer copyright -->
    </footer>

    <!--====== FOOTER PART ENDS ======-->


    <script src="{{asset('js/vendor/modernizr-3.6.0.min.js')}}"></script>
    <script src="{{asset('js/vendor/jquery-1.12.4.min.js')}}"></script>

    <!--====== Bootstrap js ======-->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>

    <!--====== Slick js ======-->
    <script src="{{asset('js/slick.min.js')}}"></script>

    <!--====== Magnific Popup js ======-->
    <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>

    <!--====== Counter Up js ======-->
    <script src="{{asset('js/waypoints.min.js')}}"></script>
    <script src="{{asset('js/jquery.counterup.min.js')}}"></script>

    <!--====== Nice Select js ======-->
    <script src="{{asset('js/jquery.nice-select.min.js')}}"></script>

    <!--====== Nice Number js ======-->
    <script src="{{asset('js/jquery.nice-number.min.js')}}"></script>

    <!--====== Count Down js ======-->
    <script src="{{asset('js/jquery.countdown.min.js')}}"></script>

    <!--====== Validator js ======-->
    <script src="{{asset('js/validator.min.js')}}"></script>

    <!--====== Ajax Contacts js ======-->
    <script src="{{asset('js/ajax-contact.js')}}"></script>



    <!--====== Main js ======-->
    <script src="{{asset('js/main.js')}}"></script>

    <!--====== Map js ======-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDC3Ip9iVC0nIxC6V14CKLQ1HZNF_65qEQ"></script>
    <script src="{{asset('js/map-script.js')}}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <!--====== Main js ======-->
    <script src="{{asset('js/form.js')}}"></script>
    <script src="{{asset('js/toaster.js')}}"></script>

    <script>
        @if(Session::has('success'))

        toastr.success('{{Session::get('success')}}');

             @endif

    </script>
<!--====== BACK TO TP PART START ======-->
    <style>

        #odiso {
            background-color: #fff;
            box-shadow: 0 0 15px 0 rgba(0,0,0, .1);
            padding: 10px;
            position: fixed;
            bottom: -110px;
            left: 15px;
            min-height: 80px;
            min-width: 330px;
            max-width: 90%;
            z-index: 9999;
            display: flex;
            align-content: center;
            align-items: center;
            -webkit-transition: all 400ms;
            transition: all 400ms;
        }
        #odiso.is-visible {
            bottom: 15px;
            left: 15px;
        }

        .odiso-product-thumb-container {
            width: 85px;
            padding-right: 5px;
        }

        #odiso .odiso-product-thumb {
            width: 100%;
            height: 100px;
        }
        #odiso .odiso-content-wrapper {
            color: #4d4d4d;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-content: center;
            padding: 8px;
        }

        .odiso-content-wrapper p {
            margin: 0;
        }

        #odiso .odiso-content-wrapper,
        #odiso .odiso-content-wrapper .odiso-buyer-name {
            font-size: 1.0em;
        }
        .odiso-buyer-name {
            font-weight: bolder;
            line-height: 2;

        }
        #odiso .odiso-content-wrapper .odiso-product-name {
            font-weight: bolder;
            text-decoration: none;
            color: #262625;
            line-height: 2;
            font-size: 1.1em;
        }
        #odiso .odiso-content-wrapper .time {
            font-size: .8em;
        }


    </style>
   <div id="odiso">
       <div class="odiso-product-thumb-container"></div>
       <div class="odiso-content-wrapper"><p><span class="odiso-buyer-name"></span> <span> </span> </p><a href="http://localhost.com/sat-test-registration-in-nigeria/" target="_blank" class="odiso-product-name"></a><div class="time">
               <p style="font-size: medium" class="odiso-secondary-text"></p>
           </div></div>
       </div>
<a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

<!--====== BACK TO TP PART ENDS ======-->

</body>

    @toastr_render

</html>
