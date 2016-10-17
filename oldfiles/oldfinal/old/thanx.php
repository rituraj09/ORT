<?php include ("header.php")?>
<div class="inner-banner style-6">
	<img class="center-image" src="img/bg_1.jpg" alt="">
	<div class="vertical-align">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-8 col-md-offset-2">
		  			
		  			<h2 class="color-white">Thank you</h2>
  				</div>
			</div>
		</div>
	</div>
</div>

<!-- BLOG -->
<div class="detail-wrapper">
	<div class="container">
       	<div class="row padd-90">
       		<div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1">
       			<div class="blog-list">
					<div class="blog-list-entry style-2">
						<div class="blog-list-text color-grey-3">
                       <h3> <strong>Thanks for Submitting Your Enquiry.<br>
                        Our Executive will contact you Shortly...</strong></h3>

</div>
							  	 					
					</div> 
					
				</div>				       			
       		</div>
       	</div>
	</div>
</div>

<!-- FOOTER -->  
    
 <footer class="bg-dark type-2">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
    				<div class="footer-block">
    					<img src="img/wlogo.png" alt="" class="logo-footer">
    					<div class="f_text color-grey-7">onerooftravel is a one-stop solution to all your travel needs across the world. As a travel agent, we assist you in choosing the right destination and take care of your travel related needs right from booking a deal with us,</div>
    					<div class="footer-share">
    						<a href="#"><span class="fa fa-facebook"></span></a>
    						<a href="#"><span class="fa fa-twitter"></span></a>
    						<a href="#"><span class="fa fa-google-plus"></span></a>
    						<a href="#"><span class="fa fa-pinterest"></span></a>
    					</div>
    				</div>
    			</div>
    			<div class="col-lg-3 col-md-3 col-sm-6 col-sm-6 no-padding">
				   <div class="footer-block">
						<h6>Company Information</h6>
						<div class="f_news clearfix">
								<a class="f_news-tilte color-white link-red" href="about.php">about Us</a>
						</div>
						<div class="f_news clearfix">
								<a class="f_news-tilte color-white link-red" href="privacy.php">Privacy Policy</a>
						</div>
						<div class="f_news clearfix">
								<a class="f_news-tilte color-white link-red" href="term.php">Terms of Use</a>
						</div>	
                        <div class="f_news clearfix">
								<a class="f_news-tilte color-white link-red" href="disclaimer.php">Disclaimer</a>
						</div>
						<div class="f_news clearfix">
								<a class="f_news-tilte color-white link-red" href="travel_insurance.php">Travel Insurance</a>
						</div>
						<div class="f_news clearfix">
								<a class="f_news-tilte color-white link-red" href="contact.php">Contact Us</a>
						</div>							
				   </div>
				</div>
    			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
    			   <div class="footer-block">
						<h6>Popular Destination</h6>
						<div class="f_news clearfix">
								<a class="f_news-tilte color-white link-red" href="#">California Vacations</a>
						</div>
						<div class="f_news clearfix">
								<a class="f_news-tilte color-white link-red" href="#">Caribbean Vacations</a>
						</div>
						<div class="f_news clearfix">
								<a class="f_news-tilte color-white link-red" href="#">Florida Vacations</a>
						</div>	
                        <div class="f_news clearfix">
								<a class="f_news-tilte color-white link-red" href="#">Hawaii Vacations</a>
						</div>
						<div class="f_news clearfix">
								<a class="f_news-tilte color-white link-red" href="#">Las Vegas Vacations</a>
						</div>	
                        <div class="f_news clearfix">
								<a class="f_news-tilte color-white link-red" href="#">Mexico Vacations</a>
						</div>							
				   </div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                   <div class="footer-block">
                     <h6>Contact Info</h6>
                       <div class="contact-info">
                        <div class="f_text color-grey-7"><span>                        1301 Carousel court,<br>
						Evansville Indiana <br>
						47715 USA<br>
<br>
Phone : +1-844-404-0098<br>
Email: <a href="mailto:info@onerooftravel.com">info@onerooftravel.com</a><br>
Web: <a href="http://www.onerooftravel.com">www.onerooftravel.com</a><br><br>
<img src="img/pay.jpg">
</span>
</div>
									
						
					</div>
				   </div> 
				</div>
    		</div>
    	</div>
    	<div class="footer-link bg-black">
    	  <div class="container">
    	  	<div class="row">
    	  		<div class="col-md-12">
    	  		    <div class="copyright">
						<span>&copy; 2016. One Roof Travel. All rights reserved.</span>
					</div>
    	  			<ul>
						<li>Powered By:<a href="http://www.telnettechnologies.in" title="+91 9212 32 32 37" target="_blank">Telnet Technologies</a></li>
						
					</ul>
    	  		</div>
    	  	</div>
    	  </div>
    	</div>
    </footer>  
    <?php
 $mailto="manoj0001@gmail.com";  //Enter recipient email address here

       $subject = "Enquiry submitted.";

       $from="manoj0001@gmail.com";          //Your valid email address here

       
       



//$message = $_POST["strindus"];

$message_body  = "Name           : " . $_POST["cname"] ."\r\n";
//$message .= "Company Name   : " . $_POST["compname"] ."\r\n";
//$message .="Address        : " . $_POST["add"] ."\r\n";
$message .="Email          : " . $_POST["email"] ."\r\n";
//$message .="Website        : " . $_POST["web"] ."\r\n";
//$message .="State          : " . $_POST["strstate"] ."\r\n";
//$message .="Product Name   : " . $_POST["prod"] ."\r\n";
$message .="Phone          : " . $_POST["phone"] ."\r\n";
//$message .="Quantity       : " . $_POST["quant"] ."\r\n";
//$message .="Copy Resume    : " . $_POST["strcopy"] ."\r\n";
$message .="Message        : " . $_POST["feed"] ."\r\n";

//$message .="Country      : " . $_POST["strcont"] ."\r\n";

//$message .="Website        : " . $_POST["strurl"] ."\r\n";
//$message .="Query          : " . $_POST["strmsg"] ."\r\n";
		
		mail($mailto,$subject,$message_body,"From:".$from);

       echo "Your email has been sent successfully";
		
//		<br/>Click here to <a href="index.php">Go Back</a>
?>   
<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/idangerous.swiper.min.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/all.js"></script>
		   
</body>
</html>		
