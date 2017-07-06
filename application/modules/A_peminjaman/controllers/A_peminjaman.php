<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class A_peminjaman extends MY_Controller{

    public function __construct(){
        parent::__construct();
        $logged_in = $this->session->userdata('logged_in');
        if($logged_in == "78jhk39") {
            $this->load->model('M_peminjaman');
        }
        else {
            $this->session->set_flashdata('pesan', 'Silahkan Log In kembali !');
            redirect('login');
        }
    }

    public function index(){
        $this->halaman('V_peminjaman');
    }
        public function select_data_peminjaman(){
        	$this->M_peminjaman->select_data_peminjaman();
        }
        // public function uji(){
        //     // echo $Date=date('Y-m-d'); 
        //     // echo "<br>";
        //     // echo date('Y-m-d',strtotime($Date. ' + 3 days'))."<br>";
        //     // echo date('Y-m-d',strtotime($Date. ' + 29 days'));

        //     if(strtotime(date('Y-m-d'))>strtotime("2017-01-21")){
        //         echo "lewat";
        //     }else{
        //         echo "belum";
        //     }
        // }
        // public function update_data_keanggotaan(){
        //     $this->M_keanggotaan->update_data_keanggotaan();
        // }
        public function delete_data_peminjaman(){
        	$this->M_peminjaman->delete_data_peminjaman();
        }
        public function ubah_data_peminjaman(){
            $this->M_peminjaman->ubah_data_peminjaman();
        }
        public function select_data_pencarian(){
            $this->M_peminjaman->select_data_pencarian();
        }


}
?>