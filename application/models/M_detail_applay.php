
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_detail_applay extends CI_Model {

    private $table = 'tbl_detail_applay_lamaran';

    public function get_all(){
        $this->db->select('*');
        $this->db->from('tbl_detail_applay_lamaran');
        $this->db->where('id_detail_applay_lamaran', $id_pelamar);
        return $this->db->get()->result();
    }

    public function get_all_data(){
        $this->db->select('*');
        $this->db->from('tbl_detail_applay_lamaran');
        return $this->db->get()->result();
    }


    public function get_by_id($id_detail_applay_lamaran){
        $this->db->where('id_detail_applay_lamaran', $id_detail_applay_lamaran);
        return $this->db->get($this->table)->row();
    }

    public function get_by_applay_lamaran($id_applay_lowongan){
        $this->db->select('*');
        $this->db->from('tbl_detail_applay_lamaran');
        $this->db->where('id_applay_lowongan', $id_applay_lowongan);
        return $this->db->get()->result();    
    }

    public function insert($data){
        $this->db->insert($this->table, $data);
    }

    public function update($data, $id_detail_applay_lamaran){
        $this->db->where('id_detail_applay_lamaran', $id_detail_applay_lamaran)->update($this->table, $data);
    }

    public function delete($id_detail_applay_lamaran){
        $this->db->where('id_detail_applay_lamaran', $id_detail_applay_lamaran)->delete($this->table);
    }

    public function hasil_fisik($id_pelamar,$id_applay_lowongan){
        $this->db->select('*');
        $this->db->from('tbl_detail_applay_lamaran td');
        $this->db->join('tbl_applay_lowongan ta', 'ta.id_applay_lowongan = td.id_applay_lowongan', 'inner');
        $this->db->where('td.id_applay_lowongan', $id_applay_lowongan);
        $this->db->where('td.proses', 'test fisik');
        $this->db->where('ta.id_pelamar', $id_pelamar);
        
        return $this->db->get()->row();
    }

    public function jumlah_hasil_test($id_pelamar,$id_applay_lowongan){
        $this->db->select('*');
        $this->db->from('tbl_detail_applay_lamaran td');
        $this->db->join('tbl_applay_lowongan ta', 'ta.id_applay_lowongan = td.id_applay_lowongan', 'inner');
        $this->db->where('td.id_applay_lowongan', $id_applay_lowongan);
        $this->db->where('ta.id_pelamar', $id_pelamar);
        return $this->db->get()->num_rows();
    }

    public function hasil_test($id_pelamar,$id_applay_lowongan){
        $this->db->select('*');
        $this->db->from('tbl_detail_applay_lamaran td');
        $this->db->join('tbl_applay_lowongan ta', 'ta.id_applay_lowongan = td.id_applay_lowongan', 'inner');
        $this->db->where('td.id_applay_lowongan', $id_applay_lowongan);
        $this->db->where('ta.id_pelamar', $id_pelamar);

        return $this->db->get()->result();
    }


}

/* End of file ModelName.php */





