<?php
class Login extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('login_model');
    }
    public function index(){
        $this->load->view('templates/header');
        $this->load->view('login_view');
        $this->load->view('templates/subscribe');
        $this->load->view('templates/footer');
    }
    public function registeruser(){
        $fnameObj = $this->input->post('fname');
        $lnameObj = $this->input->post('lname');
        $emailObj = $this->input->post('email');
        $passwordObj = $this->input->post('password');
        $dataarr  = array(
            'fname' => $fnameObj, 
            'lname' => $lnameObj, 
            'email' => $emailObj, 
            'password' => $passwordObj,
            'keep_active' => 0,
            'added' => time()
        );
        $users_responseObj = $this->common_model->addinformations('ec_users', $dataarr);
        if($users_responseObj){
            $this->session->set_flashdata('success', 'Hurray..! Register Success...');
        }else{
            $this->session->set_flashdata('error', 'Oops..! Register Failed...');
        }
        echo $users_responseObj;
    }

    public function userlogincheck(){
        $emailObj = $this->input->post('email');
        $passwordObj = $this->input->post('password');
        $this->login_model->getuserinfo($emailObj);
    }

}