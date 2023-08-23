<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Data_pendaftar extends CI_Controller {
    
    public function __construct(){ 
		parent::__construct(); 
        $hak_akses = $this->session->userdata('hak_akses');

        if($hak_akses == ''){
            $this->flash_message->failed('Wajib Login Dulu', 'login');
        }
      
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
            'title' => 'Data Berkas Pendaftaran',
            'data_pendaftar' => $this->M_berkas_siswa->get_pengajuan(),
            'data_pendaftar' => $this->M_berkas_siswa->get_all_pengajuan(),
        );
        $this->templates->admin('v_data_pendaftar', $data);
    }

    public function update(){
        $id_berkas_siswa = $this->input->post('id_berkas_siswa', TRUE);

        $data = array(
            'status_siswa' => $this->input->post('status_siswa', TRUE),
            'kelas_siswa' => $this->input->post('kelas_siswa', TRUE),
        );
 
        $this->M_berkas_siswa->update($data, $id_berkas_siswa);
        $this->flash_message->success('Update', 'data-pendaftaran');
    }

    public function detail($id_berkas_siswa){
        $data = array(
            'title' => 'Data Detail Pendaftar',
            'data_pendaftar' => $this->M_berkas_siswa->get_by_id($id_berkas_siswa),
        );
        $this->templates->admin('v_detail_pendaftar', $data);
    }


}

/* End of file Data_kategori.php */
