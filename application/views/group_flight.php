<script language="javascript">
function validate(){

			var cname = $("#cname").val();
            var mobile = $("#mobile").val();
            var email = $("#email").val();
            var passanger = $("#passanger").val();
            var departure = $("#departure").val();
            var d_city = $("#d_city").val();
            var r_city = $("#r_city").val();
            var return_date = $("#return").val();
            var feed = $("#feed").val();

    $("#reportError").text("");
           if(cname==""){
               $("#reportError").text("Name field cannot be empty");
               return false;
           }
            else if(mobile.length<10){
                        $("#reportError").text("Please Fill up the Telephone properly !\narea code - city code - telephone");
                        return false;
                    }
            else if(!isEmail(email)){
                $("#reportError").text("Please Enter a valid Email");
                return false;
            }
           else{
               $.post("submitGroupBooking",{cname:cname,mobile:mobile, email:email, passanger:passanger, departure:departure,d_city:d_city, r_city: r_city,return_date:return_date,feed:feed }, function(data){

                   $("#reportError").html(data);
                   if(data==1){
                       window.location.href="thank_you";
                   }
               });
           }
}
function isEmail(Mail)
        {
            Mail=Mail.toLowerCase();
            return (Mail.search(/^([a-z]+)([a-z0-9\-\_\.]{1,100})([a-z0-9]+)\@([a-z0-9]+)([a-z0-9\-\.]*)([a-z0-9]+)\.([a-z]{2,6})$/) != -1);
        }


    </script>
        <div class="page-title-container">
            <div class="container">
                <div class="page-title pull-left">
                    <h2 class="entry-title">Group Flights</h2>
                </div>
                <ul class="breadcrumbs pull-right">
                    <li><a href="../">HOME</a></li>
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
                         <form class="contact-form" action="#"  method="post" name="form1" id="form1">
                            <div class="row form-group">
                                <div class="col-xs-6">
                                    <label>Your Name</label>
                                    <input type="text"  name="cname" id="cname"  accept="must" class="input-text full-width">
                                </div>
                                <div class="col-xs-6">
                                    <label>Your Mobile</label>
                                    <input type="text" name="mobile" id="mobile" accept="must" class="input-text full-width">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-xs-6">
                                    <label>Email</label>
                                    <input type="text" name="email" id="email"  accept="must" class="input-text full-width">
                                </div>
                                <div class="col-xs-6">
                                    <label>No. of Passanger</label>
                                    <input type="text" name="passanger" id="passanger"  accept="must" class="input-text full-width">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-xs-6">
                                    <label>Departure City</label>
                                    <input type="text" name="d_city" id="d_city"  accept="must" class="input-text full-width">
                                </div>
                                <div class="col-xs-6">
                                    <label>Departure Date</label>
                                    <input type="text" id="departure" name="departure"  class="input-text full-width">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-xs-6">
                                    <label>Return City</label>
                                    <input type="text"  name="r_city" id="r_city"  accept="must" class="input-text full-width">
                                </div>
                                <div class="col-xs-6">
                                    <label>Return Date</label>
                                    <input type="text" id="return" name="return"  class="input-text full-width">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="feed" id="feed"  accept="must" rows="6" class="input-text full-width" placeholder="write message here"></textarea>
                            </div>
                            <input type="button" value="Send Enquiry" name="Send"  class="btn-large full-width" onClick="return validate()">
                            <span style="color: red;" id="reportError"></span>
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
        
