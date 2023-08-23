<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_alur extends CI_Controller {

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
            'title' => 'Data Alur Pendaftaran',
            'data_alur' => $this->M_alur->get_all(),
        );
        $this->templates->admin('v_data_alur', $data);
    }

    public function insert(){
        
        $gambar= $_FILES['gambar']['name'];

        $result_gambar= $this->upload_foto->upload($gambar,'gambar', 'alur');

        if($result_gambar== NULL ){
            $this->flash_message->failed('Foto Gagal di simpan', 'data-alur');
        }
        
        $data = array(
            'gambar_alur' => $result_gambar,
            'judul' => $this->input->post('judul'),
            'deskripsi' => $this->input->post('deskripsi'),
        );

        $this->M_alur->insert($data);
        $this->flash_message->success('Tambahkan', 'data-alur');
    }

    public function update(){

        $kd_alur = $this->input->post('kd_alur', TRUE);
        $alur = $this->M_alur->get_by_id($kd_alur);
        $data_hapus = $alur->gambar_alur;

        $gambar= $_FILES['gambar']['name'];

        $result_foto = $this->upload_foto->update($gambar,'gambar','alur',$data_hapus);

        if($result_foto == NULL){
            $data = array(
                'judul' => $this->input->post('judul'),
                'deskripsi' => $this->input->post('deskripsi'),
            );
        }else{
            $data = array(
                'gambar_alur' => $result_foto,
                'judul' => $this->input->post('judul'),
                'deskripsi' => $this->input->post('deskripsi'),
            );
        }

        $this->M_alur->update($data, $kd_alur);
        $this->flash_message->success('Update', 'data-alur');
    }

    public function delete($kd_alur){
        $this->M_alur->delete($kd_alur);
        $this->flash_message->success('Di hapus', 'data-alur');
    }

}

/* End of file Data_kategori.php */


