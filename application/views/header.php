<!DOCTYPE html>
<html> 
<head>
    <!-- Page Title -->
    <title>One Roof Travel</title>
    <link rel="icon" href="assets/images/fav.png" type="image/gif" sizes="16x16">
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="keywords" content="Flight Booking, Cheap Fight Booking" />
    <meta name="description" content="onerooftravel is a one-stop solution to all your travel needs across the world.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">



    <link rel="stylesheet" href="assets/css/custom.css">

    <!-- Responsive Styles -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/owl-carousel/owl.carousel.css">

    <!-- Default Theme -->
    <link rel="stylesheet" href="assets/owl-carousel/owl.theme.css">
    
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<script src="assets/js/jquery.firstVisitPopup.min.js"></script>
    <script src="assets/owl-carousel/owl.carousel.js"></script>
	<script>
    jQuery(document).ready(function($) {

  $('#my-welcome-message').firstVisitPopup({
            cookieName : 'onerooftravell1',
            showAgainSelector: '#show-message'
        });

         $.post("mainpage/getUserData",{}, function(data){



            //alert(data);
            //$('#oneRoofUserName').html("Hello " + obj.name);
            if(!data==""){
                var obj={};
                obj = JSON.parse(data);


                $("#modL").hide();
                $("#modR").hide();
                $('#oneRoofUserName').html("Hello "+obj.name);
               // $('#oneRoofUserName').html("Hello " + data.name);
            }

        });

        $('#btnRegister').click(function(){
           /* alert();
            return false; */
            $('#errReg').text('');
            var name= $('#inputName3').val();
            var emailid= $('#inputEmail3').val();
            if(!isEmail(emailid)){
                $('#errReg').html("Invalid Email Id");
                return false;
            }
            var password=$('#inputPassword3').val();
            //alert(emailid + password);
            // $('#errLog').text(emailid);
            $('#inputEmail3').val('');
            $('#inputPassword3').val('');
            $.post("registration/register",{email:emailid, password:password, name:name }, function(data){

                if(data==1){
                    window.location.href='https://www.onerooftravel.com';
                }
                else{
                    $('#errReg').html(data);
                }

                // $('#errReg').html(data);
               /* if(data==1){
                    window.location.href="thank_you";
                } */
            });

        });
        $('#btnLogin').click(function(){
            $('#errLog').text('');
            var emailid= $('#inputEmail4').val();
            var password=$('#inputPassword4').val();
            if(!isEmail(emailid)){
                $('#errLog').html("Invalid Email Id");
                return false;
            }
            //alert(emailid + password);
            // $('#errLog').text(emailid);
            $('#inputEmail4').val('');
            $('#inputPassword4').val('');
            $.post("registration/login",{email:emailid, password:password }, function(data){
                var obj={};
                obj = JSON.parse(data);
               // alert(obj.opt);
                if(obj.opt==1){
                 //alert("hello");
                    window.location.href='https://www.onerooftravel.com';
                }
                else{
                    $('#errLog').html(obj.opt);
                }
               // $('#errLog').html(obj.opt);
                /* if(data==1){
                 window.location.href="thank_you";
                 } */
            });
        });
        function isEmail(Mail)
        {
            Mail=Mail.toLowerCase();
            return (Mail.search(/^([a-z]+)([a-z0-9\-\_\.]{1,100})([a-z0-9]+)\@([a-z0-9]+)([a-z0-9\-\.]*)([a-z0-9]+)\.([a-z]{2,6})$/) != -1);
        }
        $("#owl-demo").owlCarousel({

            autoPlay: 3000, //Set AutoPlay to 3 seconds

            items : 1,
            itemsDesktop : [1199,3],
            itemsDesktopSmall : [979,3],
            singleItem:true

        });


});
</script>
<script type="application/ld+json"> {
                    "@context" : "https://schema.org",
                    "@type" : "TravelAgency",
                    "description": "Flight Booking, Cheap Fight Booking",
                    "address" : {
                    "@type": "PostalAddress",
                    "addressLocality": "EVANSVILLE",
                    "addressRegion": "Indiana",
                    "postalCode": "47715",
                    "streetAddress": "1309 CAROUSEL COURT" },
                    "name":"onerooftravel",
                    "url":"https://www.onerooftravel.com",
                    "logo": "https://www.onerooftravel.com/assets/images/logo.png",
                    "openingHours": [
                    "Mo-Sa 10.00- 18.00"],
                    "paymentAccepted":"Visa, Master Card, Discover, Amex, PayPal, moneybookers",
                    "founder":"Mousumi Borah",
                    "sameAs" : [ "http://www.facebook.com/onerooftravel"]
   
                    
                    } </script>

