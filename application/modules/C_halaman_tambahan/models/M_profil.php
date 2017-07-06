<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_profil extends MY_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function select_data_profil(){
        $this->db->where('id',$this->session->userdata('abc'));
        return $this->db->get('tabel_user')->row_array();
    }
    public function update_data_profil(){
        if($_FILES['userfile']['name']){
            $nmfile = "user_".date("Ymdhis"); //nama file saya beri nama langsung dan diikuti fungsi time
            $config['file_name']        = $nmfile; //nama yang terupload nantinya
            $config['upload_path']      = 'gambar/user'; //path folder
            $config['allowed_types']    = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
            $config['max_size']         = '10000'; //maksimum besar file 2M
            $config['max_width']        = '7000'; //lebar maksimum 1288 px
            $config['max_height']       = '7000'; //tinggi maksimu 768 px

            $this->load->library('upload', $config);
            $this->upload->do_upload('userfile');
            $val   = $this->upload->data();
            $gambar = $val['file_name'];

            $this->load->library('image_lib');

            $config['create_thumb']     = false;
            $config['image_library']    = 'gd2';
            $config['source_image']     = $this->upload->upload_path.$this->upload->file_name;
            $config['maintain_ratio']   = true;
            $config['width']            = '500';
            $config['height']           = '450';
            $config['quality']          = '100';
            $this->image_lib->initialize($config);
            $this->image_lib->resize();
            unlink($this->upload->upload_path.$this->input->post('fotonya'));
            $newdata = array(
                    'foto'=> $gambar,
                );
                $this->session->set_userdata($newdata);
        }

        $data['nip']            = $this->input->post('nip');
        $data['nama']           = $this->input->post('nama');
        $data['email']          = $this->input->post('email');
        $data['status']         = $this->input->post('status');
        $data['notelp']         = $this->input->post('notelp');
        $data['jk']             = $this->input->post('jk');
        $data['alamat']         = $this->input->post('alamat');
        $data['tgl_lahir']      = $this->input->post('lahir');
        $data['tempat']        = $this->input->post('tempat');
        $data['foto']           = $gambar;


        $this->db->where('id',$this->session->userdata('abc'));
        $this->db->update('tabel_user',$data);
        redirect('dashboard/profil');
    }
}
?>