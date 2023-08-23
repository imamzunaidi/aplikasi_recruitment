
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_hasil extends CI_Model {

    private $table = 'tbl_detail_applay_lamaran';

   

    public function get_all_diterima(){
        $this->db->select('*');
        $this->db->from('tbl_applay_lowongan ta');
        $this->db->join('tbl_lowongan tl', 'tl.id_lowongan = ta.id_lowongan', 'inner'); 
        $this->db->join('tbl_pelamar tp', 'tp.id_pelamar = ta.id_pelamar', 'inner'); 
        $this->db->join('tbl_berkas tb', 'tb.id_pelamar = ta.id_pelamar', 'inner');
        $this->db->join('tbl_detail_applay_lamaran tda', 'tda.id_applay_lowongan = ta.id_applay_lowongan', 'inner');  
        $this->db->where_in('ta.status_lamaran', ['diterima']);
        $this->db->group_by('ta.id_applay_lowongan');
        return $this->db->get()->result();
    }


    public function get_tidak_lolos(){
        $this->db->select('*');
        $this->db->from('tbl_applay_lowongan ta');
        $this->db->join('tbl_lowongan tl', 'tl.id_lowongan = ta.id_lowongan', 'inner'); 
        $this->db->join('tbl_pelamar tp', 'tp.id_pelamar = ta.id_pelamar', 'inner'); 
        $this->db->join('tbl_berkas tb', 'tb.id_pelamar = ta.id_pelamar', 'inner');
        $this->db->join('tbl_detail_applay_lamaran tda', 'tda.id_applay_lowongan = ta.id_applay_lowongan', 'inner');  
        $this->db->where_in('ta.status_lamaran', ['tidak lolos']);
        $this->db->group_by('ta.id_applay_lowongan');
        return $this->db->get()->result();
    }


    public function get_hasil(){
        $this->db->select('*');
        $this->db->from('tbl_applay_lowongan ta');
        $this->db->join('tbl_lowongan tl', 'tl.id_lowongan = ta.id_lowongan', 'inner'); 
        $this->db->join('tbl_pelamar tp', 'tp.id_pelamar = ta.id_pelamar', 'inner'); 
        $this->db->join('tbl_berkas tb', 'tb.id_pelamar = ta.id_pelamar', 'inner');
        $this->db->join('tbl_detail_applay_lamaran tda', 'tda.id_applay_lowongan = ta.id_applay_lowongan', 'inner');  
        $this->db->where_in('ta.status_lamaran', ['diterima']);
        // $this->db->group_by('ta.id_applay_lowongan');
        
        return $this->db->get()->result();
    }

    public function get_by_pelamar($id_pelamar){
        $this->db->select('*');
        $this->db->from('tbl_applay_lowongan ta');
        $this->db->join('tbl_lowongan tl', 'tl.id_lowongan = ta.id_lowongan', 'inner'); 
        $this->db->join('tbl_pelamar tp', 'tp.id_pelamar = ta.id_pelamar', 'inner'); 
        $this->db->join('tbl_berkas tb', 'tb.id_pelamar = ta.id_pelamar', 'inner');
        $this->db->join('tbl_detail_applay_lamaran tda', 'tda.id_applay_lowongan = ta.id_applay_lowongan', 'inner');
        $this->db->where_in('ta.status_lamaran', ['diterima', 'tidak lolos']);
        $this->db->where('ta.id_pelamar', $id_pelamar);
        return $this->db->get()->result();
    }

  
  
    
}

/* End of file ModelName.php */





