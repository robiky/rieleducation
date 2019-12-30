@extends('layout.app')

@section('content')


    <!--====== PAGE BANNER PART START ======-->

    <section id="page-banner" class="pt-105 pb-130 bg_cover" data-overlay="8" style="background-image: url(images/page-banner-1.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>Timetable</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Timetable</li>
                            </ol>
                        </nav>
                    </div> <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== PAGE BANNER PART ENDS ======-->
    <div class="container mt-15">
        <div class="row">

            <div class="postcontent nobottommargin clearfix">

                <h3 align="center">TOEFL TEST DATES AND LOCATIONS </h3>
                <div class="divider divider-short divider-center"><i class="icon-crop"></i></div>

                <div class="dropdown">


                </div>


       <?php

                 $toefl = ' <td>    <a style="color:white;" href="exam/toefl" class="btn btn-success ">Click To Register TOEFL
       </a></td>';
?>
                <h4>TOEFL TEST LOCATIONS: Abuja FCT | Asaba | Enugu | Jos | Lagos  | Ibadan | Owerri | Port Harcourt </h4>
                <BR>
                <div class="table-responsive">
                    <table class="table table-striped thead-dark">
                        <tbody>
                        <thead class="thead-dark">
                        <tr>

                            <th>EXAMINATION DATES</th>
                            <th >STATUS</th>
                            <th>REGISTRATION LINK</th>

                        </tr>
                        </thead>
                        <tr>
                            <td>July 27th, 2019</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $toefl; ?>
                        </tr>
                        <tr>
                            <td>August 3rd, 2019</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $toefl; ?> </tr>
                        <tr>
                            <td>August 10th, 2019</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $toefl; ?></tr>
                        <tr>
                            <td>August 24th, 2019</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $toefl; ?> </tr>
                        <tr>
                            <td>September 1st, 2019</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $toefl; ?>  </tr>
                        <tr>
                            <td>September 7th, 2019</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $toefl; ?> </tr>
                        <tr>
                            <td>September 21st, 2019</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $toefl; ?> </tr>
                        <tr>
                            <td>October 4th, 2019</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $toefl; ?> </tr>
                        <tr>
                            <td>October 12th, 2019</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $toefl; ?> </tr>
                        <tr>
                            <td>October 19th, 2019</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $toefl; ?>  </tr>
                        <tr>
                            <td>October 26th, 2019</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $toefl; ?> </tr>
                        <tr>
                            <td>November 2nd, 2019</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $toefl; ?>  </tr>
                        <tr>
                            <td>November 9th, 2019</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $toefl; ?>  </tr>
                        <tr>
                            <td>November 22nd, 2019</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $toefl; ?> </tr>
                        <tr>
                            <td>November 23rd, 2019</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $toefl; ?> </tr>
                        </tbody>
                    </table>
                </div>

                <?php

                $sat = ' <td>    <a style="color:white;" href="exam/sat" class="btn btn-success ">Click To Register SAT
       </a></td>';
                ?>
                <br>
                <h3 align="center">SAT TEST DATES AND LOCATIONS </h3><H3>
                <br>






                </h3><h4>SAT TEST LOCATIONS: Abuja FCT | Asaba | Enugu | Jos | Lagos | Owerri | Port Harcourt | Kaduna | Benin | Kwara | Ibadan | Osun </h4>
                <br>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tbody>
                        <thead class="thead-dark">
                        <tr>
                            <th>EXAMINATIONS DATES</th>
                            <th>REGISTRATION DEADLINE</th>
                            <th >STATUS</th>
                            <th>REGISTRATION LINK</th>
                        </tr>
                        </thead>
                        <tr>
                            <td>October 5th, 2019</td>
                            <td>August 23rd, 2019</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $sat; ?> </tr>
                        <tr>
                            <td>December 7th, 2019</td>
                            <td>October 25th, 2019</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $sat; ?> </tr>
                        <tr>
                            <td>March 14th, 2020</td>
                            <td>January 31st, 2020</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $sat; ?> </tr>
                        <tr>
                            <td>May 2nd, 2020</td>
                            <td>March 20th, 2020</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $sat; ?> </tr>
                        </tbody> </table>
                </div>


                <br>
                <?php

                $gre = ' <td>    <a style="color:white;" href="exam/pte" class="btn btn-success ">Click To Register GRE
       </a></td>';
                ?>
                <h3 align="center">PTE TEST DATES AND LOCATIONS </h3>
                <div class="divider divider-short divider-center"><i class="icon-crop"></i></div>


                <h4>PTE TEST LOCATIONS: Abuja FCT | Lagos | Port Harcourt | Owerri | Ibadan|  Kaduna</h4>



                <h5>PTE is written every day of the week (Mondays - Fridays) excluding Weekends (Saturdays and Sundays). <br> (Dates are available on the Registration Portal) </h5>

                <h5><a>NOTE: Registration should be done at least two weeks before your chosen Examination date..</a></h5>
                <br>
                <td>    <a style="color:white;" href="exam/pte" class="btn btn-success ">Click To Register PTE
                    </a></td>


                <br>
                <h3 align="center">GRE TEST DATES AND LOCATIONS </h3>





                <h4>GRE TEST LOCATIONS: Abuja FCT | Lagos | Port Harcourt | Owerri </h4>
                <BR>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tbody>
                        <thead class="thead-dark">
                        <tr>
                            <th>EXAMINATIONS DATES</th>
                            <th>LOCATION</th>
                            <th>STATUS</th>
                            <th>REGISTRATION LINK</th>
                        </tr>
                        </thead>
                        <tr>
                            <td>July 14th, 2019</td>
                            <td>Abuja FCT</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $gre; ?> </tr>
                        <tr>
                            <td>August 1st, 2019</td>
                            <td>Abuja FCT</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $gre; ?> </tr>
                        <tr>
                            <td>August 2nd, 2019</td>
                            <td>Abuja FCT</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $gre; ?> </tr>
                        <tr>
                            <td>August 11th, 2019</td>
                            <td>Abuja FCT</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $gre; ?> </tr>
                        <tr>
                            <td>September 6th, 2019</td>
                            <td>Abuja FCT</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $gre; ?> </tr>
                        <tr>
                            <td>September 13th, 2019</td>
                            <td>Abuja FCT</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $gre; ?> </tr>
                        <tr>
                            <td>October 2nd, 2019</td>
                            <td>Abuja FCT</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $gre; ?> </tr>
                        <tr>
                            <td>October 5th, 2019</td>
                            <td>Abuja FCT</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $gre; ?> </tr>
                        <tr>
                            <td>October 8th, 2019</td>
                            <td>Abuja FCT</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $gre; ?> </tr>
                        <tr>
                            <td>October 10th, 2019</td>
                            <td>Abuja FCT</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $gre; ?> </tr>

                        <tr>
                            <td></td>
                            <td></td>
                            <td >
                            </td><td></td>
                        </tr>

                        <tr>
                            <td>July 15th, 2019</td>
                            <td>Lagos</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $gre; ?> </tr>
                        <tr>
                            <td>July 16th, 2019</td>
                            <td>Lagos</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $gre; ?> </tr>
                        <tr>
                            <td>July 17th, 2019</td>
                            <td>Lagos</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $gre; ?> </tr>
                        <tr>
                            <td>July 18th, 2019</td>
                            <td>Lagos</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $gre; ?> </tr>
                        <tr>
                            <td>July 19th, 2019</td>
                            <td>Lagos</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $gre; ?> </tr>
                        <tr>
                            <td>July 22nd, 2019</td>
                            <td>Lagos</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $gre; ?> </tr>
                        <tr>
                            <td>July 23rd, 2019</td>
                            <td>Lagos</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $gre; ?> </tr>
                        <tr>
                            <td>July 24th, 2019</td>
                            <td>Lagos</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $gre; ?> </tr>
                        <tr>
                            <td>July 25th, 2019</td>
                            <td>Lagos</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $gre; ?> </tr>
                        <tr>
                            <td>July 26th, 2019</td>
                            <td>Lagos</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $gre; ?> </tr>
                        <tr>
                            <td>July 29th, 2019</td>
                            <td>Lagos</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $gre; ?> </tr>
                        <tr>
                            <td>July 30th 2019</td>
                            <td>Lagos</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $gre; ?> </tr>
                        <tr>
                            <td>July 31st, 2019</td>
                            <td>Lagos</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $gre; ?> </tr>
                        <tr>
                            <td>August 1st, 2019</td>
                            <td>Lagos</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $gre; ?> </tr>
                        <tr>
                            <td>August 2nd, 2019</td>
                            <td>Lagos</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $gre; ?> </tr>
                        <tr>
                            <td>August 5th, 2019</td>
                            <td>Lagos</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $gre; ?> </tr>
                        <tr>
                            <td>August 6th, 2019</td>
                            <td>Lagos</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $gre; ?> </tr>
                        <tr>
                            <td>August 7th, 2019</td>
                            <td>Lagos</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $gre; ?> </tr>
                        <tr>
                            <td>August 8th, 2019</td>
                            <td>Lagos</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $gre; ?> </tr>
                        <tr>
                            <td>August 9th, 2019</td>
                            <td>Lagos</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $gre; ?> </tr>
                        <tr>
                            <td>August 14th, 2019</td>
                            <td>Lagos</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $gre; ?> </tr>
                        <tr>
                            <td>August 15th, 2019</td>
                            <td>Lagos</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $gre; ?> </tr>
                        <tr>
                            <td>August 16th, 2019</td>
                            <td>Lagos</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $gre; ?> </tr>
                        <tr>
                            <td>August 20th, 2019</td>
                            <td>Lagos</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $gre; ?> </tr>
                        <tr>
                            <td>August 21st, 2019</td>
                            <td>Lagos</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $gre; ?> </tr>
                        <tr>
                            <td>August 22nd, 2019</td>
                            <td>Lagos</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $gre; ?> </tr>
                        <tr>
                            <td>August 23rd, 2019</td>
                            <td>Lagos</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $gre; ?> </tr>
                        <tr>
                            <td>August 26th, 2019</td>
                            <td>Lagos</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $gre; ?> </tr>
                        <tr>
                            <td>August 27th, 2019</td>
                            <td>Lagos</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $gre; ?> </tr>
                        <tr>
                            <td>August 28th, 2019</td>
                            <td>Lagos</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $gre; ?> </tr>
                        <tr>
                            <td>August 29th, 2019</td>
                            <td>Lagos</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $gre; ?> </tr>
                        <tr>
                            <td>August 30th, 2019</td>
                            <td>Lagos</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $gre; ?> </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td >
                            </td><td></td>
                        </tr>
                        <tr>
                            <td>August 1st, 2019 </td>
                            <td>Port Harcourt</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $gre; ?> </tr>
                        <tr>
                            <td>August 22nd, 2019 </td>
                            <td>Port Harcourt</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $gre; ?> </tr>
                        <tr>
                            <td>September 25th, 2019 </td>
                            <td>Port Harcourt</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $gre; ?> </tr>


                        <tr>
                            <td></td>
                            <td></td>
                            <td >
                            </td><td></td>
                        </tr>
                        <tr>
                            <td>August 1st, 2019</td>
                            <td>Owerri</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $gre; ?> </tr>
                        <tr>
                            <td>September 5th, 2019</td>
                            <td>Owerri</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $gre; ?> </tr>
                        </tbody></table>
                </div>


                <h5>GRE SUBJECT TEST LOCATIONS: Lagos | Aba | Benin City </h5>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tbody>
                        <thead class="thead-dark"><tr>
                            <th>Examination Dates</th>
                            <th bgcolor="#dddddd">Status</th>
                            <th>Registration Link</th>
                        </tr>
                        </thead>
                        <tr>
                            <td></td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $gre; ?> </tr>
                        </tbody></table>
                </div>


                <br>
                <h3 align="center">IELTS TEST DATES AND LOCATIONS </h3>
