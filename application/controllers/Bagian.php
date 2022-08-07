<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bagian extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('BagianModel');
    }


    public function index()
    {
        $data['bagian'] = $this->BagianModel->get_all_bagian();
        $this->load->view('bagian_index', $data);
    }

    public function create()
    {
        $this->load->view('bagian_create');
    }

    public function edit($id)
    {
        $data['bagian'] = $this->BagianModel->get_by_id($id);
        $this->load->view('bagian_edit', $data);
    }

    public function store()
    {

        $this->form_validation->set_rules('nama_bagian', 'Nama Bagian', 'required');

        $id = $this->input->post('id_bagian');

        if ($this->form_validation->run() === FALSE) {
            if (empty($id)) {
                redirect(base_url('bagian_create'));
            } else {
                redirect(base_url('bagian_edit/' . $id));
            }
        } else {
            $data['bagian'] = $this->BagianModel->createOrUpdate();
            redirect(base_url('bagian_index'));
        }
    }


    public function delete($id)
    {
        $this->BagianModel->delete($id);

        redirect(base_url('bagian_index'));
    }
}
