<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_pesan extends CI_Controller {

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
            'title' => 'Data Pesan Kontak',
            'data_pesan' => $this->M_pesan->get_all(),
        );
        $this->templates->admin('v_data_pesan', $data);
    }

}

/* End of file Data_kategori.php */


