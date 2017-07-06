<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_laporan extends MY_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function select_data_keanggotaan($data){
        $this->db->where('tgl_daftar',$data);
        return $this->db->get('tabel_keanggotaan')->result_array();
    }

    public function select_data_buku($data){
        $this->db->where('tgl_masuk',$data);
        return $this->db->get('tabel_buku')->result_array();
    }
    public function select_data_jumlah_pinjam($data){
        $this->db->where('tgl_pinjam',$data);
        return $this->db->get('tabel_peminjaman')->num_rows();
    }
    public function select_data_jumlah_anggota_jurusan($data,$tanggal,$nomor){
        
        $this->db->where('jurusan',$data);
        if($nomor==1)$this->db->where('tgl_daftar',$tanggal);
        elseif($nomor==2)$this->db->where('tgl_daftar',date('Y-m-d',strtotime($tanggal. ' + 1 days')));
        elseif($nomor==3)$this->db->where('tgl_daftar',date('Y-m-d',strtotime($tanggal. ' + 2 days')));
        elseif($nomor==4)$this->db->where('tgl_daftar',date('Y-m-d',strtotime($tanggal. ' + 3 days')));
        elseif($nomor==5)$this->db->where('tgl_daftar',date('Y-m-d',strtotime($tanggal. ' + 4 days')));
        elseif($nomor==6)$this->db->where('tgl_daftar',date('Y-m-d',strtotime($tanggal. ' + 5 days')));
        elseif($nomor==7)$this->db->where('tgl_daftar',date('Y-m-d',strtotime($tanggal. ' + 6 days')));
        return $this->db->get('tabel_keanggotaan')->num_rows();
    }

    public function update_data_sejarah(){
        $id=$this->input->post('id');
        $data['status']='pinjam';
        $data['tgl_update']=date('Y-m-d h:i:s');
        $this->db->where('id_peminjaman',$id);
        $this->db->update('tabel_peminjaman',$data);
    }

}
?>