<script language="javascript">
function validate(){

			if ((document.form1.cname.value.length<5))
			{
		       alert("Please Enter proper Name!");
			document.form1.cname.focus();				
			document.form1.cname.select();
                        return(false);			
                  }
				
				else if ((document.form1.email.value.length<=7)||(document.form1.email.value.indexOf("@") == -1)||(document.form1.email.value.indexOf(".") == -1))
		  {
		       alert("Please Enter the proper email ID!");
			document.form1.email.focus();				
			document.form1.email.select();
                        return(false);			
                  }  
                 else if (document.form1.feed.value.length<=5)
		  {
		       alert("Please Fill up the form properly !");
			document.form1.feed.focus();				
			document.form1.feed.select();
                        return(false);			
                  }
				  
           else
		  {
                      //document.form1.submit();
                      return(true); 
             }
} 

    </script>
        <div class="page-title-container">
            <div class="container">
                <div class="page-title pull-left">
                    <h2 class="entry-title">Contact Us</h2>
                </div>
                <ul class="breadcrumbs pull-right">
                    <li><a href="main_page">HOME</a></li>
                    
                    <li class="active">Contact Us</li>
                </ul>
            </div>
        </div>

        <section id="content">
            <div class="container">
                <div id="main">
                    <div class="">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1870.392671724539!2d-87.46999589914944!3d37.96282163485914!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x28649caa7451016c!2sOneRoofTravel!5e0!3m2!1sen!2sin!4v1476246374267" width="100%" height="480"></iframe>
                   
                    </div>
                    <div class="row">
                        <div class="col-sm-4 col-md-3">
                            <div class="travelo-box contact-us-box">
                                <h4>Contact us</h4>
                                <ul class="contact-address">
                                    <li class="address">
                                        <i class="fa fa-home"></i>
                                        <h5 class="title"><b>USA Office</b></h5>
                                        <p>OneRoofTravel LLC</p>
                                        <p>1309 Carousel Ct,</p>
                                        <p>Evansville, IN 47715</p>
                                            <p>Phone: +1-844-404-0098</p>
                                     <p style="text-transform:lowercase"><a href="mailto:info@onerooftravel.com">info@onerooftravel.com</a></p>
                                    </li>
                                    <li class="address">
                                        <i class="fa fa-home"></i>
                                        <h5 class="title"><b>India Office</b></h5>
                                      <p>BB1 TravelTech</p>
                                      <p> H/No. 25, Khera Chauganpur,</p>                                      
                                      <p>Greater Noida,</p> 
                                      <p>Gautam Buddha Nagar</p>
                                        <p>UP-201308</p>
                                            <p>Phone: +91-7291-872663</p>
                                     <p style="text-transform:lowercase"><a href="mailto:info@onerooftravel.com">info@onerooftravel.com</a></p>
                                        
                                    </li>
                                   
                                </ul>
                                <ul class="social-icons full-width">
                                    <li><a href="http://facebook.com/"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="http://linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="http://twitter.com/"><i class="fa fa-twitter"></i></a></li>
									<li><a href="http://plus.google.com/"><i class="fa fa-google-plus"></i> </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-8 col-md-9">
                            <div class="travelo-box">
                                <form class="contact-form" action="thanks.php" method="post" name="form1" id="form1">
                                    <h4 class="box-title">Send us a Message</h4>
                                    <div class="row form-group">
                                        <div class="col-xs-6">
                                            <label>Your Name</label>
                                            <input type="text" name="cname" id="cname"  accept="must" class="input-text full-width">
                                        </div>
                                        <div class="col-xs-6">
                                            <label>Your Email</label>
                                            <input type="text" name="email" id="email"  accept="must" class="input-text full-width">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Your Message</label>
                                        <textarea name="feed" id="feed"  accept="must" title="Enquiry" rows="12" class="input-text full-width" placeholder="write message here"></textarea>
                                    </div>
                                    <style type="text/css">
                                        .btlong
                                        {
                                            background: #3498db;
                                            background-image: -webkit-linear-gradient(top, #3498db, #2980b9);
                                            background-image: -moz-linear-gradient(top, #3498db, #2980b9);
                                            background-image: -ms-linear-gradient(top, #3498db, #2980b9);
                                            background-image: -o-linear-gradient(top, #3498db, #2980b9);
                                            background-image: linear-gradient(to bottom, #3498db, #2980b9);
                                           -webkit-border-radius: 5;
                                           -moz-border-radius: 5;
                                            border-radius: 5px;
                                            font-family: Arial;
                                            color: #ffffff;
                                            font-size: 20px;
                                            padding: 6px ;
                                            text-decoration: none;
                                            padding: 6px;
                                            width:100%;
                                            border: none;
                                            outline: none;
                                        }
                                        .btlong:hover
                                        {
                                             background: #3cb0fd;
                                             background-image: -webkit-linear-gradient(top, #3cb0fd, #3498db);
                                             background-image: -moz-linear-gradient(top, #3cb0fd, #3498db);
                                             background-image: -ms-linear-gradient(top, #3cb0fd, #3498db);
                                             background-image: -o-linear-gradient(top, #3cb0fd, #3498db);
                                             background-image: linear-gradient(to bottom, #3cb0fd, #3498db);
                                             text-decoration: none;
                                        }
                                    </style>
                                    <input type="submit" value="Send Enquiry" name="Send"  class="btlong"  onClick="return validate()">
                                   <!-- <button type="submit" class="btn-large full-width">SEND MESSAGE</button>-->
                                    
                                    <input type="hidden" name="bcc" value="manoj0001@gmail.com">
                <input type="hidden" name="mailto" value="info@onerooftravel.com">
                <input type="hidden" name="redirurl" value="http://www.onerooftravel.com">
                <input type="hidden" name="website" value="http://www.onerooftravel.com">
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

   

