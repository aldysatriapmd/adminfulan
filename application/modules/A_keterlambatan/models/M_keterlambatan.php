<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_keterlambatan extends MY_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function select_data_keterlambatan(){
        $this->db->select('*');
        $this->db->from('tabel_peminjaman');
        $this->db->where('status','pinjam');
        $this->db->join('tabel_keanggotaan', 'tabel_keanggotaan.id = tabel_peminjaman.id_anggota');
        $this->db->join('tabel_buku', 'tabel_buku.id = tabel_peminjaman.id_buku');
        $data = $this->db->get()->result_array();

        $val=array();
        $angka=0;
        for ($i=0; $i < count($data); $i++) { 
            if(strtotime(date('Y-m-d'))>strtotime($data[$i]['tgl_pengembalian'])){
                $val[$angka]=$data[$i];

                $diff=date_diff(date_create($val[$angka]['tgl_pengembalian']),date_create(date('Y-m-d')));
                $val[$angka]['sumhari']=$diff->days;
                $val[$angka]['bayar']="Rp.".number_format($val[$angka]['sumhari']*500,2,',','.');

                $angka++;
            }
        }

        echo json_encode($val);

        
    }

}
?>