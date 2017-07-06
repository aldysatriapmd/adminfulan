<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class A_sejarah  extends MY_Controller{

    public function __construct(){
        parent::__construct();
        $logged_in = $this->session->userdata('logged_in');
        if($logged_in == "78jhk39") {
            $this->load->model('M_sejarah');
        }else {
            $this->session->set_flashdata('pesan', 'Silahkan Log In kembali !');
            redirect('login');
        }
    }

    public function index(){
        $this->halaman('V_daftar_sejarah');
    }

        public function select_data_sejarah(){
            $this->M_sejarah->select_data_sejarah();
        }
        public function update_data_sejarah(){
            $this->M_sejarah->update_data_sejarah();
        }


}
?>