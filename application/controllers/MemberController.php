<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MemberController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('member_model');
        $this->load->model('position_model');
    }

    public function index()
    {
        $data['member'] = $this->member_model->list();
        $this->load->view('layouts/header');
        $this->load->view('layouts/navbar');
        $this->load->view('admin/member', $data);
        $this->load->view('layouts/footer');
    }

    public function add()
    {
        $data['position'] = $this->position_model->list();
        $this->load->view('layouts/header');
        $this->load->view('layouts/navbar');
        $this->load->view('admin/member_form_add', $data);
        $this->load->view('layouts/footer');
    }

    public function insert()
    {
        $this->member_model->add();
        redirect('membercontroller', 'refresh');
    }

    public function edit($id)
    {
        $data['member'] = $this->member_model->read($id);
        $data['position'] = $this->position_model->list();
        $this->load->view('layouts/header');
        $this->load->view('layouts/navbar');
        $this->load->view('admin/member_form_edit', $data);
        $this->load->view('layouts/footer');
    }

    public function update()
    {
        $this->member_model->update();
        redirect('membercontroller', 'refresh');
    }

    public function update_password()
    {
        $this->member_model->update_password();
        redirect('membercontroller', 'refresh');
    }


    public function delete($id)
    {
        $this->member_model->delete($id);
        redirect('membercontroller', 'refresh');
    }

    public function password($id)
    {
        $data['member'] = $this->member_model->read($id);
        $this->load->view('layouts/header');
        $this->load->view('layouts/navbar');
        $this->load->view('admin/member_form_password', $data);
        $this->load->view('layouts/footer');
    }
}
