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
    <section class="parallax-window" id="short" data-parallax="scroll" data-image-src="../img/blog-3.jpg" data-natural-width="1400" data-natural-height="550">
        <div id="subheader">
            <h1>Contact Us</h1>
    </div> <!-- End subheader -->
    </section><!-- End section -->

    <!-- End SubHeader ============================================ -->
	
        
    <div class="container margin_60_35">
    <!--<h2 class="main_title"><em></em>Contact</h2>-->
    	<div class="row add_top_20">
        
        <div class="col-md-4">
            	<div class="box_style_1">
                    <div class="box_contact">
                        <i class="icon_set_1_icon-41"></i>
                        <h4>For Booking & Reservation Contact</h4>
                        <p><b>E-mail:</b> sudarshan@hotelsuryavilla.com<b>Address:</b> Plot No.18,Lane    No.7, HDFC Bank Lane,Kalyani Nagar, Pune 411006. INDIA<br><b>Tel.:</b> +91-20-40046273 / 74 / 75<br><b>Mob.:</b> +91-9762222375 / 9822650140</a></p>
                    </div>
                    <br>
                    <div class="box_contact">
            	<i class="icon_set_1_icon-37"></i>
                <h4>Distance</h4>
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15130.883620314622!2d73.8876112!3d18.5415102!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe0691c45bc7c5717!2sSurya%20Villa%20Hotel%20Pune!5e0!3m2!1sen!2sin!4v1614069617087!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                <!--<form action="http://maps.google.com/maps" method="get" target="_blank">
                	<div class="form-group">
					<input type="text" name="saddr" placeholder="Enter your starting point" class="form-control" />
					<input type="hidden" name="daddr" value="New York, NY 11430" Write here your end point >
                    </div>
                    <div class="form-group">
					<button class="btn_1" type="submit" value="Get directions">Get directions</button>
                    </div>
			</form>-->
            

                        <b>Airport: </b>6 KMS<br>

                        <b>Pune Railway Station: </b>3 KMS<br>

                        <b>City Centre: </b>3 KMS<br>
                        <b>Kharadi EON IT Park: </b>9.5 KMS<br>
                        <b>Magarpatta(Hadapsar): </b>7.1 KMS
            </div>
            </div>
            </div>   
            
        	<div class="col-md-7 col-md-offset-1">
            
            <div id="message-contact"></div>
				<form method="post" action="back.php">
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<div class="form-group">
								<label>First Name</label>
								<input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
							<div class="form-group">
								<label>Last Name</label>
								<input type="text" class="form-control" id="lastname" name="lastname" placeholder="Enter Last Name">
							</div>
						</div>
					</div>
					<!-- End row -->
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<div class="form-group">
								<label>Email</label>
								<input type="text" id="email" name="email" class="form-control" placeholder="Enter Email">
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
							<div class="form-group">
								<label>Phone</label>
								<input type="text" id="phone" name="phone" class="form-control" placeholder="Enter Phone number">
							</div>
						</div>
					</div>
                    <!-- End row -->
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Message</label>
								<textarea  id="message" name="message" class="form-control" placeholder="Write your message" style="height:150px;"></textarea>
							</div>
						</div>
					</div>
                    <!-- End row -->
					<div class="row add_bottom_30">
						<div class="col-md-6">
                        	<!--<div class="form-group">
                                <label>Human verification</label>
                                <input type="text" id="verify_contact" class="form-control add_bottom_30" placeholder="Are you human? 3 + 1 =">
                            </div>-->
							<div class="text-center"><a href="contacts.php"><button  type="submit" style= "background: #18d26e;
    border: 0;
    padding: 10px 30px;
    color: #fff;
    transition: 0.4s;
    cursor: pointer;" name="submit" id="submit">Submit</button>
						</div>
					</div>
                    <!-- End button -->
				</form>               
            </div><!-- End col-md-7 -->    
            
             
        </div><!-- End row -->
    </div><!-- End Container -->
      
  

     <?php include 'includes/footer.php';?>
<div id="toTop"></div><!-- Back to top button -->
   
<!-- COMMON SCRIPTS -->
<?php include 'includes/script.php';?>

<!-- Specifi scripts -->


</body>
</html>