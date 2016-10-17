<?php include("header.php");?>


        <div class="page-title-container">
            <div class="container">
                <div class="page-title pull-left">
                    <h2 class="entry-title">Thanks</h2>
                </div>
                <ul class="breadcrumbs pull-right">
                    <li><a href="index.php">HOME</a></li>
                    <li class="active">Thanks</li>
                </ul>
            </div>
        </div>

        <section id="content">
            <div class="container">
                <div id="main">
                    <div class="large-block image-box style6">
                        <article class="box">
                            <figure class="col-md-5">
                                <!--<a href="#" title="" class=""><img class="middle-item" src="images/shortcodes/image-box/style06/1.png" alt="" width="476" height="624" />-->
                                </a>
                            </figure>
                            <div class="details col-md-12">
                                <h4 class="box-title">Thanks For Enquiry</h4>
                                <p>
                               <div style="text-align:center">
                                 <?php echo $msg;?>
                        </div>
                                </p>
                            </div>
                        </article>
                        
                        
                        
                    </div>
                </div>
            </div>
        </section>  
    <?php
//print_r ($_POST);
 $sendTo = "info@onerooftravel.com";
 $subject = "Enquiry submitted.";

 $headers = "From: " . $_POST["cname"] ." <" . $_POST["email"] .">\r\n";
 $headers .= "Reply-To: " . $_POST["email"] . "\r\n";
 $headers .= "Return-path: " . $_POST["email"];

//$message = $_POST["strindus"];

$message  = "Name           : " . $_POST["cname"] ."\r\n";
$message .= "Mobile No.   : " . $_POST["mobile"] ."\r\n";
//$message .="Address        : " . $_POST["add"] ."\r\n";
$message .="Email          : " . $_POST["email"] ."\r\n";
$message .="No. Of Passanger        : " . $_POST["passanger"] ."\r\n";
$message .="Departure City          : " . $_POST["departure"] ."\r\n";
$message .="Departure Date   : " . $_POST["d_date"] ."\r\n";
$message .="Return City          : " . $_POST["return"] ."\r\n";
$message .="Return Date       : " . $_POST["r_date"] ."\r\n";
$message .="Message        : " . $_POST["feed"] ."\r\n";

//$message .="Country      : " . $_POST["strcont"] ."\r\n";

//$message .="Website        : " . $_POST["strurl"] ."\r\n";
//$message .="Query          : " . $_POST["strmsg"] ."\r\n";
		
		//echo $sendTo;
		//echo $subject;
		//echo $message;
		//echo $headers;
		if (mail($sendTo, $subject, $message, $headers))
		{
			$msg= "<b><font color=#FF0000>Your information has been received!</b></font>\n";
			//die('---1---');
			//echo "Click here to <a href="index.php">Go Back</a>";
			}
		else 
		{
			$msg= "<b><font color=#FF0000>Message error!</b></font>";
			//die('---2---');
		}
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
