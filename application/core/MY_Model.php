<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Model extends CI_Model{

	public function __construct(){
            parent::__construct();
    }

    /*
    |----------------------------------------------------
    |                  PROSES CRUD
    |----------------------------------------------------
    */
    public function select_data($table,$field){
        $this->db->order_by($field,'DESC');
        return $this->db->get($table)->result_array();
    }

    public function select_data_edit($table,$field){
        $id = $this->uri->segment(3);
        $this->db->where($field,$id);
        return $this->db->get($table)->row_array();
    }
    public function delete_data($table,$field){
        $val = json_decode(file_get_contents('php://input'));
        $this->db->where($field,$val->id);
        $this->db->delete($table);
    }
}