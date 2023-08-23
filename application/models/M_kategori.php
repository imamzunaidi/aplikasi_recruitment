
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kategori extends CI_Model {

    private $table = 'tbl_kategori';

    public function get_all(){
        return $this->db->get($this->table)->result();
    }

    public function jumlah_kategori(){
        return $this->db->get($this->table)->num_rows();
    }

    public function get_by_id($id_kategori){
        $this->db->where('id_kategori', $id_kategori);
        return $this->db->get($this->table)->row();
    }

    public function get_by_name($nama_kategori){
        $this->db->where('nama_kategori', $nama_kategori);
        return $this->db->get($this->table)->num_rows();
    }

    public function insert($data){
        $this->db->insert($this->table, $data);
    }

    public function update($data, $id_kategori){
        $this->db->where('id_kategori', $id_kategori)->update($this->table, $data);
    }

    public function delete($id_kategori){
        $this->db->where('id_kategori', $id_kategori)->delete($this->table);
    }
}

/* End of file ModelName.php */





