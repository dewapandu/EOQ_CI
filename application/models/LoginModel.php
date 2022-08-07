<?php
class LoginModel extends CI_Model
{
    function can_login($username, $password)
    {
        $this->db->where('username', $username);
        $query = $this->db->get('pegawai');
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $store_password = $row->password;
                if ($password == $store_password) {
                    $this->session->set_userdata('id', $row->id_pegawai);
                    $this->session->set_userdata('name', $row->nama_pegawai);
                    $this->session->set_userdata('username', $row->username);
                    $this->session->set_userdata('address', $row->alamat_pegawai);
                    $this->session->set_userdata('role', $row->id_bagian);
                } else {
                    return 'Wrong Password';
                }
            }
        } else {
            return 'Wrong Username';
        }
    }
}
