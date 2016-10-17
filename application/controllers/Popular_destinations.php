<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Popular_Destinations extends CI_Controller {


    public function index($pages)
    {
       // $this->output->cache(10);
        $this->load->view('header_internal');
        $this->load->view($pages);
        $this->load->view('disqus');
        $this->load->view('footer_internal');

    }



}
