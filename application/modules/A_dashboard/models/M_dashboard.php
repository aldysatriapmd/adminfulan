<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_dashboard extends MY_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function select_data_anggota(){
        $nim = $this->input->post('nim');
        $this->db->limit(1);
        $this->db->where('nim',$nim);
        $data = $this->db->get('tabel_keanggotaan')->row_array();

        $this->db->select('*');
        $this->db->from('tabel_peminjaman');
        $this->db->where('id_anggota',$data['id']);
        $this->db->where('status','pinjam');
        $this->db->join('tabel_buku', 'tabel_buku.id = tabel_peminjaman.id_buku');
        $data['buku']=$this->db->get()->result_array();
        echo json_encode($data);
    }

    public function select_data_buku(){
        $isbn = $this->input->post('isbn');
        $this->db->limit(1);
        $this->db->where('ISBN',$isbn);
        $data = $this->db->get('tabel_buku')->row_array();

        echo json_encode($data);
    }

    public function insert_data_pinjam(){
        $data['id_buku']    = $this->input->post('id');
        $data['id_anggota'] = $this->input->post('idanggota');
        $data['status']     = 'pinjam';
        $data['tgl_pinjam'] = date('Y-m-d');
        $data['tgl_pengembalian'] = date('Y-m-d',strtotime($data['tgl_pinjam']. ' + 3 days'));
        $data['tgl_update'] = date('Y-m-d h:i:s');

        $this->db->insert('tabel_peminjaman',$data);
    }

    public function pengembalian_buku(){
        $id=$this->input->post('id_peminjaman');
        $data['status']='kembali';
        $data['tgl_update']=date('Y-m-d h:i:s');
        $this->db->where('id_peminjaman',$id);
        $this->db->update('tabel_peminjaman',$data);
    }

}
?>