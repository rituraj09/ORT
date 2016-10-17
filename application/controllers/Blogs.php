<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blogs extends CI_Controller {

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
    public function index($pages)
    {
        
        $this->output->cache(10);
        $this->load->view('header_internal');
        $this->load->view($pages);
        $this->load->view('disqus');
        $this->load->view('footer_internal');

    }
   /* public function adventure_travel()
    {
        $this->load->view('header_internal');
        $this->load->view('adventure_travel');
        $this->load->view('footer_internal');

    }
    public function travel_hacks()
    {
        $this->load->view('header_internal');
        $this->load->view('travel_hacks');
        $this->load->view('footer_internal');

    }
    public function tough_traveller()
    {
        $this->load->view('header_internal');
        $this->load->view('tough_traveller');
        $this->load->view('footer_internal');

    } */
}
