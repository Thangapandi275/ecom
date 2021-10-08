<?php
class Common_model extends CI_Model{
    public function __construct(){
        parent::__construct();
    }
    public function addinformations($table, $data_array){
        return $this->db->insert($table, $data_array);
    }
}