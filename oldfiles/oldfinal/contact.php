<?php include ("header.php");?>
<!-- MAP BLOCK -->
<div class="inner-banner style-6">
	<img class="center-image" src="img/contact_bg.jpg" alt="">
	<div class="vertical-align">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-8 col-md-offset-2">
		  			
		  			<h2 class="color-white">Contact Us</h2>
  				</div>
			</div>
		</div>
	</div>
</div>

<div class="main-wraper">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-8 col-sm-offset-2">
				<div class="second-title">
					<h4 class="subtitle color-dr-blue-2 underline">contact info</h4>
					<h2>get in touch</h2>
				</div>
			</div>
		</div>
		<div class="contact-row">
			<div class="row">
				<div class="col-xs-12 col-sm-4">
					<div class="contact-entry">
						<img class="contact-icon" src="img/loc_icon_2_dark.png" alt="">
						<div class="contact-label color-grey-3">Address:</div>
						<div class="contact-text color-dark-2">1301 Carousel court,Evansville Indiana 47715 USA</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-4">
					<div class="contact-entry">
						<img class="contact-icon" src="img/mail_icon_l_dark.png" alt="">
						<div class="contact-label color-grey-3">Email us:</div>
						<a class="contact-text color-dark-2 link-dr-blue-2" href="mailto:info@onerooftravel.com">info@onerooftravel.com</a>
					</div>
				</div>
				<div class="col-xs-12 col-sm-4">
					<div class="contact-entry">
						<img class="contact-icon" src="img/phone_icon_3_dark.png" alt="">
						<div class="contact-label color-grey-3">Phone:</div>
						<a class="contact-text color-dark-2 link-dr-blue-2" href="tel:">+1-844-404-0098</a>
					</div>
				</div>						
			</div>
		<br>
		<div>
		<iframe src="https://www.google.com/maps/d/embed?mid=1w93a6j1ZV5tdCqawOLzHKNCDUaw" width="100%" height="480"></iframe>
		</div>
		</div>
		<div class="share style-2 clearfix">
			<ul>
		      	<li class="color-in"><a href="#"><i class="fa fa-linkedin"></i>linkedin<span class="color-in-2">19</span></a></li>			
		      	<li class="color-fb"><a href="#"><i class="fa fa-facebook"></i>facebook<span class="color-fb-2">12</span></a></li>
		      	<li class="color-tw"><a href="#"><i class="fa fa-twitter"></i>twitter<span class="color-tw-2">27</span></a></li>
		      	<li class="color-gg"><a href="#"><i class="fa fa-google-plus"></i>google +<span class="color-gg-2">51</span></a></li>
		      	
	      	</ul>						
		</div>
	</div>
</div>	


<!-- CONTACT-FORM -->
<div class="main-wraper padd-90">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-8 col-sm-offset-2">
				<div class="second-title">
					<h4 class="subtitle color-dr-blue-2 underline">contact form</h4>
					<h2>have a question?</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
				<div class="second-description text-center color-grey-3"></div>			
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<form class="contact-form js-contact-form"  method="POST" action="#">
					<div class="row">
						<div class="col-xs-12 col-sm-6">
							<div class="input-style-1 type-2 color-2">
							  	<input type="text" name="fields[name]" required placeholder="Enter your name">
							</div>
						</div>
						<div class="col-xs-12 col-sm-6">
							<div class="input-style-1 type-2 color-2">
							  	<input type="text" name="fields[email]" required placeholder="Enter your email">
							</div>
						</div>
						<div class="col-xs-12 col-sm-6">
							<div class="input-style-1 type-2 color-2">
							  	<input type="text" name="fields[subject]" required placeholder="Enter your Mobile No.">
							</div>
						</div>	
						
						<div class="col-xs-12">
							<textarea class="area-style-1 color-1" name="fields[text]" required placeholder="Enter your comment"></textarea>
							<div class="text-center">
								<button type="submit" class="c-button bg-dr-blue-2 hv-dr-blue-2-o"><span>submit comment</span></button>
							</div>
							<input type="hidden" name="fields[code]" value="56345678safs_">
						</div>
					</div>					
				</form>
				<div class="ajax-result">
                  <div class="success"></div>
                  <div class="error"></div>
                </div>
                <div class="ajax-loader"></div>
			</div>
		</div>
	</div>
</div>
<?php include ("footer.php");?>		   