<!--Start of Zopim Live Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
$.src="//v2.zopim.com/?4BsaulagoHiZ8tWYlUV9MR4lqdMqZ3rs";z.t=+new Date;$.
type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
</script>
<!--End of Zopim Live Chat Script-->
<!-- Start of flight booking scripts -->
    <script type="text/javascript">
        function showMulti(num){
            var next= num+1;
            $('.rem_flight'+num).hide();
            $('.add_flight'+num).hide();
            $('.air_flight_'+next).slideDown();
        }
        function hideMulti(num){
            var prev= num-1;
            $('.air_flight_'+num).slideUp();
            $('.rem_flight'+prev).show();
            $('.add_flight'+prev).show();
        }
        $(document).ready(function() {
            $('#rs_search_multi').searchbox({
                refid:7778,
                environment: "prod",
                hotel:{
                    elements:{
                        chk_in:".rs_chk_in, .rs_chk_in_calendar, .rs_date_chk_in",
                        chk_out:".rs_chk_out, .rs_chk_out_calendar, .rs_date_chk_out",
                        chk_in_display:".rs_date_chk_in",
                        chk_out_display:".rs_date_chk_out"
                    },
                    calendar:{
                        output_format:"<div class='rs_mobi_chk_day'>[d]</div><div class='rs_mobi_chk_month'>[F]</div>"
                    },
                    select_name:true
                },
                car:{
                    elements:{
                        chk_in:".rs_chk_in, .rs_chk_in_calendar, .rs_date_chk_in",
                        chk_out:".rs_chk_out, .rs_chk_out_calendar, .rs_date_chk_out",
                        chk_in_display:".rs_date_chk_in",
                        chk_out_display:".rs_date_chk_out",
                    },
                    calendar:{
                        output_format:"<div class='rs_mobi_chk_day'>[d]</div><div class='rs_mobi_chk_month'>[F]</div>"
                    },
                    select_name:true
                },
                air:{
                    elements:{
                        chk_in:".rs_chk_in, .rs_mobi_in, .rs_chk_in_calendar",
                        chk_out:".rs_chk_out, .rs_mobi_out, .rs_chk_out_calendar",
                        chk_in_display:".rs_mobiin",
                        chk_in1_display:".rs_mobi1",
                        chk_out_display:".rs_mobiout",
                        adults:".rs_adults_input",
                        children:".rs_child_input"
                    },
                    calendar:{
                        output_format:"<div class='rs_mobi_chk_day'>[d]</div><div class='rs_mobi_chk_month'>[F]</div>"
                    },
                    select_name:true
                },
                vp:{
                    elements: {
                        chk_in:".rs_chk_in, .rs_chk_in_calendar, .rs_date_chk_in",
                        chk_out:".rs_chk_out, .rs_chk_out_calendar, .rs_date_chk_out",
                        chk_in_display:".rs_date_chk_in",
                        chk_out_display:".rs_date_chk_out",
                    },
                    calendar: {
                        output_format:"<div class='rs_mobi_chk_day'>[d]</div><div class='rs_mobi_chk_month'>[F]</div>"
                    },
                    select_name:true
                }
            });

            if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {

                $("<link/>", {
                    rel: "stylesheet",
                    type: "text/css",
                    href: "assets/flight/css/mobile_search.css"
                }).appendTo("head");
            }

            $('#different_return').click(function(){
                $(".rs_droppff_div").toggle();
                $('.rs_pickup_div').toggleClass('rs_car_half');
                $('.rs_droppff_div').toggleClass('rs_car_half');
                $('.rs_search').toggleClass('rs_search_border_radius');
            });
            $('.round-trip').click(function(){
                $('#air_round_trip').show();
                $('#air_one_way').hide();
                $('#air_multi_dest').hide();
            });
            $('.one-way').click(function(){
                $('#air_round_trip').hide();
                $('#air_one_way').show();
                $('#air_multi_dest').hide();
            });
            $('.multi-city').click(function(){
                $('#air_round_trip').hide();
                $('#air_one_way').hide();
                $('#air_multi_dest').show();
            });
            var $icons = $('.rs_tabs');
            $icons.click(function(){
                $icons.removeClass('highlight_tab');
                $(this).addClass('highlight_tab');
            });
            var $air_options = $('.rs_air_option');
            $air_options.click(function(){
                $air_options.removeClass('rs_air_highlight');
                $(this).addClass('rs_air_highlight');
            });
        });
    </script>
