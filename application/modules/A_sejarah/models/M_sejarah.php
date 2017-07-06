<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_sejarah extends MY_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function select_data_sejarah(){
        $this->db->select('*');
        $this->db->from('tabel_peminjaman');
        $this->db->where('status','kembali');
        $this->db->join('tabel_keanggotaan', 'tabel_keanggotaan.id = tabel_peminjaman.id_anggota');
        $this->db->join('tabel_buku', 'tabel_buku.id = tabel_peminjaman.id_buku');
        $data = $this->db->get()->result_array();
        echo json_encode($data);
        
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