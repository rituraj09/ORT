<script type="text/javascript">
    function subscribe(){
        $('#errSub').text('');
        var subscr= $('#subscribeOneRoof').val();
        if(!isEmailId(subscr)){
            $('#errSub').html("Invalid Email Id");
            return false;
        }
        // alert(subscr);
        $.post("../registration/subscribe",{email:subscr}, function(data){

            if(data=1){
                $('#errSub').text("Thank you for Subscribing.");
            }
            else{
                $('#errSub').html("Error in the network");
            }

            /* if(data==1){
             window.location.href="thank_you";
             } */
            $('#subscribeOneRoof').val('');
        });
    }
    function isEmailId(Mail)
    {
        Mail=Mail.toLowerCase();
        return (Mail.search(/^([a-z]+)([a-z0-9\-\_\.]{1,100})([a-z0-9]+)\@([a-z0-9]+)([a-z0-9\-\.]*)([a-z0-9]+)\.([a-z]{2,6})$/) != -1);
    }
</script>

<footer id="footer">
    <div class="footer-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <h2>Discover</h2>
                    <ul class="discover triangle hover row">
                        <li class="col-xs-12"><a href="../articles/aboutus">ABOUT US</a></li>
                        <li class="col-xs-12"><a href="../legal/privacy">PRIVACY POLICY</a></li>
                        <li class="col-xs-12"><a href="../legal/terms">TERMS OF USE</a></li>
                        <li class="col-xs-12"><a href="../articles/travel_insurance">TRAVEL INSURANCE</a></li>
                        <li class="col-xs-12"><a href="../contact_us">CONTACT US</a></li>
                              </ul>
                                        <span><label>SUBSCRIBE TO OUR NEWSLETTER</label></span><br/>
                           <div>     <input class="form-control" type="text" value="" id="subscribeOneRoof" placeholder="Your Email Id" />
</div>
                              <p>  <input class="btn btn-primary" style="margin-top: 8px;" onclick="subscribe();" type="button" value="Submit" /></p>
                                 <span id="errSub"></span>
