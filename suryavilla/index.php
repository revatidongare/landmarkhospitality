 <!DOCTYPE html>
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<html>
<?php include 'includes/head.php';?>
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
    <div class="parallax-window" id="booking" data-parallax="scroll" data-image-src="../img/sub_header_home.jpg" data-natural-width="1400" data-natural-height="550">
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
        <h1 class="main_title"><em></em>WELCOME TO<br>Suryavilla Hotel</br><i><h4>Welcoming New Man</h4></i></h1>
        <p class="lead styled">
            The lush green koregaon park area is so invitingly refreshing, surrounded with an aura of serenity, quietness that is relaxing. Hotel Surya Villa is here to soothe the weary minds. We constantly work towards building a better and sustainable way of living by providing facilities to our customers without compromising on the environment. The homely atmosphere is enhanced by its setting amongst swaying trees in a flourishing garden. Enjoy the tranquility and bird life.

            The well-known Osho Commune is just 5 minutes walking distance away; while M.G. Road, the main shopping area of Poona city, is just 10 minutes drive away.

            Koregaon Park is boomeranging into a software and business-hub of Poona. Hotel Surya Villa located in this vicinity provides the business-people and seekers an ideal place to stay in.
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
                    <figure class="room_pic"><a href="#"><img src="../img/room_home_1.jpg" alt="" class="img-responsive"></a><span class="wow zoomIn" data-wow-delay="0.2s"><sup>Rs. 2000/-</sup><small>Per night</small></span></figure>
                </div>
                <div class="col-md-4 col-md-offset-1">
                    <div class="room_desc_home">
                        <h3>Deluxe Rooms</h3>
                        <p>Executive A/C Rooms</p>
                        <p>
                              <b>Extra Person Rs. 500</b>/night<br>24 Hrs Satellite TV Channels<br>Air Conditioning
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
                            <!-- <div class="tooltip_styled tooltip-effect-4">
                                <span class="tooltip-item"><i class="icon_set_2_icon-118"></i></span>
                                <div class="tooltip-content">
                                    Shower
                                </div>
                            </div> -->
                            </li>
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
                  <figure class="room_pic left"><a href="#"><img src="../img/room_home_3.jpg" alt="" class="img-responsive"></a><span class="wow zoomIn" data-wow-delay="0.2s"><sup>Rs. 2500/-</sup><small>Per night</small></span></figure>
            </div>
            <div class="col-md-4 col-md-offset-1 col-md-pull-6">
                <div class="room_desc_home">
                    <h3>Suite Rooms</h3>
                    <p>Executive A/C Rooms</p>
                    <p>
                        <b>Extra Person Rs. 500</b>/night<br>24 Hrs Satellite TV Channels<br>Air Conditioning
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
                        <!-- <li>
                        <div class="tooltip_styled tooltip-effect-4">
                            <span class="tooltip-item"><i class="icon_set_2_icon-106"></i></span>
                            <div class="tooltip-content">
                                Safe box
                            </div>
                        </div>
                        </li> -->
                    </ul>
                    <a href="room_detail_2.php" class="btn_1_outline">Read more</a>
                </div><!-- End room_desc_home -->
            </div>
        </div><!-- End row -->
    </div><!-- End container -->
    
    <div class="container_styled_1">
        <div class="container margin_60">
            <div class="row">
                <div class="col-md-5 col-md-offset-1">
                    <figure class="room_pic"><a href="#"><img src="../img/room_home_2.jpg" alt="" class="img-responsive"></a><span class="wow zoomIn" data-wow-delay="0.2s"><sup>Rs. 1500/-</sup><small>Per night</small></span></figure>
                </div>
                <div class="col-md-4 col-md-offset-1">
                    <div class="room_desc_home">
                        <h3>Deluxe Rooms</h3>
                        <p>Executive Non-A/C Rooms</p>
                        <p>
                             <b>Extra Person Rs. 500</b>/night<br>24 Hrs Satellite TV Channels
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
                            <!-- <li>
                            <div class="tooltip_styled tooltip-effect-4">
                                <span class="tooltip-item"><i class="icon_set_1_icon-15"></i></span>
                                <div class="tooltip-content">
                                    Welcome bottle
                                </div>
                            </div>
                            </li> -->
                            <!-- <li>
                            <div class="tooltip_styled tooltip-effect-4">
                                <span class="tooltip-item"><i class="icon_set_2_icon-106"></i></span>
                                <div class="tooltip-content">
                                    Safe box
                                </div>
                            </div>
                            </li> -->
                        </ul>
                        <a href="room_detail_3.php" class="btn_1_outline">Read more</a>
                    </div><!-- End room_desc_home -->
                </div>
            </div><!-- End row -->
        </div><!-- End container -->
    </div><!-- End container_styled_1 -->
      <div class="container margin_60">
        <div class="row">
            <div class="col-md-5 col-md-offset-1 col-md-push-5">
                  <figure class="room_pic left"><a href="#"><img src="../img/room_home_3.jpg" alt="" class="img-responsive"></a><span class="wow zoomIn" data-wow-delay="0.2s"><sup>Rs. 2500/-</sup><small>Per night</small></span></figure>
            </div>
            <div class="col-md-4 col-md-offset-1 col-md-pull-6">
                <div class="room_desc_home">
                    <h3>Suite Rooms</h3>
                    <p>Executive Non-A/C Rooms</p>
                    <p>
                        <b>Extra Person Rs. 500</b>/night<br>24 Hrs Satellite TV Channels
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
                        <!-- <li>
                        <div class="tooltip_styled tooltip-effect-4">
                            <span class="tooltip-item"><i class="icon_set_2_icon-106"></i></span>
                            <div class="tooltip-content">
                                Safe box
                            </div>
                        </div>
                        </li> -->
                    </ul>
                    <a href="room_detail_4.php" class="btn_1_outline">Read more</a>
                </div><!-- End room_desc_home -->
            </div>
        </div><!-- End row -->
    </div><!-- End container -->

    
    
    <!--  <section class="promo_full">
    <div class="promo_full_wp">
        <div>
            <h3>What Clients say></h3>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="carousel_testimonials">
                        
                            <div>
                                <div class="box_overlay">
                                    <div class="pic">
                                        <figure><img src="../img/testimonial_1.jpg" alt="" class="img-circle"></figure>
                                        <h4>Roberta<small>12 October 2015</small></h4>
                                    </div>
                                    <div class="comment">
                                        The room had a wonderful view. I loved the shower with the three water sources. I even took the time to use the robe :) It was quiet enough to get work done and to take late afternoon nap. I always appreciate complimentary water. Thank you for excellent service.
                                    </div>
                                </div>
                            </div>
                            
                            <div>
                                <div class="box_overlay">
                                    <div class="pic">
                                        <figure><img src="../img/testimonial_1.jpg" alt="" class="img-circle"></figure>
                                        <h4>Roberta<small>12 October 2015</small></h4>
                                    </div>
                                    <div class="comment">
                                        "Mea ad postea meliore fuisset. Timeam repudiare id eum, ex paulo dictas elaboraret sed, mel cu unum nostrud. No nam indoctum accommodare, vix ei discere civibus philosophia. Vis ea dicant diceret ocurreret."
                                    </div>
                                </div>
                            </div>
                            
                            <div>
                                <div class="box_overlay">
                                    <div class="pic">
                                        <figure><img src="../img/testimonial_1.jpg" alt="" class="img-circle"></figure>
                                        <h4>Roberta<small>12 October 2015</small></h4>
                                    </div>
                                    <div class="comment">
                                        "Mea ad postea meliore fuisset. Timeam repudiare id eum, ex paulo dictas elaboraret sed, mel cu unum nostrud. No nam indoctum accommodare, vix ei discere civibus philosophia. Vis ea dicant diceret ocurreret."
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>      -->
    
    <div id="dtBox"></div><!-- End datepicker -->
    
      <?php include 'includes/footer.php';?>

<div id="toTop"></div><!-- Back to top button -->
<?php include 'includes/script.php';?>
 
</body>
</html>