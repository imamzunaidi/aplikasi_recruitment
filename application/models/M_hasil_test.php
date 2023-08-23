
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_hasil_test extends CI_Model {

    private $table = 'tbl_hasil_test';

    public function get_all(){
        $this->db->select('*');
        $this->db->from('tbl_hasil_test tht');
        $this->db->join('tbl_pertanyaan tp', 'tp.id_pertanyaan = tht.id_pertanyaan', 'inner');
        $this->db->join('tbl_jawaban tj', 'tj.id_jawaban = tht.id_jawaban', 'inner');        
        return $this->db->get()->result();
    }

    public function get_hasil($id_pelamar, $id_applay_lowongan){
        $this->db->select('*');
        $this->db->from('tbl_hasil_test tht');
        $this->db->join('tbl_pertanyaan tp', 'tp.id_pertanyaan = tht.id_pertanyaan', 'inner');
        $this->db->join('tbl_jawaban tj', 'tj.id_jawaban = tht.id_jawaban', 'inner');  
        $this->db->where('tht.id_pelamar', $id_pelamar);
        $this->db->where('tht.id_applay_lowongan', $id_applay_lowongan);
        return $this->db->get()->result();
    }

    public function get_hasil_test(){
        $this->db->select('*');
        $this->db->from('tbl_hasil_test tht');
        $this->db->join('tbl_pertanyaan tp', 'tp.id_pertanyaan = tht.id_pertanyaan', 'inner');
        $this->db->join('tbl_jawaban tj', 'tj.id_jawaban = tht.id_jawaban', 'inner');  
        return $this->db->get()->result();
    }

    public function cek_test($id_applay_lowongan){
        $this->db->where('id_applay_lowongan', $id_applay_lowongan);
        return $this->db->get($this->table)->num_rows();
    }

    public function jumlah_hasil_test(){
        return $this->db->get($this->table)->num_rows();
    }

    public function get_by_id($id_hasil_test){
        $this->db->where('id_hasil_test', $id_hasil_test);
        return $this->db->get($this->table)->row();
    }

    public function insert($data){
        $this->db->insert($this->table, $data);
    }

    public function update($data, $id_hasil_test){
        $this->db->where('id_hasil_test', $id_hasil_test)->update($this->table, $data);
    }

    public function delete($id_hasil_test){
        $this->db->where('id_hasil_test', $id_hasil_test)->delete($this->table);
    }
}

/* End of file ModelName.php */





