<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('id')) {
            redirect('welcome');
        }
        $this->load->library('form_validation');
        $this->load->model('LoginModel');
    }

    function index()
    {
        $this->load->view('login');
    }

    function validation()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run()) {
            $result = $this->LoginModel->can_login($this->input->post('username'), $this->input->post('password'));
            if ($result == '') {
                redirect('welcome');
            } else {
                $this->session->set_flashdata('message', $result);
                redirect('login');
            }
        } else {
            $this->index();
        }
    }
}
