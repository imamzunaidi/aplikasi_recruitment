<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Data_profile_sekolah extends CI_Controller {

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
            'title' => 'Data Profile Sekolah',
            'profile_sekolah' => $this->M_profile_sekolah->get_all(),
        );

        $this->templates->admin('v_data_profile', $data);
    }

    public function update(){
        $kd_profile_sekolah = $this->input->post('kd_profile_sekolah', TRUE);
        $profile_sekolah = $this->M_profile_sekolah->get_by_id($kd_profile_sekolah);
        $data_hapus = $profile_sekolah->gambar_sekolah;

        $gambar= $_FILES['gambar']['name'];

        $result_foto = $this->upload_foto->update($gambar,'gambar','profile_sekolah',$data_hapus);

        if($result_foto == NULL){
            $data = array(
                'nama_sekolah' => $this->input->post('nama_sekolah', TRUE),
                'visi' => $this->input->post('visi', TRUE),
                'email' => $this->input->post('email', TRUE),
                'misi' => $this->input->post('misi', TRUE),
                'no_hp' => $this->input->post('no_hp', TRUE),
                'deskripsi' => $this->input->post('deskripsi', TRUE),
                'facebook' => $this->input->post('facebook', TRUE),
                'alamat' => $this->input->post('alamat', TRUE),
                'instagram' => $this->input->post('instagram', TRUE),
                'kd_admin' => $this->session->userdata('id_users'),
            );
        }else{
            $data = array(
                'nama_sekolah' => $this->input->post('nama_sekolah', TRUE),
                'visi' => $this->input->post('visi', TRUE),
                'email' => $this->input->post('email', TRUE),
                'misi' => $this->input->post('misi', TRUE),
                'no_hp' => $this->input->post('no_hp', TRUE),
                'deskripsi' => $this->input->post('deskripsi', TRUE),
                'facebook' => $this->input->post('facebook', TRUE),
                'instagram' => $this->input->post('instagram', TRUE),
                'kd_admin' => $this->session->userdata('id_users'),
                'alamat' => $this->input->post('alamat', TRUE),
                'gambar_sekolah' => $result_foto,
            );
        }

        $this->M_profile_sekolah->update($data, $kd_profile_sekolah);
        $this->flash_message->success('Update', 'data-profile-sekolah');
       
    }

}

/* End of file Data_kategori.php */
