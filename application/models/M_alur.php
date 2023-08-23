<?php class M_alur extends CI_Model{
    private $table = 'tbl_alur';

    public function get_all(){
        return $this->db->get($this->table)->result();
    }

    public function get_by_id($kd_alur){
        $this->db->where('kd_alur', $kd_alur);
        return $this->db->get($this->table)->row();
    }

    public function insert($data){
        $this->db->insert($this->table, $data);
    }

    public function update($data, $kd_alur){
        $this->db->where('kd_alur', $kd_alur);
        $this->db->update($this->table, $data);
    }

    public function delete($kd_alur){
        $this->db->where('kd_alur', $kd_alur);
        $this->db->delete($this->table);
    }
}
