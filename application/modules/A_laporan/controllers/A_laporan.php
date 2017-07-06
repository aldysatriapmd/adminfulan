<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class A_laporan  extends MY_Controller{

    public function __construct(){
        parent::__construct();
        $logged_in = $this->session->userdata('logged_in');
        if($logged_in == "78jhk39") {
            $this->load->model('M_laporan');
            // $this->load->library('fpdf');
        }else {
            $this->session->set_flashdata('pesan', 'Silahkan Log In kembali !');
            redirect('login');
        }
    }

    public function index(){
        
        $this->load->model('M_laporan');

        $data['tanggal'] = $this->input->post('tanggal');
        $data['anggota'] = $this->M_laporan->select_data_keanggotaan($data['tanggal']);
        $data['buku'] = $this->M_laporan->select_data_buku($data['tanggal']);
        $data['jumlah'] = $this->M_laporan->select_data_jumlah_pinjam($data['tanggal']);
        ob_start();   
        $this->load->view('V_laporan',$data);
        $html = ob_get_contents();        
        ob_end_clean();                
        require_once('./sets/html2pdf/html2pdf.class.php');    
        $pdf = new HTML2PDF('P','A4','en',TRUE,'UTF-8',array(15, 15, 15, 10));    
        $pdf->WriteHTML($html);    
        $pdf->Output("Laporan_harian.pdf", 'A');  
    }

    public function laporan_mingguan(){
        
        $this->load->model('M_laporan');
        $minggu=$this->input->post('minggu');
        $data=array(
            'ti' =>0,
            'ta' =>0,
            'tp' =>0,
            'ip' =>0,
            'si' =>0,
            'bi' =>0,
            'fi' =>0,
            'ki' =>0,
            'ma' =>0,
            );
        for($i=1;$i<=7;$i++){
            $data['ti'] += $this->M_laporan->select_data_jumlah_anggota_jurusan('Teknik Informatika',$minggu,$i);
        }
        for($i=1;$i<=7;$i++){
            $data['ta'] += $this->M_laporan->select_data_jumlah_anggota_jurusan('Teknik Arsitektur',$minggu,$i);
        }
        for($i=1;$i<=7;$i++){
            $data['tp'] += $this->M_laporan->select_data_jumlah_anggota_jurusan('Teknik PWK',$minggu,$i);
        }
        for($i=1;$i<=7;$i++){
            $data['ip'] += $this->M_laporan->select_data_jumlah_anggota_jurusan('Ilmu Peternakan',$minggu,$i);
        }        
        for($i=1;$i<=7;$i++){
            $data['si'] += $this->M_laporan->select_data_jumlah_anggota_jurusan('Sistem Informasi',$minggu,$i);
        }
        for($i=1;$i<=7;$i++){
            $data['bi'] += $this->M_laporan->select_data_jumlah_anggota_jurusan('Biologi',$minggu,$i);
        }
        for($i=1;$i<=7;$i++){
            $data['fi'] += $this->M_laporan->select_data_jumlah_anggota_jurusan('Fisika',$minggu,$i);
        }
        for($i=1;$i<=7;$i++){
            $data['ki'] += $this->M_laporan->select_data_jumlah_anggota_jurusan('Kimia',$minggu,$i);
        }
        for($i=1;$i<=7;$i++){
            $data['ma'] += $this->M_laporan->select_data_jumlah_anggota_jurusan('Matematika',$minggu,$i);
        }
        $data['tanggal']=$minggu;

        ob_start();   
        $this->load->view('V_lap_mingguan',$data);
        $html = ob_get_contents();        
        ob_end_clean();                
        require_once('./sets/html2pdf/html2pdf.class.php');    
        $pdf = new HTML2PDF('P','A4','en',TRUE,'UTF-8',array(15, 15, 15, 10));    
        $pdf->WriteHTML($html);    
        $pdf->Output("Laporan_mingguan.pdf", 'A');  
    }

    public function view_ui_laporan(){
        $this->halaman('V_ui_laporan');
    } 

        


}
?>