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
				else if (document.form1.mobile.value.length<=10)
		  {
		       alert("Please Fill up the Telephone properly !\narea code - city code - telephone");
			document.form1.mobile.focus();				
			document.form1.mobile.select();
                        return(false);			
                  }
				else if ((document.form1.email.value.length<=7)||(document.form1.email.value.indexOf("@") == -1)||(document.form1.email.value.indexOf(".") == -1))
		  {
		       alert("Please Enter the proper email ID!");
			document.form1.email.focus();				
			document.form1.email.select();
                        return(false);			
                  }  
				  else if ((document.form1.passanger.value.length<5))
			{
		       alert("Please Enter proper Name!");
			document.form1.passanger.focus();				
			document.form1.passanger.select();
                        return(false);			
                  }
				  else if ((document.form1.d_city.value.length<5))
			{
		       alert("Please Enter proper Name!");
			document.form1.d_city.focus();				
			document.form1.d_city.select();
                        return(false);			
                  }
				  else if ((document.form1.departure.value.length<5))
			{
		       alert("Please Enter proper Name!");
			document.form1.departure.focus();				
			document.form1.departure.select();
                        return(false);			
                  }
				   else if ((document.form1.r_city.value.length<5))
			{
		       alert("Please Enter proper Name!");
			document.form1.r_city.focus();				
			document.form1.r_city.select();
                        return(false);			
                  }
				  else if ((document.form1.return.value.length<5))
			{
		       alert("Please Enter proper Name!");
			document.form1.return.focus();				
			document.form1.return.select();
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
                    <h2 class="entry-title">Group Flights</h2>
                </div>
                <ul class="breadcrumbs pull-right">
                    <li><a href="home">HOME</a></li>
                    <li class="active">Group Flights</li>
                </ul>
            </div>
        </div>

              <section id="content" class="white-bg">
            <div class="container">
                <div id="main">
                    <div class="col-md-9 no-float no-padding center-block">
                        <div class="intro text-center block">
                            <h2>Book A Group Flight</h2>
                            <p></p>
                        </div>
                         <form class="contact-form" action="thanx.php"  method="post" name="form1" id="form1">
                            <div class="row form-group">
                                <div class="col-xs-6">
                                    <label>Your Name</label>
                                    <input type="text"  name="cname" id="cname" value="<?php echo $cname?>" accept="must" class="input-text full-width">
                                </div>
                                <div class="col-xs-6">
                                    <label>Your Mobile</label>
                                    <input type="text" name="mobile" id="mobile" value="<?php echo $mobile?>" accept="must" class="input-text full-width">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-xs-6">
                                    <label>Email</label>
                                    <input type="text" name="email" id="email" value="<?php echo $email?>" accept="must" class="input-text full-width">
                                </div>
                                <div class="col-xs-6">
                                    <label>No. of Passanger</label>
                                    <input type="text" name="passanger" id="passanger" value="<?php echo $passanger?>" accept="must" class="input-text full-width">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-xs-6">
                                    <label>Departure City</label>
                                    <input type="text" name="d_city" id="d_city" value="<?php echo $d_city?>" accept="must" class="input-text full-width">
                                </div>
                                <div class="col-xs-6">
                                    <label>Departure Date</label>
                                    <input type="text" id="departure" name="departure" value="<?php echo $departure?>" class="input-text full-width">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-xs-6">
                                    <label>Return City</label>
                                    <input type="text"  name="r_city" id="r_city" value="<?php echo $r_city?>" accept="must" class="input-text full-width">
                                </div>
                                <div class="col-xs-6">
                                    <label>Return Date</label>
                                    <input type="text" id="return" name="return" value="<?php echo $return?>" class="input-text full-width">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="feed" id="feed" value="<?php echo $feed?>" accept="must" rows="6" class="input-text full-width" placeholder="write message here"></textarea>
                            </div>
                            <input type="submit" value="Send Enquiry" name="Send"  class="btn-large full-width" onClick="return validate()">
                           <!-- <button type="submit" class="btn-large full-width">SEND</button>-->
                            <input type="hidden" name="bcc" value="manoj0001@gmail.com">
                <input type="hidden" name="mailto" value="info@onerooftravel.com">
                <input type="hidden" name="redirurl" value="http://www.onerooftravel.com">
                <input type="hidden" name="website" value="http://www.onerooftravel.com">
                            
                            
                        </form>
                    </div>
                </div>
            </div>
           </section> 
        
        <?php include("footer.php");?>
        
    </div>