<?php include("header.php");?>
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
                    <li><a href="index.php">HOME</a></li>
                    
                    <li class="active">Contact Us</li>
                </ul>
            </div>
        </div>

        <section id="content">
            <div class="container">
                <div id="main">
                    <div class="">
                    <iframe src="https://www.google.com/maps/d/embed?mid=1w93a6j1ZV5tdCqawOLzHKNCDUaw" width="100%" height="480"></iframe>
                   
                    </div>
                    <div class="row">
                        <div class="col-sm-4 col-md-3">
                            <div class="travelo-box contact-us-box">
                                <h4>Contact us</h4>
                                <ul class="contact-address">
                                    <li class="address">
                                        <i class="fa fa-home"></i>
                                        <h5 class="title">Address</h5>
                                        <p>1301 CAROUSEL COURT,</p>
                                        <p>EVANSVILLE INDIANA 47715 USA</p>
                                    </li>
                                    <li class="phone">
                                        <i class="fa fa-phone"></i>
                                        <h5 class="title">Phone</h5>
                                        <p>Phone: +1-844-404-0098</p>
                                        
                                    </li>
                                    <li class="email">
                                        <i class="fa fa-envelope"></i>
                                        <h5 class="title">Email</h5>
                                        <p style="text-transform:lowercase"><a href="mailto:info@onerooftravel.com">info@onerooftravel.com</a></p>
                                       <p style="text-transform:lowercase">www.onerooftravel.com</p>
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
                                            <input type="text" name="cname" id="cname" value="<?php echo $cname?>" accept="must" class="input-text full-width">
                                        </div>
                                        <div class="col-xs-6">
                                            <label>Your Email</label>
                                            <input type="text" name="email" id="email" value="<?php echo $email?>" accept="must" class="input-text full-width">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Your Message</label>
                                        <textarea name="feed" id="feed" value="<?php echo $feed?>" accept="must" title="Enquiry" rows="6" class="input-text full-width" placeholder="write message here"></textarea>
                                    </div>
                                    <input type="submit" value="Send Enquiry" name="Send"  class="btn-large full-width" onClick="return validate()">
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
        <?php include("footer.php");?>
    </div>
  
   

