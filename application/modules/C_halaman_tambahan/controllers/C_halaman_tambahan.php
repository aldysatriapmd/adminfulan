<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_halaman_tambahan extends MY_Controller{

    public function __construct()
    {
        parent::__construct();
        $logged_in = $this->session->userdata('logged_in');
        if($logged_in == "78jhk39") {
            $this->load->model('M_profil');
        }
        else {
            $this->session->set_flashdata('pesan', 'Silahkan Log In kembali !');
            redirect('login');
        }
    }

    public function index(){
        $this->load->view('V_404');
    }

    public function view_edit_profil(){
    	$data['data']=$this->M_profil->select_data_profil();
    	$this->load->view('A_dashboard/V_header');
    	$this->load->view('V_edit_profil',$data);
    	$this->load->view('A_dashboard/V_footer');
    }
    	public function update_data_profil(){
    		$this->M_profil->update_data_profil();
    	}
   
}
?>