<!--                                <li class="col-xs-12"><a href="articlesss">ARTICLES</a></li>-->
                </div>
                <div class="col-sm-6 col-md-3">
                    <h2>Travel Blogs</h2>
                    <ul class="travel-news">
                        <li>
                            <div class="thumb">
                                <a href="#">
                                    <img src="../assets/images/new01.jpg" alt="" width="63" height="63" />
                                </a>
                            </div>
                            <div class="description">
                                <h5 class="s-title"><a href="https://onerooftravel.com/blogs/adventure_travel">Five destination for adventure travel </a></h5>
                                <small>Nothing is more enigmatic and adventurous than to visit places..</small>

                            </div>
                        </li>
                        <li>
                            <div class="thumb">
                                <a href="#">
                                    <img src="../assets/images/new02.jpg" alt="" width="63" height="63" />
                                </a>
                            </div>
                            <div class="description">
                                <h5 class="s-title"><a href="https://onerooftravel.com/blogs/travel_hacks">Travel hacks to save you time and money</a></h5>
                                <small>If you are a travel enthusiast and always looking for hacks..</small>

                            </div>
                        </li>
                        <li>
                            <div class="thumb">
                                <a href="#">
                                    <img src="../assets/images/new03.jpg" alt="" width="63" height="63" />
                                </a>
                            </div>
                            <div class="description">
                                <h5 class="s-title"><a href="https://onerooftravel.com/blogs/passionate_travelling">Passionate about travelling: Read this</a></h5>
                                <small>Someone rightly said, “The man who travels more, knows more.”..</small>

                            </div>
                        </li>
                        <li>
                            <div class="thumb">
                                <a href="#">
                                    <img src="../assets/images/new04.jpg" alt="" width="63" height="63" />
                                </a>
                            </div>
                            <div class="description">
                                <h5 class="s-title"><a href="https://onerooftravel.com/blogs/tough_traveller">Are you a tough traveller: Explore more</a></h5>
                                <small>Tough traveler? Doesn’t ring a bell..</small>

                            </div>
                        </li>

                    </ul>
                </div>
                <div class="col-sm-6 col-md-3">
                    <h2>Popular Destination</h2>
                    <ul class="discover triangle hover row">
                        <li class="col-xs-12"><a href="https://onerooftravel.com/popular_destinations/california">California Vacations</a></li>
                        <li class="col-xs-12"><a href="https://onerooftravel.com/popular_destinations/caribbean">Caribbean Vacations</a></li>
                        <li class="col-xs-12"><a href="https://onerooftravel.com/popular_destinations/florida">Florida Vacations</a></li>
                        <li class="col-xs-12"><a href="https://onerooftravel.com/popular_destinations/hawaii">Hawaii Vacations</a></li>
                        <li class="col-xs-12"><a href="https://onerooftravel.com/popular_destinations/las_vegas">Las Vegas Vacations</a></li>
                        <li class="col-xs-12"><a href="https://onerooftravel.com/popular_destinations/mexico">Mexico Vacations</a></li>
                    </ul>
                    <div align="center">

                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <h2>About One Roof Travel</h2>
                    <p>onerooftravel is a one-stop solution to all your travel needs across the world. As a travel agent, we assist you in choosing the right destination and take care of your travel related needs right from booking a deal with us...</p>
                    <br />
                    <address class="contact-details">
                        <span class="contact-phone"><img src="../assets/images/phone_icon_blue.png" />+1-844-404-0098</span>
                        <br />
                        <a href="mailto:info@onerooftravel.com" class="contact-email">info@onerooftravel.com</a>


                    </address>

                    <ul class="social-icons clearfix">
                        <p class="text-center"><b>we accept</b> </p> <img class="img-responsive" src="../assets/images/payment_methods.png" />
                        <!-- <li><a href="http://facebook.com/"><img src="../assets/images/facebook.png"</a></li>-->
                        <!--                              <li><a href="http://linkedin.com/"><i class="fa fa-linkedin"></i></a></li>-->
                        <!--                             <li><a href="http://twitter.com/"><i class="fa fa-twitter"></i></a></li>-->
                        <!--                             <li><a href="http://plus.google.com/"><i class="fa fa-google-plus"></i> </a></li>-->
                    </ul> <br/>
                                        <span><p><b>Let's Socialize</b></p>
 <a  href="https://www.facebook.com/OneRoofTravel/"><img height="30px" width="30px" src="../assets/images/facebook_logo.png"/></a>
                                                        <a href="https://plus.google.com/117931739287905395444"><img height="30px" width="30px" src="../assets/images/googleplus.png" /></a>
                                                       <!-- <a href="http://facebook.com/"><img height="30px" width="30px" src="../assets/images/linkedin.png" /></a>-->
                                                        <a href="http://facebook.com/"><img height="30px" width="30px" src="../assets/images/twitter.png" /></a></span>
                    <img height="30px" width="90px" src="../assets/images/siteverify.jpg" />

                </div>
            </div>
        </div>
    </div>
    <div class="bottom" >
        <div class="container">
            <div class="logo pull-left">
                <a href="https://www.onerooftravel.com" title="">
                    <img src="../assets/images/logo.png" alt=""  />
                </a>
            </div>
            <div class="pull-right">
                <a id="back-to-top" href="#" class="animated" data-animation-type="bounce"><i class="fa fa-arrow"></i></a>
            </div>
            <div class="copyright pull-right">
                <p>&copy; 2016 One Roof Travel
                </p>
            </div>
        </div>
    </div>

    <!--            <div class="container">-->
    <!--                <div class="row">-->
    <!--                    <div class="col-sm-12 col-md-12">-->
    <!--                        <img src="../assets/images/payment_methods.png" />-->
    <!--                    </div>-->
    <!--                 </div>-->
    <!--                </div>-->
</footer>
</div>
<script type="text/javascript" src="../assets/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="../assets/js/jquery.noconflict.js"></script>
<script type="text/javascript" src="../assets/js/modernizr.2.7.1.min.js"></script>
<script type="text/javascript" src="../assets/js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="../assets/js/jquery.placeholder.js"></script>
<script type="text/javascript" src="../assets/js/jquery-ui.1.10.4.min.js"></script>

<!-- Twitter Bootstrap -->
<script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>

<!--                     <script type="text/javascript" src="../assets/components/jquery.bxslider/jquery.bxslider.min.js"></script>-->

<!-- parallax -->
<script type="text/javascript" src="../assets/js/jquery.stellar.min.js"></script>

<!-- waypoint -->
<script type="text/javascript" src="../assets/js/waypoints.min.js"></script>

<!-- load page Javascript -->
<script type="text/javascript" src="../assets/js/theme-scripts.js"></script>
<script type="text/javascript" src="../assets/js/scripts.js"></script>


</div>

<!-- Google Code for Remarketing Tag -->
<!--------------------------------------------------
Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. See more information and instructions on how to setup the tag on: http://google.com/ads/remarketingsetup
--------------------------------------------------->
<script type="text/javascript">
    /* <![CDATA[ */
    var google_conversion_id = 958604661;
    var google_custom_params = window.google_tag_params;
    var google_remarketing_only = true;
    /* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
    <div style="display:inline;">
        <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/958604661/?value=0&amp;guid=ON&amp;script=0"/>
    </div>
</noscript>

<!-- <script type="text/javascript" src="//userlike-cdn-widgets.s3-eu-west-1.amazonaws.com/f6025ffd12a2f12104ab6eaf469c1276bce76a6adc859878d2f253282dadd2f7.js"></script> -->
<!-- <script type="text/javascript" async="async" defer="defer" data-cfasync="false" src="https://mylivechat.com/chatinline.aspx?hccid=41942977"></script> -->
</body>
</html> 