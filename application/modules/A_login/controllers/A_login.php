<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class A_login extends MY_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('M_login');
    }
    /**
     |------------------------------------------------------------------------------------------------------------------
     |                                                  KATEGORI
     |------------------------------------------------------------------------------------------------------------------
     |
     */

    //------------------------ login user ------------------

    public function index(){
        $logged_in = $this->session->userdata('logged_in');
        if($logged_in == "78jhk39") {
            redirect('dashboard/');
        }
        else {
            $this->load->view('V_login');
        }
    }
    //proses login
    public function cek_login(){
        $logged_in = $this->session->userdata('logged_in');
        if($logged_in == "78jhk39"){
            redirect('dashboard/');
        }else{
            $this->M_login->cek_login();
        }
    }

    public function keluar() {
        $newdata = array('nama','xyz','abc','foto');
        $this->session->unset_userdata($newdata);
        $this->session->unset_userdata('logged_in');

        redirect('login');
    }

}
?>