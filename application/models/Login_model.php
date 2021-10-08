<?php
class Login_model extends CI_Model{
    public function __construct(){
        parent::__construct();
    }
    public function getuserinfo($emailObj){
        $this->db->set_dbprefix('ec_');
        $this->db->get('users');
    }
}