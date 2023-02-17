<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UserController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('member_model');
    }

    public function index()
    {
        $this->load->view('layouts/header');
        $this->load->view('layouts/navbar_login');
        $this->load->view('login_form');
        $this->load->view('layouts/footer');
    }

    public function check()
    {
        $result = $this->member_model->fetch_user_login(
            $this->input->post('m_username'),
            sha1($this->input->post('m_password')),
        );

        if (!empty($result)) {
            $session = array(
                'm_id' => $result->m_id,
                'm_level' => $result->p_id,
                'm_name' => $result->m_fname,
            );

            $this->session->set_userdata($session);
            $this->session->unset_userdata('login_fail');

            $m_level = $_SESSION['m_level'];

            if ($m_level == '1') {
                redirect('admincontroller', 'refresh');
            } else if ($m_level == '2') {
                redirect('bosscontroller', 'refresh');
            } else if ($m_level == '3') {
                redirect('staffcontroller', 'refresh');
            } else if ($m_level == '4') {
                redirect('employeecontroller', 'refresh');
            }
        } else {
            $this->session->unset_userdata(array('m_id', 'm_level', 'm_name'));
            $this->session->set_userdata('login_fail', 'Username or Password incorrect.');
            redirect('usercontroller', 'refresh');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata(array('m_id', 'm_level', 'm_name'));
        redirect('usercontroller', 'refresh');
    }
}
