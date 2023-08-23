<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Data_kategori extends CI_Controller {

    public function __construct(){ 
		parent::__construct(); 
        $hak_akses = $this->session->userdata('hak_akses');
      
        switch ($hak_akses) {
            case 'admin':
                if($hak_akses != 'admin'){
                    $this->flash_message->failed('Wajib Login Dulu', 'login');
                }
                break;
            case 'hrd':
                if($hak_akses != 'hrd'){
                    $this->flash_message->failed('Wajib Login Dulu', 'login');
                }
                break;
            default:
            $this->flash_message->failed('Wajib Login Dulu', 'login');
            break;
        }
	}
    public function index()
    {
        $data = array(
            'title' => 'Data Kategori',
            'data_kategori' => $this->M_kategori->get_all(),
        );
        $this->templates->admin('v_data_kategori', $data);
    }

    public function insert(){
        
        $nama_kategori = $this->input->post('nama_kategori', TRUE);
        $cek_data = $this->M_kategori->get_by_name($nama_kategori);
        if($cek_data > 0){
            $this->flash_message->failed('data sudah tersedia', 'data-kategori');
        }

        $data = array(
            'nama_kategori' => $this->input->post('nama_kategori', TRUE),
        );

        $this->M_kategori->insert($data);
        $this->flash_message->success('Tambahkan', 'data-kategori');
    }

    public function update(){


        $id_kategori = $this->input->post('id_kategori', TRUE);

        $data = array(
            'nama_kategori' => $this->input->post('nama_kategori', TRUE),
        );

        $this->M_kategori->update($data, $id_kategori);
        $this->flash_message->success('Update', 'data-kategori');
    }

    public function delete($id_kategori){

        $this->M_kategori->delete($id_kategori);
        $this->flash_message->success('Delete', 'data-kategori');
    }

}

/* End of file Data_kategori.php */
