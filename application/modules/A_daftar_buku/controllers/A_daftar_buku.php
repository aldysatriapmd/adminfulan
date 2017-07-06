<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class A_daftar_buku extends MY_Controller{

    public function __construct(){
        parent::__construct();
        $logged_in = $this->session->userdata('logged_in');
        if($logged_in == "78jhk39") {
            $this->load->model('M_buku');
        }
        else {
            $this->session->set_flashdata('pesan', 'Silahkan Log In kembali !');
            redirect('login');
        }
    }

    public function index(){
        $this->halaman('V_daftar_buku');
    }

    	public function select_data_buku(){
    		$this->M_buku->select_data_buku();
    	}
        public function insert_data_buku(){
            $this->M_buku->insert_data_buku();
        }
        public function update_data_buku(){
            $this->M_buku->update_data_buku();
        }
        public function delete_data_buku(){
            $this->M_buku->delete_data_buku();
        }
        public function select_data_pencarian(){
            $this->M_buku->select_data_pencarian();

        }
}

?>