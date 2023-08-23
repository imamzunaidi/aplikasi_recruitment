<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Data_test_tulis extends CI_Controller {

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
            'title' => 'Data Test Tulis',
            'data_seleksi_administrasi' => $this->M_seleksi_administrasi->get_all(),
            // 'data_wawancara' => $this->M_seleksi_administrasi->get_wawancara(),
            'data_test_tulis' => $this->M_seleksi_administrasi->get_test_tulis(),
            'data_hasil_test' => $this->M_hasil_test->get_hasil_test(),
        );
        $this->templates->admin('v_data_test_tulis', $data);
    }

    public function update(){
        $id_applay_lowongan = $this->input->post('id_applay_lowongan');

        $applay = $this->M_applay_lowongan->get_by_id($id_applay_lowongan);
        $id_pelamar = $applay->id_pelamar;
        $pelamar = $this->M_pelamar->get_by_id($id_pelamar);

        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'smtp.mailtrap.io';
        $config['smtp_port'] = 2525;
        $config['smtp_user'] = 'ef6aca0b63d1b3';
        $config['smtp_pass'] = '0dd5f46404bbd4';
        $config['crlf'] = "\r\n";
        $config['newline'] = "\r\n";

        $this->load->library('email', $config);
    
		$this->email->from('wifqihana3@gmail.com', 'Tim Recruitment');
		$this->email->to($pelamar->email_pelamar);
 
		$this->email->subject('Pengumuman Test Tulis');
		$this->email->message('segera periksa lamaran anda, kami telah mengirimkan hasil pengumuman kepada anda silahkan untuk di periksa, terimakasih');
 
		$this->email->set_mailtype('html');
		$this->email->send();
        
        if($this->input->post('status_lamaran') == 'tidak lolos'){
            $data_appaly = [
                'status_lamaran' => 'tidak lolos',
            ];
    
            $this->M_applay_lowongan->update($data_appaly, $id_applay_lowongan);
    
            $data_detail = [
                'detail_status_lamaran' => 'tidak lolos',
                'proses' => 'test tulis',
                'nilai' => $this->input->post('nilai'),
                'id_applay_lowongan' => $id_applay_lowongan,
                'keterangan_tambahan' => $this->input->post('keterangan_tambahan'), 
            ];
            
            $this->M_detail_applay->insert($data_detail);
        }else{
            $data_appaly = [
                'status_lamaran' => 'test tulis',
            ];
    
            $this->M_applay_lowongan->update($data_appaly, $id_applay_lowongan);
    
            $data_detail = [
                'detail_status_lamaran' => 'lolos',
                'proses' => 'test tulis',
                'nilai' => $this->input->post('nilai'),
                'id_applay_lowongan' => $id_applay_lowongan,
                'keterangan_tambahan' => $this->input->post('keterangan_tambahan'), 
            ];
            
            $this->M_detail_applay->insert($data_detail);
        }

        $this->flash_message->success('Update', 'data-test-tulis');
    }

    public function detail($id_applay_lowongan, $id_pelamar ){
        $data = array(
            'title' => 'Detail Test Tulis',
            'data_applay' => $this->M_applay_lowongan->get_by_lowongan($id_applay_lowongan),
            'data_hasil_test' => $this->M_hasil_test->get_hasil($id_pelamar, $id_applay_lowongan),
        );
        $this->templates->admin('v_detail_test_tulis', $data);
    }

    public function delete($id_transaksi){
        $this->M_transaksi->delete($id_transaksi);
        $this->flash_message->success('Status Non Aktif', 'data-transaksi-masuk');


    }

}

/* End of file Data_kategori.php */
