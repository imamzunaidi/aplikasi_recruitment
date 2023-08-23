
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_applay_lowongan extends CI_Model {

    private $table = 'tbl_applay_lowongan';

   

    public function get_all(){
        $this->db->select('*');
        $this->db->from('tbl_applay_lowongan ta');
        $this->db->join('tbl_lowongan tl', 'tl.id_lowongan = ta.id_lowongan', 'inner'); 
        $this->db->join('tbl_pelamar tp', 'tp.id_pelamar = ta.id_pelamar', 'inner'); 
        $this->db->join('tbl_berkas tb', 'tb.id_pelamar = ta.id_pelamar', 'inner');
        $this->db->where('ta.status_lamaran', 'applay');
        return $this->db->get()->result();
    }


    public function get_by_lowongan($id_applay_lowongan){
        $this->db->select('*');
        $this->db->from('tbl_applay_lowongan ta');
        $this->db->join('tbl_lowongan tl', 'tl.id_lowongan = ta.id_lowongan', 'inner'); 
        $this->db->join('tbl_pelamar tp', 'tp.id_pelamar = ta.id_pelamar', 'inner'); 
        $this->db->join('tbl_berkas tb', 'tb.id_pelamar = ta.id_pelamar', 'inner');
        $this->db->where('ta.id_applay_lowongan', $id_applay_lowongan);
        return $this->db->get()->row();
    }


    public function get_by_pelamar($id_pelamar){
        $this->db->select('*');
        $this->db->from('tbl_applay_lowongan ta');
        $this->db->join('tbl_lowongan tl', 'tl.id_lowongan = ta.id_lowongan', 'inner'); 
        $this->db->join('tbl_pelamar tp', 'tp.id_pelamar = ta.id_pelamar', 'inner'); 
        $this->db->join('tbl_berkas tb', 'tb.id_pelamar = ta.id_pelamar', 'inner');
        // $this->db->where('ta.status_lamaran', 'applay');
        $this->db->where('ta.id_pelamar', $id_pelamar);
        return $this->db->get()->result();
    }

    public function cek_data_applay($id_pelamar){

        $where = array('diterima', 'tidak lolos');
        
        $this->db->select('*');
        $this->db->from('tbl_applay_lowongan ta');
        // $this->db->join('tbl_lowongan tl', 'tl.id_lowongan = ta.id_lowongan', 'inner'); 
        // $this->db->join('tbl_pelamar tp', 'tp.id_pelamar = ta.id_pelamar', 'inner'); 
        $this->db->where('ta.id_pelamar', $id_pelamar);
        // $this->db->where_not_in('ta.status_lamaran', $where);
        return $this->db->get()->num_rows();
    }

    public function jumlah_applay_lowongan(){
        return $this->db->get($this->table)->num_rows();
    }

    public function insert($data){
        $this->db->insert($this->table, $data);
    }

    public function get_by_id($id_applay_lowongan){
        $this->db->where('id_applay_lowongan', $id_applay_lowongan);
        return $this->db->get($this->table)->row();
    }

    public function update($data, $id_applay_lowongan){
        $this->db->where('id_applay_lowongan', $id_applay_lowongan)->update($this->table, $data);
    }

    public function delete($id_applay_lowongan){
        $this->db->where('id_applay_lowongan', $id_applay_lowongan)->delete($this->table);
    }
    
}

/* End of file ModelName.php */





