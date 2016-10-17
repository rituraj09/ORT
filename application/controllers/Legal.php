<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Legal extends CI_Controller {

   
    public function index()
    {
        $this->load->view('header');
        
        $this->load->view('contactus');
        $this->load->view('footer');
       
    }

        public function terms()
    {
        $this->load->view('header_internal');
        $this->load->view('terms');
        $this->load->view('footer_internal');
      

    }
        public function privacy()
    {
        $this->load->view('header_internal');
        $this->load->view('privacy');
        $this->load->view('footer_internal');
       

    }
}
