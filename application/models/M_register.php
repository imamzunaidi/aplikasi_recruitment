
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_register extends CI_Model {

    public function insert_register($data){
        $this->db->insert('tbl_pengguna', $data);
    }

    public function insert_lengkapi_data($data){
        $this->db->insert('tbl_biodata', $data);
    }

    public function insert_berkas($data){
        $this->db->insert('tbl_berkas', $data);
    }

    public function insert_pendaftaran($data){
        $this->db->insert('tbl_pendaftaran', $data);
    }

    public function cek_data_pendaftar($id_pengguna){ 
        $this->db->where('kd_pengguna', $kd_pengguna);
        return $this->db->get('tbl_pendaftaran')->num_rows();
    }
}

/* End of file ModelName.php */





