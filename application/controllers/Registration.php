<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('signup_model');
    }

    public function index()
    {
       // $this->output->cache(10);
        $this->load->view('header_internal');
       // $this->load->view($pages);
        //$this->load->view('disqus');
        $this->load->view('footer_internal');

    }
    public function user_login()
    {
        // $this->output->cache(10);
        $this->load->view('header_internal');
        $this->load->view('login_admin');
        // $this->load->view($pages);
        //$this->load->view('disqus');
        //$this->load->view('footer_internal');

    }
    public function user_register()
    {
        // $this->output->cache(10);
        $this->load->view('header_internal');
        $this->load->view('login_form');
        // $this->load->view($pages);
        //$this->load->view('disqus');
        //$this->load->view('footer_internal');

    }
    public function register(){
        if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])) {
            $name = $_POST['name'];
            $email = strtolower($_POST['email']);
            $pass = $_POST['password'];
            $password = md5($pass);
            $user_type = 'normal';
            $ip = $_SERVER['REMOTE_ADDR'];
            $activated_user = md5(uniqid(rand(), true));
            $update_time_new_pass = date('Y-m-d h:m:s');
            $checking_query = $this->signup_model->checkEmail($email);
            if ($checking_query > 0) {
                die("$email is already registered.");
            } else {
                $data = array(

                    'name' => $name,
                    'emailid' => $email,
                    'password' => $password,
                    'activated_user' => $activated_user,
                    'ts' => $update_time_new_pass,
                    'update_pass_time' => $update_time_new_pass,
                    'ip' => $ip,
                    'user_type' => $user_type
                );

                //  echo $data['emailid'];
                

                $insertion = $this->signup_model->insertUser($data);
                // echo $insertion;
                if ($insertion > 1) {
                    /*   $s=$_SERVER['REQUEST_URI'];
                       $a=explode('/',"$s");
                       $a[count($a)-1]="activate";
                       $a=implode('/',$a);
                       $message='<table width="600px" border="0" cellspacing="0" cellpadding="0">
                     <tr style="background-color:#003300">
                       <td height="47"><span style="color:#FFF; font-size:25px; font-family:
                   Comic Sans MS, cursive; font-weight:bold">DevelopMyNation</span>
                       </td>
                     </tr>
                   </table>'."<br>";
                         $message.="Hello"." ".$name.","."<br/>";


                         $message.= "Thank you for showing your interest towards building India - a developed nation.<br/>".
                                    "DevelopMyNation is the social utility shaped with a vision to bind the entire<br/>".
                                    "citizen of India together in a common platform and to let every Indian experience<br/>".
                                    "the real taste of democracy"."<br/>";


                         $message .= "<a href=". "http://".$_SERVER['HTTP_HOST']."$a?email=".urlencode($email)."&key=$activated_user>
                                      Click Here</a>"." "."to activate your Account";


                         $headers = "MIME-Version: 1.0" . "\r\n";
                         $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
                         $headers .= 'From: (DevelopMyNation)support@developmynation.com' . "\r\n";
                         $body = "New Registration verification Mail Information";
                         $to = $email;
                         $m=mail($to,$body,$message,$headers); */

                    //if($m)
                    if ($insertion > 1) {

                       // $this->session->set_userdata('dmn_user', $insertion);
                        // echo "<script>window.location.href='register_next';</script>";
                         $this->load->library('email');
                        $to_email='info@onerooftravel.com';
                        $from_email = $email;
                        $message="Name: ".$name."|".
                            "Email: ". $email."|";
                        $this->email->from($from_email, $name);
                        $this->email->to($to_email);
                        $this->email->subject('New Registration');
                        $this->email->message($message);
                        $this->email->send();
                       echo "1";

                    } else {

                        echo "<b><span style=color:#2e2e2e>Whoa!!! there is a problem with the network.Try signing after some time</span></b>";

                    }
                } else {
                    echo "Error in the network";

                }
            }
        } else {
            echo "404 Error";
        }

    }
    public function login(){
        if(isset($_POST['email']) && isset($_POST['password']))
        {

            $email=strtolower($_POST['email']);
            $password=md5($_POST['password']);
            $result= $this->signup_model->getUsers($email, $password);
            echo json_encode(array('opt'=>$result));

        }

        else
        {
            echo json_encode(array('opt'=>'Something went wrong. We are looking into it'));
        }
    }
    public function admin_dashboard(){
       $this->load->view('admin_dashboard');
    }

    public function subscribe(){
        if(isset($_POST['email'])) {

            $email = strtolower($_POST['email']);
            $data=array(
                'emailid'=>$email
            );
            $insertion = $this->signup_model->insertSubscribe($data);
            echo $insertion;
        }

    }




}