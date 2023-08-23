
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pelamar extends CI_Model {

    private $table = 'tbl_pelamar';

    public function get_all(){
        return $this->db->get($this->table)->result();
    }

    public function jumlah_pelamar(){
        return $this->db->get($this->table)->num_rows();
    }

    public function insert($data){
        $this->db->insert($this->table, $data);
    }

    public function get_by_id($id_pelamar){
        $this->db->where('id_pelamar', $id_pelamar);
        return $this->db->get($this->table)->row();
        
    }

    public function update($data, $id_pelamar){
        $this->db->where('id_pelamar', $id_pelamar)->update($this->table, $data);
    }

    public function delete($id_pelamar){
        $this->db->where('id_pelamar', $id_pelamar)->delete($this->table);
    }


    public function cek_data($username){
        $this->db->select('*');
        $this->db->from('tbl_pelamar');
        $this->db->where('username_pelamar', $username);
        return $this->db->get()->num_rows();
        
    }
}

/* End of file ModelName.php */





