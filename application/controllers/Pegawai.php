<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pegawai extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('PegawaiModel');
    }


    public function index()
    {
        $data['pegawai'] = $this->PegawaiModel->get_all_pegawai();
        $this->load->view('pegawai_index', $data);
    }

    public function delete($id)
    {
        $this->PegawaiModel->delete($id);

        redirect(base_url('pegawai_index'));
    }
}
