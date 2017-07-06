<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class A_dashboard extends MY_Controller{

    public function __construct(){
        parent::__construct();
        $logged_in = $this->session->userdata('logged_in');
        if($logged_in == "78jhk39") {
            $this->load->model('M_dashboard');
        }
        else {
            $this->session->set_flashdata('pesan', 'Silahkan Log In kembali !');
            redirect('login');
        }
    }

    public function index(){
        $this->halaman('V_beranda');
    }

    public function select_data_anggota(){
    	$this->M_dashboard->select_data_anggota();
    }
    public function select_data_buku(){
        $this->M_dashboard->select_data_buku();
    }
    public function insert_data_pinjam(){
        $this->M_dashboard->insert_data_pinjam();
    }
    public function pengembalian_buku(){
        $this->M_dashboard->pengembalian_buku();
    }

}
?>