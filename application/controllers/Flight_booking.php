<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Flight_Booking extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('signup_model');
    }


    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        /*  $this->load->view('header');
         // $this->load->view('slider');
          $this->load->view('aboutus');
          $this->load->view('footer');
          //$this->load->view('pages/aboutus'); */

    }
    public function group_flight()
    {
        $this->load->view('header_internal');
        $this->load->view('group_flight');
        $this->load->view('footer_internal');

    }
    public function thank_you(){
        $this->load->view('header_internal');
        $this->load->view('thank_you');
        $this->load->view('footer_internal');
    }
    public function submitGroupBooking(){

        $cname= $_POST["cname"];
        $emailId= $_POST["email"];
        $mobile= $_POST["mobile"];
        $passanger= $_POST["passanger"];
        $departure= $_POST["departure"];
        $d_city= $_POST["d_city"];
        $r_city= $_POST["r_city"];
        $return_date= $_POST["return_date"];
        $feed= $_POST["feed"];
        $sendmail="ece.dhruv@gmail.com";

         $from_email = $emailId;
        $to_email = "info@onerooftravel.com";


$this->load->library('email');
        $message="Name: ".$cname ."|".
            "Email: ". $emailId."|".
            "Mobile:  ".$mobile."|".
            "Total Passenger:  ".$passanger."|".
            "Departure Date: ".$departure ."|".
            "Return Date: ".$return_date."|".
            "Departure City: ".$d_city."|".
            "Return City: ".$r_city."|".
            "Description: ".$feed."|";

        $this->email->from($from_email, $cname);
        $this->email->to($to_email);
        $this->email->subject('Group Booking Enquiry');
        $this->email->message($message);
        $this->email->send();


        

        /* $message="Hello";

         $message="Name: ".$cname ."<br/>".
              "Email: ". $email."<br/>".
              "Mobile:  ".$mobile."<br/>".
              "Total Passenger:  ".$passanger."<br/>".
              "Departure Date: ".$departure ."<br/>".
              "Return Date: ".$return_date."<br/>".
              "Departure City ".$d_city."<br/>".
              "Return City: ".$r_city."<br/>".
              "Description: ".$feed."<br/>";
          $headers = "MIME-Version: 1.0" . "\r\n";
          $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
          $headers .='From: (DevelopMyNation)support@developmynation.com' . "\r\n";
          $body = "Enquiry for Group Flight Booking";
          $to=$sendmail;
          mail($to,$body,$message,$headers); */

        $data = array(

            'name' => $cname,
            'emailId' => $emailId,
            'passenger' => $passanger,
            'mobile' => $mobile,
            'depart_date' => $departure,
            'depart_city' => $d_city,
            'return_city' => $r_city,
            'return_date' => $return_date,
            'feed' => $feed

        );
        $insertion =$this->signup_model->groupBooking($data);
        if($insertion>=1){
            echo "1";
        }



    }
}
