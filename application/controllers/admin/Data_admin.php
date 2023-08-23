<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Data_admin extends CI_Controller {

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
            'title' => 'Data Admin',
            'data_admin' => $this->M_users->get_admin(),
        );
        $this->templates->admin('v_data_admin', $data);
    }

    public function insert(){

        $data = array(
            'nama_users' => $this->input->post('nama_users', TRUE),
            'username' => $this->input->post('username', TRUE),
            'alamat_users' => $this->input->post('alamat_users', TRUE),
            'password' => md5($this->input->post('password', TRUE)),
            'no_telp_users' => $this->input->post('no_telp_users', TRUE),
            'email_users' => $this->input->post('email_users', TRUE),
            'hak_akses' => 'admin',
            'status' => 'aktiv',
        );

        $this->M_users->insert($data);
        $this->flash_message->success('Tambahkan', 'data-admin');
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
        $this->flash_message->success('Update', 'data-admin');
    }

    public function delete($id_users){

        $data = array(
            'status' => 'non-aktiv'
        );
        $this->M_users->update($data, $id_users);
        $this->flash_message->success('Status Non Aktif', 'data-admin');
    }

}

/* End of file Data_kategori.php */
