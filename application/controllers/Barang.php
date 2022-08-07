<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('BarangModel');
    }

    public function index()
    {
        $data['barang'] = $this->BarangModel->get_all_barang();
        $this->load->view('barang_index', $data);
    }

    public function create()
    {
        $this->load->view('barang_create');
    }

    public function edit($id)
    {
        $data['barang'] = $this->BarangModel->get_by_id($id);
        $this->load->view('barang_edit', $data);
    }

    public function store()
    {

        $this->form_validation->set_rules('nama_barang', 'Nama barang', 'required');

        $id = $this->input->post('id_barang');

        if ($this->form_validation->run() === FALSE) {
            if (empty($id)) {
                redirect(base_url('barang_create'));
            } else {
                redirect(base_url('barang_edit/' . $id));
            }
        } else {
            $data['barang'] = $this->BarangModel->createOrUpdate();
            redirect(base_url('barang_index'));
        }
    }

    public function delete($id)
    {
        $this->BarangModel->delete($id);

        redirect(base_url('barang_index'));
    }
}
