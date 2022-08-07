<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PegawaiModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }


    public function get_all_pegawai()
    {
        $this->db->from('pegawai');
        $query = $this->db->get();
        return $query->result();
    }

    public function delete($id)
    {
        $this->db->where('id_pegawai', $id);
        return $this->db->delete('pegawai');
    }
}
