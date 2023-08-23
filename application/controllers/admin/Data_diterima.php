<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Data_diterima extends CI_Controller {

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
            'title' => 'Data Diterima',
            'data_diterima' => $this->M_hasil->get_all_diterima(),
            'detail_applay' => $this->M_detail_applay->get_all_data(),
        );
        $this->templates->admin('v_data_diterima', $data);
    }

    public function update(){
        $id_applay_lowongan = $this->input->post('id_applay_lowongan');

        if($this->input->post('status_lamaran') == 'tidak lolos'){
            $data_appaly = [
                'status_lamaran' => 'tidak lolos',
            ];

            $this->M_applay_lowongan->update($data_appaly, $id_applay_lowongan);

            $data_detail = [
                'detail_status_lamaran' => 'tidak lolos',
                'proses' => 'semua tahap',
                'nilai' => $this->input->post('nilai'),
                'id_applay_lowongan' => $id_applay_lowongan,
                'keterangan_tambahan' => $this->input->post('keterangan_tambahan'), 
            ];

        }else{
    
            $data_appaly = [
                'status_lamaran' => 'diterima',
            ];

            $this->M_applay_lowongan->update($data_appaly, $id_applay_lowongan);

            $data_detail = [
                'detail_status_lamaran' => 'lolos',
                'proses' => 'semua tahap',
                'nilai' => $this->input->post('nilai'),
                'id_applay_lowongan' => $id_applay_lowongan,
                'keterangan_tambahan' => $this->input->post('keterangan_tambahan'), 
            ];
        }
        
        $this->M_detail_applay->insert($data_detail);

        $this->flash_message->success('Update', 'data-wawancara');
    }


    public function cetak()
	{
        $data = array(
            'title' => 'Data Diterima',
            'data_diterima' => $this->M_hasil->get_all_diterima(),
            'detail_applay' => $this->M_detail_applay->get_all_data(),
        );
		$this->load->view('admin/v_cetak_diterima', $data);
	}



}

/* End of file Data_kategori.php */
