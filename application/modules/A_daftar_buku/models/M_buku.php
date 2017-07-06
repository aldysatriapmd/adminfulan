<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_buku extends MY_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function select_data_buku(){
        $data=$this->db->get('tabel_buku')->result_array();
        echo json_encode($data);
    }
    public function insert_data_buku(){
        $data['ISBN']       = $this->input->post('isbn');
        $data['judul']      = $this->input->post('judul');
        $data['penerbit']   = $this->input->post('penerbit');
        $data['tahun']      = $this->input->post('tahun');
        $data['pengarang']  = $this->input->post('pengarang');
        $data['topik']      = $this->input->post('topik');
        $data['salin']      = $this->input->post('salin');
        $data['tgl_update'] = date('Y-m-d h:i:s');
        $data['tgl_masuk'] = date('Y-m-d h:i:s');

        $this->db->insert('tabel_buku',$data);
    }

    public function update_data_buku(){
        $data['ISBN']       = $this->input->post('isbn');
        $data['judul']      = $this->input->post('judul');
        $data['penerbit']   = $this->input->post('penerbit');
        $data['tahun']      = $this->input->post('tahun');
        $data['pengarang']  = $this->input->post('pengarang');
        $data['topik']      = $this->input->post('topik');
        $data['salin']      = $this->input->post('salin');
        $data['tgl_update'] = date('Y-m-d h:i:s');

        $this->db->where('id',$this->input->post('id'));
        $this->db->update('tabel_buku',$data);
    }
    public function delete_data_buku(){
        $id=$this->input->post('id');
        $this->db->where('id',$id);
        $this->db->delete('tabel_buku');
    }

    public function select_data_pencarian(){
        $hasil = $this->input->post('pencarian');
        $array = array('judul' => $hasil, 'penerbit' => $hasil, 'tahun' => $hasil, 'pengarang' => $hasil, 'topik' => $hasil, 'ISBN' => $hasil);
        $this->db->or_like($array);
        echo json_encode($this->db->get('tabel_buku')->result_array());
    }
}
?>