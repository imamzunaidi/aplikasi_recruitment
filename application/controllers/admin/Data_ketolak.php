<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Data_ketolak extends CI_Controller {
    
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
            'title' => 'Data Siswa Ketolak',
            'data_ketolak' => $this->M_berkas_siswa->get_all_ditolak(),

        );
        $this->templates->admin('v_data_ditolak', $data);
    }

    public function filter(){
        $dari = $this->input->post('dari_tanggal');
        $sampai = $this->input->post('sampai_tanggal');
        $data = array(
            'title' => 'Data Siswa Keterima',
            'data_pendaftar' => $this->M_berkas_siswa->get_ditolak_filter($dari, $sampai),
        );
        $this->templates->admin('v_data_diterima', $data);
    }

}

/* End of file Data_kategori.php */
