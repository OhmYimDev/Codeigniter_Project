<?php
defined('BASEPATH') or exit('No direct script access allowed');

class EmployeeController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('doc_model');
        $this->load->model('doctype_model');
        $this->load->model('member_model');

        if ($this->session->userdata('m_level') != '4') {
            redirect('usercontroller', 'refresh');
        }
    }

    public function index()
    {
        $data['document'] = $this->doc_model->list_doc_emp();

        $this->load->view('layouts/header');
        $this->load->view('layouts/navbar_employee');
        $this->load->view('employee/document', $data);
        $this->load->view('layouts/footer');
    }

    public function profile()
    {
        $m_id = $_SESSION['m_id'];
        $data['member'] = $this->member_model->read($m_id);

        $this->load->view('layouts/header');
        $this->load->view('layouts/navbar_employee');
        $this->load->view('employee/employee_form_edit', $data);
        $this->load->view('layouts/footer');
    }

    public function update_employee()
    {
        $this->member_model->update_profile();
        redirect('employeecontroller', 'refresh');
    }

    public function password()
    {
        $m_id = $_SESSION['m_id'];
        $data['member'] = $this->member_model->read($m_id);
        $this->load->view('layouts/header');
        $this->load->view('layouts/navbar');
        $this->load->view('employee/member_form_password', $data);
        $this->load->view('layouts/footer');
    }

    public function update_password()
    {
        $this->member_model->update_password();
        redirect('employeecontroller', 'refresh');
    }
}
