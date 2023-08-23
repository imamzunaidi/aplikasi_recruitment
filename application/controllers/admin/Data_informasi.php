<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_informasi extends CI_Controller {

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
            'title' => 'Data informasi',
            'data_informasi' => $this->M_informasi->get_all(),
        );
        $this->templates->admin('v_data_informasi', $data);
    }

    public function insert(){
        
        $gambar= $_FILES['gambar']['name'];

        $result_gambar= $this->upload_foto->upload($gambar,'gambar', 'informasi');

        if($result_gambar== NULL ){
            $this->flash_message->failed('Foto Gagal di simpan', 'data-informasi');
        }
        
        $data = array(
            'gambar_informasi' => $result_gambar,
            'judul' => $this->input->post('judul'),
            'deskripsi' => $this->input->post('deskripsi'),
            'penulis' => $this->input->post('penulis'),
            'tgl_informasi' => $this->input->post('tgl_informasi'),
        );

        $this->M_informasi->insert($data);
        $this->flash_message->success('Tambahkan', 'data-informasi');
    }

    public function update(){

        $kd_informasi = $this->input->post('kd_informasi', TRUE);
        $informasi = $this->M_informasi->get_by_id($kd_informasi);
        $data_hapus = $informasi->gambar_informasi;

        $gambar= $_FILES['gambar']['name'];

        $result_foto = $this->upload_foto->update($gambar,'gambar','informasi',$data_hapus);

        if($result_foto == NULL){
            $data = array(
                'judul' => $this->input->post('judul'),
                'deskripsi' => $this->input->post('deskripsi'),
                'penulis' => $this->input->post('penulis'),
                'tgl_informasi' => $this->input->post('tgl_informasi'),
            );
        }else{
            $data = array(
                'gambar_informasi' => $result_foto,
                'judul' => $this->input->post('judul'),
                'deskripsi' => $this->input->post('deskripsi'),
                'penulis' => $this->input->post('penulis'),
                'tgl_informasi' => $this->input->post('tgl_informasi'),
            );
        }

        $this->M_informasi->update($data, $kd_informasi);
        $this->flash_message->success('Update', 'data-informasi');
    }

    public function delete($kd_informasi){
        $this->M_informasi->delete($kd_informasi);
        $this->flash_message->success('Di hapus', 'data-informasi');
    }

}

/* End of file Data_kategori.php */


