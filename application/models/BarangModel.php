<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BarangModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }


    public function get_all_barang()
    {
        $this->db->from('barang');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_by_id($id)
    {
        return $this->db->get_where('barang', array('id_barang' => $id))->row();
    }

    public function createOrUpdate()
    {
        $this->load->helper('url');
        $id = $this->input->post('id_barang');

        $data = array(
            'nama_barang' => $this->input->post('nama_barang'),
            'harga_barang' => $this->input->post('harga_barang'),
            'biaya_penyimpanan' => $this->input->post('biaya_penyimpanan'),
            'periode_permintaan' => $this->input->post('periode_permintaan'),
            'konversi' => $this->input->post('konversi'),
            'satuan' => $this->input->post('satuan')
        );
        if (empty($id)) {
            return $this->db->insert('barang', $data);
        } else {
            $this->db->where('id_barang', $id);
            return $this->db->update('barang', $data);
        }
    }

    public function delete($id)
    {
        $this->db->where('id_barang', $id);
        return $this->db->delete('barang');
    }
}
