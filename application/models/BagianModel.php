<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BagianModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_all_bagian()
    {
        $this->db->from('bagian');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_by_id($id)
    {
        return $this->db->get_where('bagian', array('id_bagian' => $id))->row();
    }

    public function createOrUpdate()
    {
        $this->load->helper('url');
        $id = $this->input->post('id_bagian');

        $data = array(
            'nama_bagian' => $this->input->post('nama_bagian')
        );
        if (empty($id)) {
            return $this->db->insert('bagian', $data);
        } else {
            $this->db->where('id_bagian', $id);
            return $this->db->update('bagian', $data);
        }
    }

    public function delete($id)
    {
        $this->db->where('id_bagian', $id);
        return $this->db->delete('bagian');
    }
}
