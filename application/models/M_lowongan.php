
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_lowongan extends CI_Model {

    private $table = 'tbl_lowongan';

    public function get_filter($search_lowongan, $id_kategori){
        $this->db->select('*');
        $this->db->from('tbl_lowongan tl');
        $this->db->join('tbl_kategori tk', 'tk.id_kategori = tl.id_kategori', 'inner');
        $this->db->like('tl.nama_pekerjaan', $search_lowongan, 'both');
        $this->db->or_where('tk.id_kategori', $id_kategori);
        return $this->db->get()->result();
    }

    public function get_filter_kategori($id_kategori){
        $this->db->select('*');
        $this->db->from('tbl_lowongan tl');
        $this->db->join('tbl_kategori tk', 'tk.id_kategori = tl.id_kategori', 'inner');
        $this->db->where('tk.id_kategori', $id_kategori);
        return $this->db->get()->result();
    }

    public function get_all(){
        $this->db->select('*');
        $this->db->from('tbl_lowongan tl');
        $this->db->join('tbl_kategori tk', 'tk.id_kategori = tl.id_kategori', 'inner');
        return $this->db->get()->result();
    }

    public function get_limit(){
        $this->db->select('*');
        $this->db->from('tbl_lowongan tl');
        $this->db->join('tbl_kategori tk', 'tk.id_kategori = tl.id_kategori', 'inner');
        $this->db->limit(5);
        return $this->db->get()->result();
    }

    public function jumlah_lowongan(){
        return $this->db->get($this->table)->num_rows();
    }

    public function get_by_id($id_lowongan){
        $this->db->where('id_lowongan', $id_lowongan);
        return $this->db->get($this->table)->row();
    }

    public function insert($data){
        $this->db->insert($this->table, $data);
    }

    public function update($data, $id_lowongan){
        $this->db->where('id_lowongan', $id_lowongan)->update($this->table, $data);
    }

    public function delete($id_lowongan){
        $this->db->where('id_lowongan', $id_lowongan)->delete($this->table);
    }
}

/* End of file ModelName.php */





