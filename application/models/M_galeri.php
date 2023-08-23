<?php class M_galeri extends CI_Model{

    private $table = 'tbl_galeri';

    public function get_all(){
        return $this->db->get($this->table)->result();
    }

    public function get_by_id($kd_galeri){
        $this->db->where('kd_galeri', $kd_galeri);
        return $this->db->get($this->table)->row();
    }

    public function insert($data){
        $this->db->insert($this->table, $data);
    }

    public function update($data, $kd_galeri){
        $this->db->where('kd_galeri', $kd_galeri);
        $this->db->update($this->table, $data);
    }

    public function delete($kd_galeri){
        $this->db->where('kd_galeri', $kd_galeri);
        $this->db->delete($this->table);
    }
}
