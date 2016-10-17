<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Articles extends CI_Controller {

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
        // $this->output->cache(10);
        $this->load->view('header_internal');
        $this->load->view('search_flight_template');
        $this->load->view($pages);
        $this->load->view('disqus');
        $this->load->view('footer_internal');     

 /*  $this->load->view('header');
       // $this->load->view('slider');
        $this->load->view('aboutus');
        $this->load->view('footer');
        //$this->load->view('pages/aboutus'); */

    }
   /* public function aboutus()
    {
        $this->load->view('header_internal');
        // $this->load->view('slider');
        $this->load->view('aboutus');
        $this->load->view('footer_internal');
        //$this->load->view('pages/aboutus');
    }
    public function cheap_flights()
    {
        $this->load->view('header_internal');
        $this->load->view('cheap_flights');
        $this->load->view('footer_internal');

    }
    public function hotels()
    {
        $this->load->view('header_internal');
        $this->load->view('hotels');
        $this->load->view('footer_internal');

    }
    public function travel_insurance()
    {
        $this->load->view('header_internal');
        $this->load->view('travel_insurance');
        $this->load->view('footer_internal');

    }
    public function car_rental()
    {
        $this->load->view('header_internal');
        $this->load->view('car_rental');
        $this->load->view('footer_internal');

    }
    public function vacation_packages()
    {
        $this->load->view('header_internal');
        $this->load->view('vacation_packages');
        $this->load->view('footer_internal');

    }
    public function honeymoon_destinations()
    {
        $this->load->view('header_internal');
        $this->load->view('honeymoon_destinations');
        $this->load->view('footer_internal');

    }
    public function indian_cusines()
    {
        $this->load->view('header_internal');
        $this->load->view('indian_cusines');
        $this->load->view('footer_internal');

    }

    public function incredible_india()
    {
        $this->load->view('header_internal');
        $this->load->view('incredible_india');
        $this->load->view('footer_internal');

    } */
   
}
