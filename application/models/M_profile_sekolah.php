<?php class M_profile_sekolah extends CI_Model{

    private $table = 'tbl_profile';

    public function get_all(){
        return $this->db->get($this->table)->row();
    }

    public function update($data, $kd_profile_sekolah){
        $this->db->where('kd_profile_sekolah', $kd_profile_sekolah);
        $this->db->update($this->table, $data);
    }

    public function get_by_id($kd_profile_sekolah){
        $this->db->where('kd_profile_sekolah', $kd_profile_sekolah);
         return $this->db->get($this->table)->row();
    }
    // public function delete($kd_jurusan){
    //     $this->db->where('kd_jurusan', $kd_jurusan);
    //     $this->db->delete($this->table);
    // }
}
