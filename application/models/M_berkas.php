
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_berkas extends CI_Model {

    private $table = 'tbl_berkas';

    public function get_all($id_pelamar){
        $this->db->select('*');
        $this->db->from('tbl_berkas');
        $this->db->where('id_berkas', $id_pelamar);
        return $this->db->get()->result();
    }

    public function jumlah_berkas($id_pelamar){
        $this->db->select('*');
        $this->db->from('tbl_berkas');
        $this->db->where('id_pelamar', $id_pelamar);
        return $this->db->get()->num_rows();
    }

    public function get_by_id($id_berkas){
        $this->db->where('id_berkas', $id_berkas);
        return $this->db->get($this->table)->row();
    }


    public function get_by_pelamar($id_pelamar){
        $this->db->where('id_pelamar', $id_pelamar);
        return $this->db->get($this->table)->row();
    }

    public function insert($data){
        $this->db->insert($this->table, $data);
    }

    public function update($data, $id_pelamar){
        $this->db->where('id_pelamar', $id_pelamar)->update($this->table, $data);
    }

    public function delete($id_berkas){
        $this->db->where('id_berkas', $id_berkas)->delete($this->table);
    }


}

/* End of file ModelName.php */





