<!DOCTYPE html>
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<html>
<!--Head=====================-->
<?php include 'includes/head.php';?>
<!--/Head==-->
<body>

    <!--[if lte IE 8]>
        <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a>.</p>
    <![endif]-->
    
    <div class="layer"></div>
    <!-- Mobile menu overlay mask -->
    
    <div id="preloader">
        <div data-loader="circle-side"></div>
    </div><!-- End Preload -->
    
     <!-- Header ================================================== -->
    <?php include 'includes/nav.php';?>
    <!-- End Header =============================================== -->
    
	<!-- SubHeader =============================================== -->
    <div class="parallax-window" id="booking" data-parallax="scroll" data-image-src="../img/mosaic_1.jpg" data-natural-width="1400" data-natural-height="550">
        <div id="subheader_home">
            <div id="sub_content">
                <div id="book_container">
                    <form method="post" action="../assets/check_avail_home.php" id="check_avail_home" autocomplete="off">
                        <div id="group_1">
                            <div id="container_1">
                                <label>Arrival date</label>
                            	<input class="startDate1 form-control datepick" type="text" data-field="date" data-startend="start" data-startendelem=".endDate1" readonly placeholder="Arrival" id="check_in" name="check_in">
                                <span class="input-icon"><i class="icon-calendar-7"></i></span>
                            </div>
                            <div id="container_2">
                                <label>Departure date</label>
                                 <input class="endDate1 form-control datepick" type="text" data-field="date" data-startend="end" data-startendelem=".startDate1" readonly placeholder="Departure" id="check_out" name="check_out" >
                                <span class="input-icon"><i class="icon-calendar-7"></i></span>
                            </div>
                        </div><!-- End group_1 -->
                        <div id="group_2">
                            <div id="container_3">
                                <label>Adults</label>
                                <div class="qty-buttons">
                                    <input type="button" value="-" class="qtyminus" name="adults">
                                    <input type="text" name="adults" id="adults" value="" class="qty form-control" placeholder="0">
                                    <input type="button" value="+" class="qtyplus" name="adults">
                                </div>
                            </div>
                            <div id="container_4">
                                <label>Children</label>
                                <div class="qty-buttons">
                                    <input type="button" value="-" class="qtyminus" name="children">
                                    <input type="text" name="children" id="children" value="" class="qty form-control" placeholder="0">
                                    <input type="button" value="+" class="qtyplus" name="children">
                                </div>
                            </div>
                        </div><!-- End group_2 -->
                        <div id="group_3">
                            <div id="container_5">
                                <label>Name</label>
                                <input type="text" class="form-control" name="name_booking" id="name_booking" placeholder="Name and Last name">
                            </div>
                            <div id="container_6">
                                <label>Email</label>
                                <input type="text" class="form-control" name="email_booking" id="email_booking" placeholder="Your email">
                            </div>
                        </div><!-- End group_3 -->
                        <div id="container_7">
                            <input type="submit" value="Check availability" class="btn_1" id="submit-booking">
                        </div>
                    </form>
                    <div id="message-booking"></div>
                </div><!-- End book_container -->
            </div><!-- End sub_content -->
        </div><!-- End subheader -->
    </div><!-- End parallax-window -->
    <!-- End SubHeader ============================================ -->
            
    <div class="container margin_60_35">
        <h1 class="main_title"><em></em>WELCOME TO <br>SUDARSHAN HOTEL <br><i><h4>Homely Comforts in the midst of Commercial Hub</h4></i></h1>
        <p class="lead styled">
           The charming Sudharshan Hotel is the only full service luxury hotel in the heart of Kalyaninagar. Whether it is due to its excellent location, tranquil setting or the fact that it is easily accessible from Pune International Airport, this hotel has increasingly become the preferred destination for business executives.
        </p>
        <div class="row">
            <div class="col-sm-6">
                <div class="mosaic_container">
                    <img src="../img/mosaic_1.jpg" alt="" class="img-responsive add_bottom_30"><span class="caption_2">Nice Outdoor</span>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="col-xs-12">
                    <div class="mosaic_container">
                        <img src="../img/mosaic_2.jpg" alt="" class="img-responsive add_bottom_30"><span class="caption_2">Large Bedroom</span>
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="mosaic_container">
                        <img src="../img/mosaic_3.jpg" alt="" class="img-responsive add_bottom_30"><span class="caption_2">Modern Bathroom</span>
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="mosaic_container">
                        <img src="../img/mosaic_4.jpg" alt="" class="img-responsive add_bottom_30"><span class="caption_2">Wellness</span>
                    </div>
                </div>
            </div>
        </div><!-- End row -->
    </div><!-- End container -->
    
    <div class="container_styled_1">
        <div class="container margin_60">
            <div class="row">
                <div class="col-md-5 col-md-offset-1">
                    <figure class="room_pic"><a href="#"><img src="../img/room_home_1.jpg" alt="" class="img-responsive"></a><span class="wow zoomIn" data-wow-delay="0.2s"><sup>Rs.</sup>2000<small>Per night</small></span></figure>
                </div>
                <div class="col-md-4 col-md-offset-1">
                    <div class="room_desc_home">
                        <h3>Single OCC Room </h3>
                        <p>
                             <b>Extra Person Rs. 500</b>/night<br>Complimentary Breakfast<br>24 Hrs Satellite TV Channels<br>Air Conditioning
                        </p>
                        <ul>
                            <li>
                            <div class="tooltip_styled tooltip-effect-4">
                                <span class="tooltip-item"><i class="icon_set_2_icon-104"></i></span>
                                <div class="tooltip-content">
                                    King size bed
                                </div>
                            </div>
                            </li>
                            <li>
                            <div class="tooltip_styled tooltip-effect-4">
                                <span class="tooltip-item"><i class="icon_set_1_icon-86"></i></span>
                                <div class="tooltip-content">
                                    Wifi internet connectivity
                                </div>
                            </div>
                            </li>
                            <!--<li>
                                <div class="tooltip_styled tooltip-effect-4">
                                <span class="tooltip-item"><i class="icon_set_2_icon-111"></i></span>
                                <div class="tooltip-content">
                                    Bathtub
                            </div>
                        </div>
                            </li>-->
                            <li>
                            <div class="tooltip_styled tooltip-effect-4">
                                <span class="tooltip-item"><i class="icon_set_2_icon-116"></i></span>
                                <div class="tooltip-content">
                                    Plasma TV
                                </div>
                            </div>
                            </li>

                        </ul>
                        <a href="room_detail.php" class="btn_1_outline">Read more</a>
                    </div><!-- End room_desc_home -->
                </div>
            </div><!-- End row -->
        </div><!-- End container -->
    </div><!-- End container_styled_1 -->
    
    <div class="container margin_60">
        <div class="row">
            <div class="col-md-5 col-md-offset-1 col-md-push-5">
                  <figure class="room_pic left"><a href="#"><img src="../img/room_home_3.jpg" alt="" class="img-responsive"></a><span class="wow zoomIn" data-wow-delay="0.2s"><sup>Rs.</sup>2500<small>Per night</small></span></figure>
            </div>
            <div class="col-md-4 col-md-offset-1 col-md-pull-6">
                <div class="room_desc_home">
                    <h3>Double OCC Room </h3>
                    <p>
                          <b>Extra Person Rs. 500</b>/night<br>Complimentary Breakfast<br>24 Hrs Satellite TV Channels<br>Air Conditioning
                        </p>
                    </p>
                    <ul>
                        <li>
                        <div class="tooltip_styled tooltip-effect-4">
                            <span class="tooltip-item"><i class="icon_set_2_icon-104"></i></span>
                            <div class="tooltip-content">
                                King size bed
                            </div>
                        </div>
                        </li>
                        <!--<li>
                        <div class="tooltip_styled tooltip-effect-4">
                            <span class="tooltip-item"><i class="icon_set_2_icon-111"></i></span>
                            <div class="tooltip-content">
                                Bathtub
                            </div>
                        </div>
                        </li>-->
                        <li>
                        <div class="tooltip_styled tooltip-effect-4">
                            <span class="tooltip-item"><i class="icon_set_1_icon-86"></i></span>
                            <div class="tooltip-content">
                                Wifi internet connectivity
                            </div>
                        </div>
                        </li>
                        <li>
                        <div class="tooltip_styled tooltip-effect-4">
                            <span class="tooltip-item"><i class="icon_set_2_icon-116 "></i></span>
                            <div class="tooltip-content">
                                 Plasma TV 
                            </div>
                        </div>
                        </li>
                    </ul>
                    <a href="room_detail_2.php" class="btn_1_outline">Read more</a>
                </div><!-- End room_desc_home -->
            </div>
        </div><!-- End row -->
    </div><!-- End container -->
    
    <!--<div class="container_styled_1">
        <div class="container margin_60">
            <div class="row">
                <div class="col-md-5 col-md-offset-1">
                    <figure class="room_pic"><a href="#"><img src="../img/room_home_2.jpg" alt="" class="img-responsive"></a><span class="wow zoomIn" data-wow-delay="0.2s"><sup>$</sup>200<small>Per night</small></span></figure>
                </div>
                <div class="col-md-4 col-md-offset-1">
                    <div class="room_desc_home">
                        <h3>Suite Room </h3>
                        <p>
                             Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
                        </p>
                        <ul>
                            <li>
                            <div class="tooltip_styled tooltip-effect-4">
                                <span class="tooltip-item"><i class="icon_set_2_icon-104"></i></span>
                                <div class="tooltip-content">
                                    King size bed
                                </div>
                            </div>
                            </li>
                            <li>
                            <div class="tooltip_styled tooltip-effect-4">
                                <span class="tooltip-item"><i class="icon_set_2_icon-111"></i></span>
                                <div class="tooltip-content">
                                    Bathtub
                                </div>
                            </div>
                            </li>
                            <li>
                            <div class="tooltip_styled tooltip-effect-4">
                                <span class="tooltip-item"><i class="icon_set_2_icon-116"></i></span>
                                <div class="tooltip-content">
                                    Plasma TV
                                </div>
                            </div>
                            </li>
                            <li>
                            <div class="tooltip_styled tooltip-effect-4">
                                <span class="tooltip-item"><i class="icon_set_1_icon-15"></i></span>
                                <div class="tooltip-content">
                                    Welcome bottle
                                </div>
                            </div>
                            </li>
                            <li>
                            <div class="tooltip_styled tooltip-effect-4">
                                <span class="tooltip-item"><i class="icon_set_2_icon-106"></i></span>
                                <div class="tooltip-content">
                                    Safe box
                                </div>
                            </div>
                            </li>
                        </ul>
                        <a href="room_list.html" class="btn_1_outline">Read more</a>
                    </div>--><!-- End room_desc_home -->
                </div>
            </div><!-- End row -->
        </div><!-- End container -->
    </div>--><!-- End container_styled_1 -->
    
    <section class="promo_full">
    <div class="promo_full_wp">
        <div>
            <h3>What Clients say</h3>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="carousel_testimonials">
                        
                            <div>
                                <div class="box_overlay">
                                    <div class="pic">
                                        <figure><img src="../img/testimonial_1.jpg" alt="" class="img-circle"></figure>
                                        <h4>Pritul Sanghavi<small>12 October 2015</small></h4>
                                    </div>
                                    <div class="comment">
                                        "Great clean place. The hotel facilities are basic. The location is excellent. The staff is very friendly and efficient. They take good care of their guests. Resasonably priced. Only thing missing is they should have more breakfast options. The hotel has enough car parking. Very close to the popular koregaon park."
                                    </div>
                                </div><!-- End box_overlay -->
                            </div>
                            
                            <div>
                                <div class="box_overlay">
                                    <div class="pic">
                                        <figure><img src="../img/testimonial_1.jpg" alt="" class="img-circle"></figure>
                                        <h4>Prashant Kumar<small>12 October 2015</small></h4>
                                    </div>
                                    <div class="comment">
                                        "Budget hotel located in koregaon park, shopping locations are accessible. Airport is 4.5 KMS away from this location. Hotel is average, it's best if your are worried about budget and something which is near to airport.."
                                    </div>
                                </div><!-- End box_overlay -->
                            </div>
                            
                            <div>
                                <div class="box_overlay">
                                    <div class="pic">
                                        <figure><img src="../img/testimonial_1.jpg" alt="" class="img-circle"></figure>
                                        <h4>Ajit Bhalachandra<small>12 October 2015</small></h4>
                                    </div>
                                    <div class="comment">
                                        "Very calm and quite place. Peace ful. Very well. Maintained. You get complementary breakfasts as well. Area is great to roam around and you have ample amount of amenities.
"
                                    </div>
                                </div><!-- End box_overlay -->
                            </div>
                            
                        </div><!-- End carousel_testimonials -->
                    </div><!-- End col-md-8 -->
                </div><!-- End row -->
            </div><!-- End container -->
        </div><!-- End promo_full_wp -->
    </div><!-- End promo_full -->
    </section><!-- End section -->    
    
    <div id="dtBox"></div><!-- End datepicker -->
    <!--Footer======-->
    <?php include 'includes/footer.php';?>
<!--end footer===-->
<div id="toTop"></div><!-- Back to top button -->
        
<?php include 'includes/script.php';?>
</body>
</html>