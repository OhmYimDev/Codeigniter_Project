<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdminController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('m_level') != '1') {
            redirect('usercontroller', 'refresh');
        }
    }

    public function index()
    {
        $this->load->view('layouts/header');
        $this->load->view('layouts/navbar');
        $this->load->view('admin/mainpage');
        $this->load->view('layouts/footer');
    }

    public function add()
    {
        $this->load->view('layouts/header');
        $this->load->view('admin/newdata');
        $this->load->view('layouts/footer');
    }
}
