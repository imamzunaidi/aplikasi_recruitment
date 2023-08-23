<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Data_lowongan extends CI_Controller {

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
            'title' => 'Data Lowongan',
            'data_lowongan' => $this->M_lowongan->get_all(),
            'data_kategori' => $this->M_kategori->get_all(),
        );
        $this->templates->admin('v_data_lowongan', $data);
    }

    public function insert(){
        
        $gambar= $_FILES['gambar']['name'];

        $result_gambar= $this->upload_foto->upload($gambar,'gambar', 'lowongan');

        if($result_gambar== NULL ){
            $this->flash_message->failed('Foto Gagal di simpan', 'data-lowongan');
        }

        $data = array(
            'deskripsi' => $this->input->post('deskripsi', TRUE),
            'nama_pekerjaan' => $this->input->post('nama_pekerjaan', TRUE),
            'penempatan' => $this->input->post('penempatan', TRUE),
            'gaji' => $this->input->post('gaji', TRUE),
            'requirment' => $this->input->post('requirment', TRUE),
            'batas_pendaftaran' => $this->input->post('batas_pendaftaran', TRUE),
            'jumlah_kebutuhan' => $this->input->post('jumlah_kebutuhan', TRUE),
            'jenis_pekerjaan' => $this->input->post('jenis_pekerjaan', TRUE),
            'id_kategori' => $this->input->post('id_kategori', TRUE),
            'gambar_lowongan' => $result_gambar,
            'tanggal_dibuat' => date('Y-m-d'),
        );

        $this->M_lowongan->insert($data);
        $this->flash_message->success('Tambahkan', 'data-lowongan');
    }

    public function update(){

        $id_lowongan = $this->input->post('id_lowongan', TRUE);
        $admin = $this->M_lowongan->get_by_id($id_lowongan);
        $data_hapus = $admin->gambar_lowongan;
        $gambar= $_FILES['gambar']['name'];

        if($gambar == ""){
            $data = array(
                'deskripsi' => $this->input->post('deskripsi', TRUE),
                'nama_pekerjaan' => $this->input->post('nama_pekerjaan', TRUE),
                'penempatan' => $this->input->post('penempatan', TRUE),
                'gaji' => $this->input->post('gaji', TRUE),
                'requirment' => $this->input->post('requirment', TRUE),
                'batas_pendaftaran' => $this->input->post('batas_pendaftaran', TRUE),
                'jumlah_kebutuhan' => $this->input->post('jumlah_kebutuhan', TRUE),
                'jenis_pekerjaan' => $this->input->post('jenis_pekerjaan', TRUE),
                'id_kategori' => $this->input->post('id_kategori', TRUE),
            );
        }else{

            $result_gambar= $this->upload_foto->upload($gambar,'gambar', 'lowongan');
    
            if($result_gambar== NULL ){
                $this->flash_message->failed('Foto Gagal di simpan', 'data-lowongan');
            }
            $data = array(
                'deskripsi' => $this->input->post('deskripsi', TRUE),
                'nama_pekerjaan' => $this->input->post('nama_pekerjaan', TRUE),
                'penempatan' => $this->input->post('penempatan', TRUE),
                'gaji' => $this->input->post('gaji', TRUE),
                'requirment' => $this->input->post('requirment', TRUE),
                'batas_pendaftaran' => $this->input->post('batas_pendaftaran', TRUE),
                'jumlah_kebutuhan' => $this->input->post('jumlah_kebutuhan', TRUE),
                'jenis_pekerjaan' => $this->input->post('jenis_pekerjaan', TRUE),
                'id_kategori' => $this->input->post('id_kategori', TRUE),
                'gambar_lowongan' => $result_gambar,
            );
        }

        $this->M_lowongan->update($data, $id_lowongan);
        $this->flash_message->success('Update', 'data-lowongan');
    }

    public function delete($id_lowongan){

        $this->M_lowongan->delete($id_lowongan);
        $this->flash_message->success('Delete', 'data-lowongan');
    }

}

/* End of file Data_kategori.php */
