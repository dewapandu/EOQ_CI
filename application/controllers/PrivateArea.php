<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PrivateArea extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('id')) {
            redirect('login');
        }
    }

    function index()
    {
        echo '<br /><br /><br /><h1 align="center">Welcome User</h1>';
        echo '<p align="center"><a href="' . base_url() . 'private_area/logout">Logout</a></p>';
    }

}
