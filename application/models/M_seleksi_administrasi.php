
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_seleksi_administrasi extends CI_Model {

    private $table = 'tbl_detail_applay_lamaran';

   
    public function get_test_fisik(){
        $this->db->select('*');
        $this->db->from('tbl_applay_lowongan ta');
        $this->db->join('tbl_lowongan tl', 'tl.id_lowongan = ta.id_lowongan', 'inner'); 
        $this->db->join('tbl_pelamar tp', 'tp.id_pelamar = ta.id_pelamar', 'inner'); 
        $this->db->join('tbl_berkas tb', 'tb.id_pelamar = ta.id_pelamar', 'inner');
        $this->db->join('tbl_detail_applay_lamaran tda', 'tda.id_applay_lowongan = ta.id_applay_lowongan', 'inner');  

        $this->db->where('ta.status_lamaran', 'test fisik');
        $this->db->where('tda.proses', 'test fisik');
        
        return $this->db->get()->result();
    }

    public function get_all(){
        $this->db->select('*');
        $this->db->from('tbl_applay_lowongan ta');
        $this->db->join('tbl_lowongan tl', 'tl.id_lowongan = ta.id_lowongan', 'inner'); 
        $this->db->join('tbl_pelamar tp', 'tp.id_pelamar = ta.id_pelamar', 'inner'); 
        $this->db->join('tbl_berkas tb', 'tb.id_pelamar = ta.id_pelamar', 'inner');
        $this->db->join('tbl_detail_applay_lamaran tda', 'tda.id_applay_lowongan = ta.id_applay_lowongan', 'inner');  
        $this->db->where_in('ta.status_lamaran', ['seleksi administrasi']);
        // $this->db->group_by('ta.id_applay_lowongan');
        
        return $this->db->get()->result();
    }

    public function get_wawancara(){
        $this->db->select('*');
        $this->db->from('tbl_applay_lowongan ta');
        $this->db->join('tbl_lowongan tl', 'tl.id_lowongan = ta.id_lowongan', 'inner'); 
        $this->db->join('tbl_pelamar tp', 'tp.id_pelamar = ta.id_pelamar', 'inner'); 
        $this->db->join('tbl_berkas tb', 'tb.id_pelamar = ta.id_pelamar', 'inner');
        $this->db->join('tbl_detail_applay_lamaran tda', 'tda.id_applay_lowongan = ta.id_applay_lowongan', 'inner');  
        $this->db->where('ta.status_lamaran', 'wawancara');
        $this->db->where('tda.proses', 'wawancara');
        // $this->db->group_by('ta.id_applay_lowongan');
        
        return $this->db->get()->result();
    }


    public function get_test_tulis(){
        $this->db->select('*');
        $this->db->from('tbl_applay_lowongan ta');
        $this->db->join('tbl_lowongan tl', 'tl.id_lowongan = ta.id_lowongan', 'inner'); 
        $this->db->join('tbl_pelamar tp', 'tp.id_pelamar = ta.id_pelamar', 'inner'); 
        $this->db->join('tbl_berkas tb', 'tb.id_pelamar = ta.id_pelamar', 'inner');
        $this->db->join('tbl_detail_applay_lamaran tda', 'tda.id_applay_lowongan = ta.id_applay_lowongan', 'inner');  
        $this->db->where('ta.status_lamaran', 'test tulis');
        $this->db->where('tda.proses', 'test tulis');
        return $this->db->get()->result();
    }

    public function get_by_pelamar($id_pelamar){
        $this->db->select('*');
        $this->db->from('tbl_applay_lowongan ta');
        $this->db->join('tbl_lowongan tl', 'tl.id_lowongan = ta.id_lowongan', 'inner'); 
        $this->db->join('tbl_pelamar tp', 'tp.id_pelamar = ta.id_pelamar', 'inner'); 
        $this->db->join('tbl_berkas tb', 'tb.id_pelamar = ta.id_pelamar', 'inner');
        $this->db->join('tbl_detail_applay_lamaran tda', 'tda.id_applay_lowongan = ta.id_applay_lowongan', 'inner');
        $this->db->where('ta.status_lamaran', 'seleksi administrasi');
        $this->db->where('ta.id_pelamar', $id_pelamar);
        return $this->db->get()->result();
    }

  
  
    
}

/* End of file ModelName.php */





