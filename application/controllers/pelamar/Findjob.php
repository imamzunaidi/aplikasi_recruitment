<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Findjob extends CI_Controller {
    public function __construct(){ 
        parent::__construct(); 
        $id_pengguna = $this->session->userdata('id_pengguna');

        if($id_pengguna == ''){
            $this->flash_message->failed('Wajib Login Dulu', 'login-pelamar');
        }
           
    }
    public function index()
    {
        $data = array(
            'title' => 'Data Lowongan',
            'data_kategori' => $this->M_kategori->get_all(),
            'data_lowongan' => $this->M_lowongan->get_all(),
           
        );
        $this->templates->pelamar('v_findjob', $data);
    }

  
    public function detail($id_lowongan){
        $id_pelamar = $this->session->userdata('id_pelamar');
        $data = array(
            'title' => 'Data Detail Lowongan',
            'data_kategori' => $this->M_kategori->get_all(),
            'detail_lowongan' => $this->M_lowongan->get_by_id($id_lowongan),
            'jumlah_berkas' => $this->M_berkas->jumlah_berkas($id_pelamar),
        );

 
        $this->templates->pelamar('v_detail_findjob', $data);
    }

    public function applay(){

    }

    public function filter(){
        $search_lowongan = $this->input->post('search_lowongan');
        $id_kategori = $this->input->post('id_kategori');

        // var_dump($search_lowongan);
        // var_dump($id_kategori);
        // die();

        $data = array(
            'title' => 'Data Lowongan',
            'data_kategori' => $this->M_kategori->get_all(),
            'data_lowongan' => $this->M_lowongan->get_filter($search_lowongan, $id_kategori),
           
        );
        $this->templates->pelamar('v_findjob', $data);
    }

    public function filter_kategori(){

        $id_kategori = $this->input->post('id_kategori');

        // var_dump($search_lowongan);
        // var_dump($id_kategori);
        // die();

        $data = array(
            'title' => 'Data Lowongan',
            'data_kategori' => $this->M_kategori->get_all(),
            'data_lowongan' => $this->M_lowongan->get_filter_kategori($id_kategori),
           
        );
        $this->templates->pelamar('v_findjob', $data);
    }
}

/* End of file Data_kategori.php */
