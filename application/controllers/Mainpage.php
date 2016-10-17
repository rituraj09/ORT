<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mainpage extends CI_Controller {

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
        // $this->output->cache(10);
         $this->load->view('header');
       //  $this->load->view('owlcarousel');
        //  $this->load->view('slider');
         // $this->load->view('slider_new');
       $this->load->view('banner');
        $this->load->view('search_flight');
        $this->load->view('main_page');
       // $this->load->view('disqus');
        $this->load->view('footer'); 
        //$this->load->view('pages/aboutus');

    }

    public function getUserData(){
        if($this->checkSession()){
            $uid=$this->session->userdata('uid');
            $name=$this->session->userdata('name');
            $emailid=$this->session->userdata('emailid');

            $data= array(
                'uid'=>$uid,
                'name'=>$name,
                'emailid'=>$emailid
            );
            echo json_encode($data);
        }
    }

    public function checkSession(){
        if($this->session->userdata('uid')) {
            return true;
        }
        else{
            return false;
        }
        /*else{
            redirect('mainpage','refresh');
        } */
    }
}
