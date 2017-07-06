<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class A_keanggotaan extends MY_Controller{

    public function __construct(){
        parent::__construct();
        $logged_in = $this->session->userdata('logged_in');
        if($logged_in == "78jhk39") {
            $this->load->model('M_keanggotaan');
        }
        else {
            $this->session->set_flashdata('pesan', 'Silahkan Log In kembali !');
            redirect('login');
        }
    }

    public function index(){
        $this->halaman('V_keanggotaan');
    }
    public function view_input_keanggotaan(){
        $this->halaman('V_insert_keanggotaan');
    }
    public function view_edit_keanggotaan(){
        $data['data'] = $this->M_keanggotaan->view_data_edit_keanggotaan();
        $this->load->view('A_dashboard/V_header');
        $this->load->view('V_update_keanggotaan', $data);
        $this->load->view('A_dashboard/V_footer');
    }
        public function select_data_keanggotaan(){
        	$this->M_keanggotaan->select_data_keanggotaan();
        }
        public function insert_data_keanggotaan(){
            $this->M_keanggotaan->insert_data_keanggotaan();
        }
        public function update_data_keanggotaan(){
            $this->M_keanggotaan->update_data_keanggotaan();
        }
        public function delete_data_keanggotaan(){
        	$this->M_keanggotaan->delete_data_keanggotaan();
        }
        public function select_data_pencarian(){
            $this->M_keanggotaan->select_data_pencarian();
        }

}
?>