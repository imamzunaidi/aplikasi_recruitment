<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function index()
    {
        $this->templates->login();
    }

    public function login_pelamar()
    {
        $this->templates->login_pelamar();
    }

    public function proses_login_siswa(){

        $username = $this->input->post('username', TRUE);
        $password = md5($this->input->post('password', TRUE));
        $data_login = $this->M_auth->login_siswa($username, $password);


        if($data_login == NULL){
            $this->flash_message->failed('Username dan password salah', 'login-siswa');
        }else{
            $this->session->set_userdata('id_pengguna', $data_login->id_pengguna);
            $this->session->set_userdata('nama_depan', $data_login->nama_depan);
            redirect('');
        }
        
    }
    
    public function register_pelamar()
    {
        $this->load->view('auth/v_register_pelamar');
    }

    public function proses_register(){
        $this->register_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->register_siswa();
        } else {
            $data = array(
                'nama_depan' => $this->input->post('nama_depan', TRUE),
                'nama_belakang' => $this->input->post('nama_belakang', TRUE),
                'password' => md5($this->input->post('password', TRUE)),
                'username' => $this->input->post('username', TRUE),
            );
            $this->M_register->insert_register($data);
            $username = $this->input->post('username', TRUE);
            $password = md5($this->input->post('password', TRUE));
            $data_login = $this->M_auth->login_siswa($username, $password);
            
            $this->session->set_userdata('id_pengguna', $data_login->id_pengguna);
            $this->session->set_userdata('nama_depan', $data_login->nama_depan);

            $this->flash_message->success('Register Berhasil', 'login-pelamar');
        }
        
    }


    public function lengkapi_biodata(){
        $this->load->view('auth/v_lengkapi_biodata');
    }

    public function proses_lengkapi_biodata(){
        $data = array(
            'nama_lengkap' => $this->input->post('nama_lengkap'),
            'tempat_lahir' => $this->input->post('tempat_lahir'),
            'tgl_lahir' => $this->input->post('tgl_lahir'),
            'alamat' => $this->input->post('alamat'),
            'no_hp' => $this->input->post('no_hp'),
            'nama_ayah' => $this->input->post('nama_ayah'),
            'nama_ibu' => $this->input->post('nama_ibu'), 
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'asal_sekolah' => $this->input->post('asal_sekolah'),
            'no_hp_orangtua' => $this->input->post('no_hp_orangtua'),
            'kd_siswa_baru' => $this->input->post('kd_siswa_baru'),
        );

        $this->M_register->insert_lengkapi_data($data);
        $this->flash_message->success('Melengkapi biodata, silahkan lengkapi berkas', 'lengkapi-berkas');
    }

    public function lengkapi_berkas(){
        $data = array(
            'data_jurusan' => $this->M_jurusan->get_all(),
        );
        $this->load->view('auth/v_lengkapi_berkas', $data);
    }

    public function proses_lengkapi_berkas(){
        $berkas_pas_foto= $_FILES['berkas_pas_foto']['name'];
        $result_pas_foto= $this->upload_foto->upload($berkas_pas_foto,'berkas_pas_foto', 'berkas_pas_foto');
        
        $berkas_ijasah= $_FILES['berkas_ijasah']['name'];
        $result_ijasah= $this->upload_foto->upload($berkas_ijasah,'berkas_ijasah', 'berkas_ijasah');
        
        $rekap_nilai= $_FILES['rekap_nilai']['name'];
        $result_rekap= $this->upload_foto->upload($rekap_nilai,'rekap_nilai', 'rekap_nilai');
        
        $berkas_pendukung= $_FILES['berkas_pendukung']['name'];

        if($result_pas_foto == NULL AND $result_ijasah == NULL){
            $this->flash_message->failed('Foto Gagal di simpan', 'lengkapi_berkas');
        }

        if($berkas_pendukung == NULL){
            $data = array(
                'kd_siswa_baru' => $this->input->post('kd_siswa_baru'),
                'ijasah' => $result_ijasah,
                'pas_foto' => $result_pas_foto,
                'rekap_nilai' => $result_rekap,
            );
            $this->M_register->insert_berkas($data);
            $this->flash_message->success('Menambahkan Berkas, Silahkan lakukan pendaftaran', 'detail-berkas');
        }else{
            $berkas_pendukung= $_FILES['berkas_pendukung']['name'];
            $result_berkas= $this->upload_foto->upload($berkas_pendukung,'berkas_pendukung', 'berkas_pendukung');
            $data = array(
                'kd_siswa_baru' => $this->input->post('kd_siswa_baru'),
                'ijasah' => $result_ijasah,
                'pas_foto' => $result_pas_foto,
                'rekap_nilai' => $result_rekap,  
                'berkas_pendukung' => $result_berkas,
            );
            $this->M_register->insert_berkas($data);
            $this->flash_message->success('Menambahkan Berkas, Silahkan lakukan pendaftaran', 'detail-berkas');
        }
    }

    public function pendaftaran(){
        $this->load->view('auth/v_pendaftaran');
    }

    public function login_admin()
    {
        $this->_rules_login();
        if ($this->form_validation->run() == FALSE) {
            $this->templates->login();
        } else {
            $username = $this->input->post('username', TRUE);
            $password = MD5($this->input->post('password', TRUE));
            $login_admin = $this->M_auth->login_admin($username, $password);
            if ($login_admin) {
                $this->session->set_userdata('id_users', $login_admin->nama_users);
                $this->session->set_userdata('nama', $login_admin->alamat_users);
                $this->session->set_userdata('hak_akses', $login_admin->hak_akses); 
                redirect('dashboard');
            }else {
                $this->flash_message->failed('Username dan Password Salah !', 'login');
            }
        }
    }

    private function _rules_login()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
    }

    public function register_rules(){
        $this->form_validation->set_rules('nama_depan', 'Nama Depan', 'required', [
            'required' => 'Nama depan wajib diisi !!'
        ]);
        $this->form_validation->set_rules('nama_belakang', 'Nama Belakang', 'required', [
            'required' => 'Nama Belakang Wajib diisi !!'
        ]);
        $this->form_validation->set_rules('username', 'Username', 'required', [
            'required' => 'Username Wajib diisi !!'
        ]);

        $this->form_validation->set_rules('password', 'Password', 'required|matches[ulangi_password]' , [
            'required' => 'Password Wajib diisi !!'
        ]);
        $this->form_validation->set_rules('ulangi_password', 'Ulangi Passowrd', 'required', [
            'required' => 'Ulangi Password Wajib diisi !!'
        ]);
    }
    


    public function logout()
    {
        $this->session->sess_destroy();
        redirect('');
    }


}


?>