<?php
                $ielts = ' <td>    <a style="color:white;" href="exam/ielts" class="btn btn-success ">Click To Register IELTS
                    </a></td>';
                ?>

                <h4>IELTS TEST LOCATIONS: Abeokuta | Abuja FCT | Lagos | Port Harcourt | Enugu | Ibadan | Benin </h4>
                <BR>

                <div class="table-responsive">
                    <table class="table table-striped">
                        <tbody>
                        <thead class="thead-dark">
                        <tr>
                            <th>EXAMINATIONS DATES</th>
                            <th>LOCATION</th>
                            <th >STATUS</th>
                            <th>REGISTRATION LINK</th>
                        </tr>
                        </thead>
                        <tr>
                            <td>August 17th, 2019</td>
                            <td>Abeokuta</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $ielts; ?> </tr>
                        <tr>
                            <td>September 28th, 2019</td>
                            <td>Abeokuta</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $ielts; ?> </tr>
                        <tr>
                            <td>October 26th, 2019</td>
                            <td>Abeokuta</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $ielts; ?> </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td >
                            </td><td></td>
                        </tr>

                        <tr>
                            <td>July 27th, 2019</td>
                            <td>Abuja FCT</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $ielts; ?> </tr>
                        <tr>
                            <td>August 1st, 2019</td>
                            <td>Abuja FCT</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $ielts; ?> </tr>
                        <tr>
                            <td>August 17th, 2019</td>
                            <td>Abuja FCT</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $ielts; ?> </tr>
                        <tr>
                            <td>August 24th, 2019</td>
                            <td>Abuja FCT</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $ielts; ?> </tr>
                        <tr>
                            <td>September 7th, 2019</td>
                            <td>Abuja FCT</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $ielts; ?> </tr>
                        <tr>
                            <td>September 14th, 2019</td>
                            <td>Abuja FCT</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $ielts; ?> </tr>
                        <tr>
                            <td>September 28th, 2019</td>
                            <td>Abuja FCT</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $ielts; ?> </tr>
                        <tr>
                            <td>October 12th, 2019</td>
                            <td>Abuja FCT</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $ielts; ?> </tr>
                        <tr>
                            <td>October 19th, 2019</td>
                            <td>Abuja FCT</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $ielts; ?> </tr>
                        <tr>
                            <td>October 26th, 2019</td>
                            <td>Abuja FCT</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $ielts; ?> </tr>

                        <tr>
                            <td></td>
                            <td></td>
                            <td >
                            </td><td></td>
                        </tr>

                        <tr>
                            <td>July 27th, 2019</td>
                            <td>Lagos</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $ielts; ?> </tr>
                        <tr>
                            <td>August 1st, 2019</td>
                            <td>Lagos</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $ielts; ?> </tr>
                        <tr>
                            <td>August 1st, 2019</td>
                            <td>Lagos</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $ielts; ?> </tr>
                        <tr>
                            <td>August 17th, 2019</td>
                            <td>Lagos</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $ielts; ?> </tr>
                        <tr>
                            <td>August 24th, 2019</td>
                            <td>Lagos</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $ielts; ?> </tr>
                        <tr>
                            <td>September 7th, 2019</td>
                            <td>Lagos</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $ielts; ?> </tr>
                        <tr>
                            <td>September 14th, 2019</td>
                            <td>Lagos</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $ielts; ?> </tr>
                        <tr>
                            <td>September 28th, 2019</td>
                            <td>Lagos</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $ielts; ?> </tr>
                        <tr>
                            <td>October 12th, 2019</td>
                            <td>Lagos</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $ielts; ?> </tr>
                        <tr>
                            <td>October 19th, 2019</td>
                            <td>Lagos</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $ielts; ?> </tr>
                        <tr>
                            <td>October 26th, 2019</td>
                            <td>Lagos</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $ielts; ?> </tr>

                        <tr>
                            <td></td>
                            <td></td>
                            <td>
                            </td><td></td>
                        </tr>

                        <tr>
                            <td>July 27th, 2019</td>
                            <td>Ibadan</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $ielts; ?> </tr>
                        <tr>
                            <td>August 1st, 2019</td>
                            <td>Ibadan</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $ielts; ?> </tr>
                        <tr>
                            <td>August 17th, 2019</td>
                            <td>Ibadan</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $ielts; ?> </tr>
                        <tr>
                            <td>September 7th, 2019</td>
                            <td>Ibadan</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $ielts; ?> </tr>
                        <tr>
                            <td>September 28th, 2019</td>
                            <td>Ibadan</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $ielts; ?> </tr>
                        <tr>
                            <td>October 12th, 2019</td>
                            <td>Ibadan</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $ielts; ?> </tr>
                        <tr>
                            <td>October 26th, 2019</td>
                            <td>Ibadan</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $ielts; ?> </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>
                            </td><td></td>
                        </tr>

                        <tr>
                            <td>July 27th, 2019</td>
                            <td>Benin and Enugu</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $ielts; ?> </tr>
                        <tr>
                            <td>August 1st, 2019</td>
                            <td>Benin and Enugu</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $ielts; ?> </tr>
                        <tr>
                            <td>August 17th, 2019</td>
                            <td>Benin and Enugu</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $ielts; ?> </tr>
                        <tr>
                            <td>September 7th, 2019</td>
                            <td>Benin and Enugu</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $ielts; ?> </tr>
                        <tr>
                            <td>September 28th, 2019</td>
                            <td>Benin and Enugu</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $ielts; ?> </tr>
                        <tr>
                            <td>October 12th, 2019</td>
                            <td>Benin and Enugu</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $ielts; ?> </tr>
                        <tr>
                            <td>October 26th, 2019</td>
                            <td>Benin and Enugu</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $ielts; ?> </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td <="" td="">
                            </td><td></td>
                        </tr>

                        <tr>
                            <td>July 27th, 2019</td>
                            <td>Port Harcourt</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $ielts; ?> </tr>
                        <tr>
                            <td>August 1st, 2019</td>
                            <td>Port Harcourt</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $ielts; ?> </tr>
                        <tr>
                            <td>August 17th, 2019</td>
                            <td>Port Harcourt</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $ielts; ?> </tr>
                        <tr>
                            <td>September 7th, 2019</td>
                            <td>Port Harcourt</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $ielts; ?> </tr>
                        <tr>
                            <td>September 28th, 2019</td>
                            <td>Port Harcourt</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $ielts; ?> </tr>
                        <tr>
                            <td>October 12th, 2019</td>
                            <td>Port Harcourt</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $ielts; ?> </tr>
                        <tr>
                            <td>October 26th, 2019</td>
                            <td>Port Harcourt</td>
                            <td style="color: green;" >ACTIVE</td>
                            <?php echo $ielts; ?> </tr>
                        </tbody></table>
                </div>


                <br>
                <h3 align="center">GMAT TEST DATES AND LOCATIONS </h3>



                <h4>GMAT TEST LOCATIONS: Abuja FCT | Lagos  </h4>
<br>


                <h5>Abuja FCT :</h5> <p></p>Tuesdays and Thursdays of every week. (Dates are available on the Registration Portal) <p></p> <h5>Lagos:</h5><p></p>  Mondays, Thursdays and Fridays of every week.  (Dates are available on the Registration Portal)<p></p>
                <td>    <a style="color:white;" href="exam/gmat" class="btn btn-success ">Click To Register GMAT
                    </a></td>
                <br>

            </div>

        </div>
    </div>
    <br>
    <br>
    @endsection