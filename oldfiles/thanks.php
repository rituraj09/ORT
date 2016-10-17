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
		
		//echo $sendTo;
		//echo $subject;
		//echo $message;
		//echo $headers;
		if (mail($sendTo, $subject, $message, $headers))
		{
			$msg= "<b><font color=#FF0000>Thanks for Submitting Your Enquiry.<br>
                        Our Executive will contact you Shortly..</b></font>\n";
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
        <?php include("footer.php");?>
        
    