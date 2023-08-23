
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model {

    private $table = 'tbl_admin';

    public function get_all(){
        return $this->db->get($this->table)->result();
    }

    public function jumlah_admin(){
        return $this->db->get($this->table)->num_rows();
    }

    public function insert($data){
        $this->db->insert($this->table, $data);
    }

    public function get_by_id($id_admin){
        $this->db->where('id_admin', $id_admin);
        return $this->db->get($this->table)->row();
        
    }

    public function update($data, $id_admin){
        $this->db->where('id_admin', $id_admin)->update($this->table, $data);
    }

    public function delete($id_admin){
        $this->db->where('id_admin', $id_admin)->delete($this->table);
    }
}

/* End of file ModelName.php */