<!--    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>-->

    <link rel="stylesheet" type="text/css" href="assets/flight/css/rs_searchbox.css">
    <link rel="stylesheet" type="text/css" href="assets/flight/css/rs_calendar_style.css">
    <!--    <link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>-->
    <script type="text/javascript" src="https://secure.rezserver.com/public/js/searchbox/searchbox.min.js"></script>
    <!-- End of flight booking scripts -->
   <!--Google Fonts-->
       <link rel="stylesheet" href="assets/css/style001.css" type="text/css" media="all">
<link href='//fonts.googleapis.com/css?family=Roboto:400,500,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>

<!-- slider new-->
   
        <style>
            #head{height:630px; width:100%; }
            #head #copy {position:absolute; top:140px; text-align:center; width:100%;}
            #head #copy h1 {font-size:58px;padding-bottom:25px;}
            #head #copy h4 { font-size:26px; line-height:28px;}
            #head #copy h1, #head #copy h4 {width:600px; margin: 0 auto;color: #FFFFF0; text-shadow: 5px 5px 12px rgba(0, 0, 0, 0.64);}
            #main{width:100%; }
            #main #center{width:660px; margin: 0 auto;  }
            #main #center h4{ text-align:center; margin-top:20px; font-size:21px; line-height:23px;}
            #main #center p {margin-bottom:20px;}
        </style>
        <link rel="stylesheet" href="assets/slidernew/loading_img.css">
        <!-- slider new end-->
<!--google fonts-->
</head>
<body>
<div class="top-header">
    <div class="container">
        <div class="top-header-main" >
            <div class="col-md-8 header-address">
                <ul>
                    <li><span class="phone"> </span> <h6>Toll Free : +1 - 844 - 404 - 0098</h6></li>
                   
                </ul>
            </div>
            <div class="col-md-4 top-social" >
                <ul>
                    <li class="right-l" ><a data-toggle="modal" data-target="#modalLogin" href="#"> Login </a> </li> 
                    <li><a  data-toggle="modal" data-target="#modalRegister" href="#">Register</a></li>
                </ul>
            </div>
            
          <div class="clearfix"> </div>
        </div>
    </div>
</div>



<!-- NAVBAR ================================================== -->
<div class="header w3l" style="background-color: #cae1ef;">
    <div class="fixed-header"  >

            <div class="navbar-wrapper">
              <div class="container">
                <nav class="navbar navbar-inverse navbar-static-top"  style="background-color: #cae1ef;">
                     <div class="navbar-header"  style="background-color: #cae1ef;">
                          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                          </button>
                          <div class="logo" >
                           <!--    <h1><a class="navbar-brand" href="index.html">One Roof Travel</a></h1>-->
                           <a class="navbar-brand" href="https://www.onerooftravel.com"><img src="assets/images/logo.png" alt="One roof Travel logo" title="One roof Travel" ></a>
                          </div>
                      </div>
                    <div id="navbar" class="navbar-collapse collapse" style="background-color: #cae1ef">
                    <nav class="cl-effect-16" id="cl-effect-16" style="background-color: #cae1ef">
                      <ul class="nav navbar-nav">
                       <li><a class="active" href="https://www.onerooftravel.com" data-hover="Home">Home</a></li>
                        <li><a href="articles/aboutus" data-hover="About">About Us</a></li>
                        <li><a href="articles/cheap_flights" data-hover="Cheap Flights">Cheap Flights</a></li>
                        <li><a href="articles/hotels" data-hover="Hotels">Hotels</a></li>
                        <li><a href="flight_booking/group_flight" data-hover="Group Flight">Group Flight</a></li>
                        <li><a href="articles/car_rental" data-hover="Car Rental">Car Rental</a></li>
                        <li><a href="articles/vacation_packages" data-hover="Vacation Packages">Vacation Packages</a></li>
                        <li><a href="articles/travel_insurance" data-hover="Trip Insurance">Trip Insurance</a></li>
                        <li><a href="contact_us" data-hover="Contact">Contact</a></li>                        
                      </ul>
                    </nav>

                    </div>
                    <div class="clearfix"> </div>
                     </nav>
                  </div>
                   <div class="clearfix"> </div>
            </div>
     </div>
