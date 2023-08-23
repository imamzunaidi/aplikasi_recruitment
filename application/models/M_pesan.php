<?php class M_pesan extends CI_Model{
    private $table = 'tbl_pesan';

    public function get_all(){
        return $this->db->get($this->table)->result();
    }


    public function jumlah_pesan(){
        return $this->db->get($this->table)->num_rows();
    }

    public function insert($data){
        $this->db->insert($this->table, $data);
    }  
}
