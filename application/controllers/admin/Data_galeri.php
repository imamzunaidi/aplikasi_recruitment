<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_galeri extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('hak_akses') != 'admin') {
            $hak_akses = $this->session->userdata('hak_akses');
      
            switch ($hak_akses) {
                case 'admin':
                    if($hak_akses != 'admin'){
                        $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Gagal!!</strong> Anda Belum Login !!
                        </div>');
    
                        redirect('login');
                    }
                    break;
                
                default:
                    $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Gagal!!</strong> Anda Belum Login !!
                    </div>');

                    redirect('login');
                break;
            }

        }
    }

    public function index()
    {
        $data = array(
            'title' => 'Data Galeri',
            'galeri' => $this->M_galeri->get_all(),
        );
        $this->templates->admin('v_data_galeri', $data);
    }

    public function insert(){
        
        $gambar= $_FILES['gambar']['name'];

        $result_gambar= $this->upload_foto->upload($gambar,'gambar', 'galeri');

        if($result_gambar== NULL ){
            $this->flash_message->failed('Foto Gagal di simpan', 'data-galeri');
        }
        
        $data = array(
            'galeri_gambar' => $result_gambar,
        );

        $this->M_galeri->insert($data);
        $this->flash_message->success('Tambahkan', 'data-galeri');
    }

    public function update(){

        $kd_galeri = $this->input->post('kd_galeri', TRUE);
        $galeri = $this->M_galeri->get_by_id($kd_galeri);
        $data_hapus = $galeri->galeri_gambar;

        $gambar= $_FILES['gambar']['name'];

        $result_foto = $this->upload_foto->update($gambar,'gambar','galeri',$data_hapus);

    
        $data = array(
            'galeri_gambar' => $result_foto,
        );

        $this->M_galeri->update($data, $kd_galeri);
        $this->flash_message->success('Update', 'data-galeri');
    }

    public function delete($kd_galeri){
        $this->M_galeri->delete($kd_galeri);
        $this->flash_message->success('Di hapus', 'data-galeri');
    }

}

/* End of file Data_kategori.php */


