<?php class M_informasi extends CI_Model{
    private $table = 'tbl_informasi';

    public function get_all(){
        return $this->db->get($this->table)->result();
    }

    public function get_by_id($kd_informasi){
        $this->db->where('kd_informasi', $kd_informasi);
        return $this->db->get($this->table)->row();
    }

    public function insert($data){
        $this->db->insert($this->table, $data);
    }

    public function update($data, $kd_informasi){
        $this->db->where('kd_informasi', $kd_informasi);
        $this->db->update($this->table, $data);
    }

    public function delete($kd_informasi){
        $this->db->where('kd_informasi', $kd_informasi);
        $this->db->delete($this->table);
    }
}
