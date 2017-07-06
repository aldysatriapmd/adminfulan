<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class A_keterlambatan  extends MY_Controller{

    public function __construct(){
        parent::__construct();
        $logged_in = $this->session->userdata('logged_in');
        if($logged_in == "78jhk39") {
            $this->load->model('M_keterlambatan');
        }
        else {
            $this->session->set_flashdata('pesan', 'Silahkan Log In kembali !');
            redirect('login');
        }
    }

    public function index(){
        $this->halaman('V_daftar_keterlambatan');
    }

        public function select_data_keterlambatan(){
            $this->M_keterlambatan->select_data_keterlambatan();
        }


}
?>