<?php
class About_controller extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }
    public function index(){
        $this->load->view('templates/header');
        $this->load->view('about_view');
        $this->load->view('templates/subscribe');
        $this->load->view('templates/footer');
    }
}