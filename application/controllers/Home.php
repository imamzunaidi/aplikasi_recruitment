<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index()
    {
        $data = array(
            'title' => 'RA Rabbani',
            'galeri' => $this->M_galeri->get_all(),
            'profile' => $this->M_profile_sekolah->get_all(),
            'alur' => $this->M_alur->get_all(),
            'data_informasi' => $this->M_informasi->get_all(),

        );
        $this->templates->calon('v_home', $data);
    }

    public function detail_informasi($kd_informasi){
        $data = array(
            'informasi' => $this->M_informasi->get_by_id($kd_informasi),
        );
        $this->templates->calon('v_detail_informasi', $data);
    }

    public function insert_pesan(){

        $data = array(
            'nama' => $this->input->post('nama'),
            'email' => $this->input->post('email'),
            'subyek' => $this->input->post('subyek'),
            'pesan' => $this->input->post('pesan'),
        );
        $this->M_pesan->insert($data);
           
        $this->flash_message->success('terimakasi sudah memberikan pesan kepada kami', '');
        

    }

 
}

/* End of file Data_kategori.php */
