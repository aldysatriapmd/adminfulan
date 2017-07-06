<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class A_user extends MY_Controller{

    public function __construct()
    {
        parent::__construct();
        $logged_in = $this->session->userdata('logged_in');
        if($logged_in == "78jhk39") {
            $this->load->model('M_user');
        }else {
            $this->session->set_flashdata('pesan', 'Silahkan Log In kembali !');
            redirect('login');
        }

    }
    /**
     |------------------------------------------------------------------------------------------------------------------
     |                                                  KATEGORI
     |------------------------------------------------------------------------------------------------------------------
     |
     */
    public function index(){
        $this->halaman('V_user');
    }  
    public function view_input_user(){
        $this->halaman('V_input_user');
    }
    public function view_edit_user(){
        $data['data']=$this->M_user->select_data_edit_user();
        $this->load->view('A_dashboard/V_header');
        $this->load->view('V_edit_user',$data);
        $this->load->view('A_dashboard/V_footer');
    }

        //-----CRUD berita------
        public function select_data_user(){
            $this->M_user->select_data_user();
        }
        public function insert_data_user(){
            $this->M_user->insert_data_user();
        }
        public function update_data_user(){
            $this->M_user->update_data_user();
        }
        public function delete_data_user(){
            $this->M_user->delete_data_user();
        }
}
?>