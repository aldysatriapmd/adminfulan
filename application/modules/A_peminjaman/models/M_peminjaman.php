<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_peminjaman extends MY_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function select_data_peminjaman(){
        $this->db->select('*');
        $this->db->from('tabel_peminjaman');
        $this->db->where('status','pinjam');
        $this->db->join('tabel_keanggotaan', 'tabel_keanggotaan.id = tabel_peminjaman.id_anggota');
        $this->db->join('tabel_buku', 'tabel_buku.id = tabel_peminjaman.id_buku');
        $data = $this->db->get()->result_array();
        echo json_encode($data);
    }
   
    public function delete_data_peminjaman(){
        $id=$this->input->post('id');
        $this->db->where('id_peminjaman',$id);
        $this->db->delete('tabel_peminjaman');
    }
    public function ubah_data_peminjaman(){
        $id=$this->input->post('id');
        $data['status']='kembali';
        $data['tgl_update']=date('Y-m-d h:i:s');
        $this->db->where('id_peminjaman',$id);
        $this->db->update('tabel_peminjaman',$data);
    }

    public function select_data_pencarian(){
        $hasil = $this->input->post('pencarian');

        $this->db->select('*');
        $this->db->from('tabel_peminjaman');
        $this->db->join('tabel_keanggotaan', 'tabel_keanggotaan.id = tabel_peminjaman.id_anggota');
        $this->db->join('tabel_buku', 'tabel_buku.id = tabel_peminjaman.id_buku');
        $this->db->where('status','pinjam');
        $this->db->like('nim',$hasil);
        $this->db->or_like('nama',$hasil);
        $this->db->or_like('judul',$hasil);
        $data = $this->db->get()->result_array();
        echo json_encode($data);
    }

}
?>