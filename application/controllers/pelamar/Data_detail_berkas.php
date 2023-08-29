<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_detail_berkas extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('id_pengguna') == '') {
            $this->flash_message->failed(' Anda Belum login !!', 'login-siswa');
        }
    }

    public function index()
    {
        // $kd_siswa_baru = $this->session->userdata('kd_siswa_baru');
       
        // $cek_data = $this->M_register->cek_data_pendaftar($kd_siswa_baru);
        // if($cek_data > 0){
        //     $data = array(
        //         'title' => 'Data Berkas',
        //         'detail' => $this->M_users->get_pendaftaran(),
        //     );

        //     $this->templates->calon('v_hasil_berkas', $data);
        // }else{

        //     $data = array(
        //         'title' => 'Data Berkas',
        //         'detail' => $this->M_users->get_berkas(),
        //         'data_jurusan' => $this->M_jurusan->get_all(),
        //     );

        //     $this->templates->calon('v_detail_berkas', $data);
        // }

        $data = array(
            'title' => 'Data Berkas',
            // 'detail' => $this->M_users->get_pendaftaran(),
        );

        $this->templates->calon('v_detail_berkas', $data);
        
    }
    
    public function proses_pendaftaran(){
        date_default_timezone_set('Asia/Jakarta');
        $kd_pendaftaran = random_string('alnum', 10);
        $data = array(
            'kd_pendaftaran' => $kd_pendaftaran,
            'tgl_pendaftaran' => date('Y-m-d'),
            'kd_jurusan' => $this->input->post('kd_jurusan'),
            'kd_siswa_baru' => $this->input->post('kd_siswa_baru'),
        );

        $this->M_register->insert_pendaftaran($data);
        $this->flash_message->success('Melakukan Pendfataran Tunggu Hasil nya ya', 'detail-berkas');
        
    }

    public function detail($kd_pendaftar){
        $data = array(
            'title' => 'Data Berkas',
            'detail' => $this->M_pendaftar->get_by_id($kd_pendaftar),
        );

        $this->templates->calon('v_detail_data_berkas', $data);
    }


    public function insert(){

        $file= $_FILES['surat_keterangan']['name'];

        $result_file= $this->upload_foto->upload($file,'surat_keterangan', 'berkas');


        $akte= $_FILES['akte']['name'];

        $result_akte= $this->upload_foto->upload($file,'akte', 'berkas');

        $kk= $_FILES['kk']['name'];

        $result_kk= $this->upload_foto->upload($file,'kk', 'berkas');


        $gambar= $_FILES['foto']['name'];

        $result_gambar= $this->upload_foto->upload($gambar,'foto', 'foto');



        if($result_file== NULL ){
            $this->flash_message->failed('Surat Keterangan Gagal di simpan', 'detail-berkas');
        }

        if($result_gambar== NULL ){
            $this->flash_message->failed('Foto Gagal di simpan', 'detail-berkas');
        }

        if($result_akte== NULL ){
            $this->flash_message->failed('Foto Gagal di simpan', 'detail-berkas');
        }

        if($result_kk== NULL ){
            $this->flash_message->failed('Foto Gagal di simpan', 'detail-berkas');
        }


        $data = array(
            'nama_lengkap' => $this->input->post('nama_lengkap', TRUE),
            'nik' => $this->input->post('nik', TRUE),
            'tgl_lahir' => $this->input->post('tgl_lahir', TRUE),
            'tempat_lahir' => $this->input->post('tempat_lahir', TRUE),
            'jenis_kelamin' => $this->input->post('jenis_kelamin', TRUE),
            'agama' => $this->input->post('agama', TRUE),
            'jumlah_anak' => $this->input->post('jumlah_anak', TRUE),
            'saudara_ke' => $this->input->post('saudara_ke', TRUE),
            'cita_cita' => $this->input->post('cita_cita', TRUE),
            'status_tempat_tinggal' => $this->input->post('status_tempat_tinggal', TRUE),
            'provinsi' => $this->input->post('provinsi', TRUE),
            'kabupaten' => $this->input->post('kabupaten', TRUE),
            'kecamatan' => $this->input->post('kecamatan', TRUE),
            'kelurahan' => $this->input->post('kelurahan', TRUE),
            'nama_jalan' => $this->input->post('nama_jalan', TRUE),
            'kode_pos' => $this->input->post('kode_pos', TRUE),
            'transportasi_sekolah' => $this->input->post('transportasi_sekolah', TRUE),
            'jarak_tempat_tinggal' => $this->input->post('jarak_tempat_tinggal', TRUE),
            'waktu_tempuh' => $this->input->post('waktu_tempuh', TRUE),
            'no_handphone' => $this->input->post('no_handphone', TRUE),
            'yang_biayai_sekolah' => $this->input->post('yang_biayai_sekolah', TRUE),
            'kebutuhan_khusus' => $this->input->post('kebutuhan_khusus', TRUE),
            'kebutuhan_disabilitas' => $this->input->post('kebutuhan_disabilitas', TRUE),
            'tgl_masuk' => $this->input->post('tgl_masuk', TRUE),
            'tingkat_kelas' => $this->input->post('tingkat_kelas', TRUE),
            'nomer_kartu_keluarga' => $this->input->post('nomer_kartu_keluarga', TRUE),
            'nama_kepala_keluarga' => $this->input->post('nama_kepala_keluarga', TRUE),
            'nama_ayah' => $this->input->post('nama_ayah', TRUE),
            'tgl_lahir_ayah' => $this->input->post('tgl_lahir_ayah', TRUE),
            'status_ayah' => $this->input->post('status_ayah', TRUE),
            'nik_ayah' => $this->input->post('nik_ayah', TRUE),
            'tempat_lahir_ayah' => $this->input->post('tempat_lahir_ayah', TRUE),
            'pendidikan_terakhir_ayah' => $this->input->post('pendidikan_terakhir_ayah', TRUE),
            'pekerjaan_utama_ayah' => $this->input->post('pekerjaan_utama_ayah', TRUE),
            'penghasilan_rata_rata_ayah' => $this->input->post('penghasilan_rata_rata_ayah', TRUE),
            'no_handphone_ayah' => $this->input->post('no_handphone_ayah', TRUE),
            'status_tempat_tinggal_ayah' => $this->input->post('status_tempat_tinggal_ayah', TRUE),
            'provinsi_ayah' => $this->input->post('provinsi_ayah', TRUE),
            'kabupaten_ayah' => $this->input->post('kabupaten_ayah', TRUE),
            'kecamatan_ayah' => $this->input->post('kecamatan_ayah', TRUE),
            'kelurahan_ayah' => $this->input->post('kelurahan_ayah', TRUE),
            'nama_jalan_ayah' => $this->input->post('nama_jalan_ayah', TRUE),
            'kode_pos_ayah' => $this->input->post('kode_pos_ayah', TRUE),
            'nama_ibu_kandung' => $this->input->post('nama_ibu_kandung', TRUE),
            'status_ibu_kandung' => $this->input->post('status_ibu_kandung', TRUE),
            'nik_ibu' => $this->input->post('nik_ibu', TRUE),
            'tempat_lahir_ibu' => $this->input->post('tempat_lahir_ibu', TRUE),
            'tgl_lahir_ibu' => $this->input->post('tgl_lahir_ibu', TRUE),
            'pendidikan_terakhir_ibu' => $this->input->post('pendidikan_terakhir_ibu', TRUE),
            'pekerjaan_utama_ibu' => $this->input->post('pekerjaan_utama_ibu', TRUE),
            'penghasilan_rata_rata_ibu' => $this->input->post('penghasilan_rata_rata_ibu', TRUE),
            'no_handphone_ibu' => $this->input->post('no_handphone_ibu', TRUE),
            'status_tempat_tinggal_ibu' => $this->input->post('status_tempat_tinggal_ibu', TRUE),
            'provinsi_ibu' => $this->input->post('provinsi_ibu', TRUE),
            'kabupaten_ibu' => $this->input->post('kabupaten_ibu', TRUE),
            'kecamatan_ibu' => $this->input->post('kecamatan_ibu', TRUE),
            'kelurahan_ibu' => $this->input->post('kelurahan_ibu', TRUE),
            'nama_jalan_ibu' => $this->input->post('nama_jalan_ibu', TRUE),
            'kode_pos_ibu' => $this->input->post('kode_pos_ibu', TRUE),
            'surat_keterangan' => $result_file,
            'id_pengguna' => $this->session->userdata('id_pengguna'),
            'status_siswa' => 'pengajuan pendaftaran',
            'foto' => $result_gambar,
            'akte' => $result_akte,
            'kk' => $result_kk,
        );

        
        $this->M_berkas_siswa->insert($data);
        $this->flash_message->success('Melakukan Pendaftaran Tunggu Hasil nya ya', 'cetak-berkas');
    }

    public function cetak_berkas(){

       $id_pengguna =  $this->session->userdata('id_pengguna');
        $data = array(
            'title' => 'Data Cetak Berkas',
            'data_pendaftar' => $this->M_berkas_siswa->get_all_by_users($id_pengguna),
        );

        $this->templates->calon('v_cetak_berkas', $data);
    }


    public function detail_cetak($id_berkas_siswa){

         $data = array(
             'title' => 'Data Cetak Berkas',
             'detail' => $this->M_berkas_siswa->get_by_id($id_berkas_siswa),
         );
 
         $this->templates->calon('v_detail_cetak', $data);
     }

     public function cetak($id_berkas_siswa){
        $data = array(
            'title' => 'Data Cetak Berkas',
            'detail' => $this->M_berkas_siswa->get_by_id($id_berkas_siswa),
        );

        $this->load->view('calon/v_hasil_cetak', $data);

     }

}

/* End of file Data_kategori.php */


