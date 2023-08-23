<?php class M_auth extends CI_Model
{
    // registrasi awal user
    public function register($data)
    {
        $this->db->insert('tbl_users', $data);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    public function login_siswa($username, $password){
        $this->db->select('*');
        $this->db->from('tbl_pengguna');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        return $this->db->get()->row();
    }

    // login data user atau admin
    public function login_admin($username, $password)
    {
        $result = $this->db->query("SELECT * FROM tbl_users WHERE username = '$username' AND password = '$password'");
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return null;
        }
    }

 
    public function update_data($data){
        $this->db->where('id_user_level', '1');
        $this->db->update('tbl_user', $data);
    }
}
