<?php class M_berkas_siswa extends CI_Model{

private $table = 'tbl_berkas_siswa';

public function get_all(){
   
    $this->db->select('*');
    $this->db->from('tbl_berkas_siswa tbs');
    $this->db->join('tbl_pengguna tp', 'tp.id_pengguna = tbs.id_pengguna', 'inner');

    return $this->db->get()->result();

}

public function get_all_pengajuan(){
   
    $this->db->select('*');
    $this->db->from('tbl_berkas_siswa tbs');
    $this->db->join('tbl_pengguna tp', 'tp.id_pengguna = tbs.id_pengguna', 'inner');
    $this->db->where('tbs.status_siswa', 'pengajuan pendaftaran');
    
    return $this->db->get()->result();

}

public function jumlah_pendaftaran(){
    $this->db->select('*');
    $this->db->from('tbl_berkas_siswa tbs');
    $this->db->join('tbl_pengguna tp', 'tp.id_pengguna = tbs.id_pengguna', 'inner');
    $this->db->where('tbs.status_siswa', 'pengajuan pendaftaran');
    
    return $this->db->get()->num_rows();
}


public function get_all_by_users($id_pengguna){
    $this->db->select('*');
    $this->db->from('tbl_berkas_siswa tbs');
    $this->db->join('tbl_pengguna tp', 'tp.id_pengguna = tbs.id_pengguna', 'inner');
    $this->db->where('tbs.id_pengguna', $id_pengguna);
    
    return $this->db->get()->result();
}


public function get_all_diterima(){
   
    $this->db->select('*');
    $this->db->from('tbl_berkas_siswa tbs');
    $this->db->join('tbl_pengguna tp', 'tp.id_pengguna = tbs.id_pengguna', 'inner');
    $this->db->where('tbs.status_siswa', 'diterima');
    
    return $this->db->get()->result();

}


public function get_diterima_filter($dari, $sampai){
    
    $this->db->select('*');
    $this->db->from('tbl_berkas_siswa tbs');
    $this->db->join('tbl_pengguna tp', 'tp.id_pengguna = tbs.id_pengguna', 'inner');
    $this->db->where('tbs.status_siswa', 'diterima');
    $this->db->where('tbs.tgl_submit >=', $dari);
    $this->db->where('tbs.tgl_submit <=', $sampai);
    return $this->db->get()->result();
}

public function get_all_ditolak(){
   
    $this->db->select('*');
    $this->db->from('tbl_berkas_siswa tbs');
    $this->db->join('tbl_pengguna tp', 'tp.id_pengguna = tbs.id_pengguna', 'inner');
    $this->db->where('tbs.status_siswa', 'ditolak');
    
    return $this->db->get()->result();

}

public function get_pengajuan(){
   
    $this->db->select('*');
    $this->db->from('tbl_berkas_siswa tbs');
    $this->db->join('tbl_pengguna tp', 'tp.id_pengguna = tbs.id_pengguna', 'inner');
    $this->db->where('status_siswa', 'pengajuan pendaftaran');
    return $this->db->get()->result();

}


public function get_keterima(){
   
    $this->db->select('*');
    $this->db->from('tbl_berkas_siswa tbs');
    $this->db->join('tbl_pengguna tp', 'tp.id_pengguna = tbs.id_pengguna', 'inner');
    $this->db->where('status_siswa', 'diterima');
    return $this->db->get()->result();

}



public function jumlah_ditolak(){
   
    $this->db->select('*');
    $this->db->from('tbl_berkas_siswa tbs');
    $this->db->join('tbl_pengguna tp', 'tp.id_pengguna = tbs.id_pengguna', 'inner');
    $this->db->where('tbs.status_siswa', 'ditolak');
    
    return $this->db->get()->num_rows();

}

public function jumlah_keterima(){
   
    $this->db->select('*');
    $this->db->from('tbl_berkas_siswa tbs');
    $this->db->join('tbl_pengguna tp', 'tp.id_pengguna = tbs.id_pengguna', 'inner');
    $this->db->where('status_siswa', 'diterima');
    return $this->db->get()->num_rows();

}

public function get_by_id($id_berkas_siswa){
    
    $this->db->select('*');
    $this->db->from('tbl_berkas_siswa tbs');
    $this->db->join('tbl_pengguna tp', 'tp.id_pengguna = tbs.id_pengguna', 'inner');
    $this->db->where('tbs.id_berkas_siswa', $id_berkas_siswa);
    return $this->db->get()->row();
}

public function insert($data){
    $this->db->insert($this->table, $data);
}

public function update($data, $id_berkas_siswa){
    $this->db->where('id_berkas_siswa', $id_berkas_siswa);
    $this->db->update($this->table, $data);
}

public function delete($id_berkas_siswa){
    $this->db->where('id_berkas_siswa', $id_berkas_siswa);
    $this->db->delete($this->table);
}
}
