<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Data_kepala_sekolah extends CI_Controller {
    
    public function __construct(){ 
		parent::__construct(); 
        $hak_akses = $this->session->userdata('hak_akses');
      
        switch ($hak_akses) {
            case 'admin':
                if($hak_akses != 'admin'){
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
            'title' => 'Data Kepala Sekolah',
            'data_kepala_sekolah' => $this->M_users->get_kepala_sekolah(),
        );
        $this->templates->admin('v_data_kepala_sekolah', $data);
    }

    public function update(){

        $id_users = $this->input->post('id_users', TRUE);
        $data = array(
            'nama_users' => $this->input->post('nama_users', TRUE),
            'username' => $this->input->post('username', TRUE),
            'alamat_users' => $this->input->post('alamat_users', TRUE),
            'password' => md5($this->input->post('password', TRUE)),
            'no_telp_users' => $this->input->post('no_telp_users', TRUE),
            'email_users' => $this->input->post('email_users', TRUE),
        );

        $this->M_users->update($data, $id_users);
        $this->flash_message->success('Update', 'data-kepala-sekolah');
    }

}

/* End of file Data_kategori.php */
