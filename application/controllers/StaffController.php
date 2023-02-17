<?php
defined('BASEPATH') or exit('No direct script access allowed');

class StaffController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('doc_model');
        $this->load->model('doctype_model');
        $this->load->model('member_model');

        if ($this->session->userdata('m_level') != '3') {
            redirect('usercontroller', 'refresh');
        }
    }

    public function index()
    {
        $data['document'] = $this->doc_model->list();

        $this->load->view('layouts/header');
        $this->load->view('layouts/navbar_staff');
        $this->load->view('staff/document', $data);
        $this->load->view('layouts/footer');
    }

    public function add()
    {
        $data['doctype'] = $this->doctype_model->list();
        $this->load->view('layouts/header');
        $this->load->view('layouts/navbar_staff');
        $this->load->view('staff/document_form_add', $data);
        $this->load->view('layouts/footer');
    }

    public function insert()
    {
        $this->doc_model->add();
        redirect('staffcontroller', 'refresh');
    }

    public function edit($doc_id)
    {
        $data['document'] = $this->doc_model->read($doc_id);
        $data['doctype'] = $this->doctype_model->list();
        $this->load->view('layouts/header');
        $this->load->view('layouts/navbar_staff');
        $this->load->view('staff/document_form_edit', $data);
        $this->load->view('layouts/footer');
    }

    public function update()
    {
        $this->doc_model->update();
        redirect('staffcontroller', 'refresh');
    }

    public function profile()
    {
        $m_id = $_SESSION['m_id'];
        $data['member'] = $this->member_model->read($m_id);

        $this->load->view('layouts/header');
        $this->load->view('layouts/navbar_staff');
        $this->load->view('staff/staff_form_edit', $data);
        $this->load->view('layouts/footer');
    }

    public function update_staff()
    {
        $this->member_model->update_profile();
        redirect('staffcontroller', 'refresh');
    }

    public function password()
    {
        $m_id = $_SESSION['m_id'];
        $data['member'] = $this->member_model->read($m_id);
        $this->load->view('layouts/header');
        $this->load->view('layouts/navbar');
        $this->load->view('staff/member_form_password', $data);
        $this->load->view('layouts/footer');
    }

    public function update_password()
    {
        $this->member_model->update_password();
        redirect('staffcontroller', 'refresh');
    }
}
