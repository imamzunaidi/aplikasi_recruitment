
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_users extends CI_Model {

    private $table = 'tbl_users';

    public function get_admin(){
        $this->db->select('*');
        $this->db->from('tbl_users');
        $this->db->where('hak_akses', 'admin');
        $this->db->where('status', 'aktiv');
        
        return $this->db->get()->result();
    }

    public function get_kepala_sekolah(){
        $this->db->select('*');
        $this->db->from('tbl_users');
        $this->db->where('hak_akses', 'kepala sekolah');
        $this->db->where('status', 'aktiv');
        
        return $this->db->get()->row();
    }

    public function jumlah_users(){
        return $this->db->get($this->table)->num_rows();
    }

    public function jumlah_admin(){
        $this->db->select('*');
        $this->db->from('tbl_users');
        $this->db->where('hak_akses', 'admin');
        return $this->db->get()->num_rows();
    }

    public function insert($data){
        $this->db->insert($this->table, $data);
    }

    public function get_by_id($id_users){
        $this->db->where('id_users', $id_users);
        return $this->db->get($this->table)->row();
        
    }

    public function update($data, $id_users){
        $this->db->where('id_users', $id_users)->update($this->table, $data);
    }

    public function delete($id_users){
        $this->db->where('id_users', $id_users)->delete($this->table);
    }

    public function get_berkas(){
        $kd_siswa_baru = $this->session->userdata('kd_siswa_baru');
        $this->db->select('*');
        $this->db->from('tbl_siswa_baru tsb');
        $this->db->join('tbl_biodata tb', 'tb.kd_siswa_baru = tsb.kd_siswa_baru', 'inner');
        $this->db->join('tbl_berkas tbs', 'tbs.kd_siswa_baru = tsb.kd_siswa_baru', 'inner');
        $this->db->where('tsb.kd_siswa_baru', $kd_siswa_baru);
        return $this->db->get()->row();
    }

    public function get_pendaftaran(){
        $kd_siswa_baru = $this->session->userdata('kd_siswa_baru');
        $this->db->select('*');
        $this->db->from('tbl_siswa_baru tsb');
        $this->db->join('tbl_biodata tb', 'tb.kd_siswa_baru = tsb.kd_siswa_baru', 'inner');
        $this->db->join('tbl_berkas tbs', 'tbs.kd_siswa_baru = tsb.kd_siswa_baru', 'inner');
        $this->db->join('tbl_pendaftaran tp', 'tp.kd_siswa_baru = tsb.kd_siswa_baru', 'inner');
        $this->db->join('tbl_jurusan tj', 'tj.kd_jurusan = tp.kd_jurusan', 'inner');
        $this->db->where('tsb.kd_siswa_baru', $kd_siswa_baru);
        $this->db->group_by('tp.kd_pendaftaran');
        
        
        return $this->db->get()->result();
    }
}

/* End of file ModelName.php */





