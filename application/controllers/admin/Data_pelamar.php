<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Data_pelamar extends CI_Controller {

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
            'title' => 'Data Pelamar',
            'data_pelamar' => $this->M_pelamar->get_all(),
        );
        $this->templates->admin('v_data_pelamar', $data);
    }


    public function update(){
        $id_pelamar = $this->input->post('id_pelamar', TRUE);

        $data = array(
            'nama_pelamar' => $this->input->post('nama_pelamar', TRUE),
            'username_pelamar' => $this->input->post('username_pelamar', TRUE),
            'no_telp_pelamar' => $this->input->post('no_telp_pelamar', TRUE),
            'password_pelamar' => md5($this->input->post('password_pelamar', TRUE)),
            'alamat_pelamar' => $this->input->post('alamat_pelamar', TRUE),
            'email_pelamar' => $this->input->post('email_pelamar', TRUE),
        );

        $this->M_pelamar->update($data, $id_pelamar);

        $this->flash_message->success('Update', 'data-pelamar');
    }


    public function delete($id_pelamar){
        $data = array(
            'status_pelamar' => 'non-aktiv'
        );
        $this->M_pelamar->update($data, $id_pelamar);
        $this->flash_message->success('Status Non Aktif', 'data-pelamar');
    }

}

/* End of file Data_kategori.php */
