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
            <h1>Book Room</h1>
    </div> <!-- End subheader -->
    </section><!-- End section -->

    <!-- End SubHeader ============================================ -->
	
        
    <div class="container margin_60_35">
    <!--<h2 class="main_title"><em></em>Contact</h2>-->
    	<div class="row add_top_20">
        
      
            
        	<div class="col-md-7 col-md-offset-1">
            
            <div id="message-contact"></div>
				<form method="post" action="back.php">
					<div class="row">       
						<div class="col-md-6 col-sm-6">
							<div class="form-group">
								<label>Customer Name</label>
								<input type="text" class="form-control" id="name" name="name" placeholder="Enter Last Name">
							</div>
						</div>
					
                    <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" id="email" name="email" class="form-control" placeholder="Enter Email">
                            </div>
                        </div>
                        </div>
					<!-- End row -->
					<div class="row">
						
						<div class="col-md-6 col-sm-6">
							<div class="form-group">
								<label>Phone</label>
								<input type="text" id="phone" name="phone" class="form-control" placeholder="Enter Phone number">
							</div>
						</div>
					
                    <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>Enter Number of Room</label>
                                <input type="text" class="form-control" id="number" name="number" placeholder="Enter Name">
                            </div>
                        </div>
                        </div>
                        <div class="row">
                         <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>Date of Arrival</label>
                                <input type="date" class="form-control" id="date" name="date" >
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>Date of Departure</label>
                                <input type="date" class="form-control" id="datee" name="datee" >
                            </div>
                        </div>
                    </div>
                         <div class="row">
                              <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>Number of Guest</label>
                                <input type="text" class="form-control" id="numberr" name="numberr" placeholder="Enter Name">
                            </div>
                        </div>
                    <div class="col-md-6 col-sm-6">
                                                   <div class="form-group">
                                                     <label>Room Type</label>
                                                        <select class="form-control" name="guest" id="guest">

                                                          <option selected="selected" disabled="disabled">Select Room Type</option>
                                                           <option value="Deluxe Room AC Singal">Deluxe Room AC Singal</option>
                                                           <option value="Deluxe Room AC Double">Deluxe Room AC Double</option>
                                                            
                                                        </select>               
                                                   </div>
                                                </div>

                                            </div>

                    <!-- End row -->
				
                    <!-- End row -->
					<div class="row add_bottom_30">
						<div class="col-md-6">
                        	<!--<div class="form-group">
                                <label>Human verification</label>
                                <input type="text" id="verify_contact" class="form-control add_bottom_30" placeholder="Are you human? 3 + 1 =">
                            </div>-->
							<div class="text-center"><a href="bookroom.php"><button  type="submit" style= "background: #18d26e;
    border: 0;
    padding: 10px 30px;
    color: #fff;
    transition: 0.4s;
    cursor: pointer;" name="submitt" id="submitt">Book Now</button>
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