</div>
<!--header end here-->



<!-- <div id="page-wrapper">
        <header id="header" class="navbar-static-top">
            <div class="topnav hidden-xs">
                <div class="container" >
                    <span class="login-span-left"></span>
                    <div style="padding: 5px 0px 5px 0px;" style="font-family: Verdana;">
                    <span id="modR" class="login-span-right">  <a  data-toggle="modal" data-target="#modalRegister" href="#">Register</a></span>
                    <span id="modL" class="login-span-right"> <a data-toggle="modal" data-target="#modalLogin" href="#"> Login </a> | </span>
                    </div>
                    <span id="oneRoofUserName" class="login-span-right"> </span>
                </div>
            </div>

            <div class="main-header">

                <a href="#mobile-menu-01" data-toggle="collapse" class="mobile-menu-toggle">
                    Mobile Menu Toggle
                </a>

                <div class="container">
                    <h1 class="logo navbar-brand img-responsive">
                        <a href="https://www.onerooftravel.com" title="">
                            <img src="assets/images/logo.png" alt="" />
                        </a>
                    </h1>

                    <nav id="main-menu" role="navigation">
                        <ul class="menu">
                           
                            <li class="">
                                <a href="articles/aboutus">about Us</a>
                                
                            </li>
                            <li class="">
                                <a href="articles/cheap_flights">cheap Flights</a>
                                
                            </li>
                            <li class="">
                                <a href="articles/hotels">hotels</a>
                                
                            </li>
                            <li class="">
                                <a href="flight_booking/group_flight">Group flight</a>
                                
                            </li>
                            <li class="menu-item-has-children">
                                <a href="articles/car_rental">Car Rental</a>

                            </li>
                            <li class="menu-item-has-children">
                                <a href="articles/vacation_packages">Vacation Packages</a>

                            </li>
                            <li class="">
                                <a href="articles/travel_insurance">Trip Insurance</a>
                            </li>
                           
                            <li class="menu-item-has-children">
                                <a href="contact_us">Contact Us</a>
                                
                            </li>
                           
                        </ul>
                    </nav>
                </div>
                
                <nav id="mobile-menu-01" class="mobile-menu collapse">
                    <ul id="mobile-primary-menu" class="menu">
                        <li class="">
                            <a href="articles/aboutus">about Us</a>

                        </li>
                        <li class="">
                            <a href="articles/cheap_flights">cheap Flights</a>

                        </li>
                        <li class="">
                            <a href="articles/hotels">hotels</a>

                        </li>
                        <li class="">
                            <a href="flight_booking/group_flight">Group flight</a>

                        </li>
                        <li class="menu-item-has-children">
                            <a href="articles/car_rental">Car Rental</a>

                        </li>
                        <li class="menu-item-has-children">
                            <a href="articles/vacation_packages">Vacation Packages</a>

                        </li>
                        <li class="">
                            <a href="articles/travel_insurance">Trip Insurance</a>
                        </li>

                        <li class="menu-item-has-children">
                            <a href="contact_us">Contact Us</a>

                        </li>
                    </ul>
                    
                    
                </nav>
            </div>

                        
        </header>-->
