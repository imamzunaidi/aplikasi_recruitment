<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Data_absensi extends CI_Controller {

    public function __construct(){ 
		parent::__construct(); 
        $hak_akses = $this->session->userdata('hak_akses');
      
        switch ($hak_akses) {
            case 'admin':
                if($hak_akses != 'admin'){
                    $this->flash_message->failed('Wajib Login Dulu', 'login');
                }
                break;
            case 'karyawan':
                if($hak_akses != 'karyawan'){
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
            'title' => 'Data Absensi',
            'data_absensi' => $this->M_absensi->get_all_by_karyawan(),
            'data_absensi1' => $this->M_absensi->get_all_by_karyawan1(),
        );

        $this->templates->admin('v_data_absensi', $data);
    }

    public function insert(){
        date_default_timezone_set('Asia/Jakarta');
        $data = array(
            'id_karyawan' =>  $this->session->userdata('id_users'),
            'hadir_masuk' => $this->input->post('hadir_masuk', TRUE),
            'waktu_masuk' => date('Y-m-d H:i:s'),
        );

        $this->M_absensi->insert($data);
        $this->flash_message->success('Tambahkan', 'data-absensi');
    }

    public function update(){
        date_default_timezone_set('Asia/Jakarta');
        $id_absensi = $this->input->post('id_absensi', TRUE);
        $data_absensi = $this->M_absensi->get_by_id($id_absensi);

        if($this->session->userdata('hak_akses') == 'admin'){

            $waktu_masuk = strtotime($data_absensi->waktu_masuk);
            $waktu_keluar =  strtotime($this->input->post('waktu_keluar', TRUE));
              //menghitung selisih dengan hasil detik
            $diff    = $waktu_keluar - $waktu_masuk;
        
            //membagi detik menjadi jam
            $jam    =floor($diff / (60 * 60));

            $data = array(
                'hadir_keluar' => $this->input->post('hadir_keluar', TRUE),
                'waktu_keluar' => $this->input->post('waktu_keluar', TRUE),
                'jam_kerja' => $jam,
            );

            $this->M_absensi->update($data, $id_absensi);
            $this->flash_message->success('Update', 'data-absensi-karyawan');
        }else{
            
            $waktu_masuk = strtotime($data_absensi->waktu_masuk);
            $waktu_keluar =  strtotime("now");
            $diff    = $waktu_keluar - $waktu_masuk;
        
            //membagi detik menjadi jam
            $jam    =floor($diff / (60 * 60));

            $data = array(
                'hadir_keluar' => $this->input->post('hadir_keluar', TRUE),
                'waktu_keluar' => date('Y-m-d H:i:s'),
                'jam_kerja' => $jam,
            );
            
            $this->M_absensi->update($data, $id_absensi);
            $this->flash_message->success('Update', 'data-absensi');
        }
       
    }

    public function delete($id_absensi){

        $this->M_absensi->delete($id_absensi);
        $this->flash_message->success('Status Non Aktif', 'data-absensi');
    }


    public function data_laporan_absensi(){
    

        $data = array(
            'title' => 'Data Laporan Absensi',
            'jumlah_absensi_perbulan' => $this->M_absensi->jumlah_data_absensi_perbulan(),
            'data_laporan_absensi_perbulan' => $this->M_absensi->get_laporan_perbulan(),
            'jumlah_absensi' => $this->M_absensi->jumlah_data_absensi(),
            'data_laporan_absensi' => $this->M_absensi->get_laporan(),
        );
        $this->templates->admin('v_laporan_absensi_admin', $data);
    }

    public function data_absensi_karyawan(){
        $data = array(
            'title' => 'Data Absensi Karyawan',
            'data_absensi' => $this->M_absensi->get_all(),
        );
        $this->templates->admin('v_data_absensi_admin', $data);
    }

    public function filter_data(){
        $dari_tanggal = $this->input->post('dari_tanggal');
        $sampai_tanggal = $this->input->post('sampai_tanggal');

        $data = array(
            'title' => 'Data Laporan Absensi',
            'jumlah_absensi_perbulan' => $this->M_absensi->jumlah_data_absensi_perbulan(),
            'data_laporan_absensi_perbulan' => $this->M_absensi->get_laporan_perbulan(),
            'jumlah_absensi' => $this->M_absensi->jumlah_data_absensi_filter($dari_tanggal, $sampai_tanggal),
            'data_laporan_absensi' => $this->M_absensi->get_laporan_filter($dari_tanggal, $sampai_tanggal),
        );
        $this->templates->admin('v_laporan_absensi_admin', $data);
    }

}

/* End of file Data_kategori.php */
