<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DoctypeController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('doctype_model');
    }

    public function index()
    {
        $data['doctype'] = $this->doctype_model->list();
        // echo '<pre>';
        // print_r($positions);
        // echo '</pre>';
        // exit;
        $this->load->view('layouts/header');
        $this->load->view('layouts/navbar');
        $this->load->view('admin/doctype', $data);
        $this->load->view('layouts/footer');
    }

    public function add()
    {
        $this->load->view('layouts/header');
        $this->load->view('layouts/navbar');
        $this->load->view('admin/doctype_form_add');
        $this->load->view('layouts/footer');
    }

    public function insert()
    {
        $this->doctype_model->add();
        redirect('doctypecontroller');
    }

    public function edit($id)
    {
        $data['doctype'] = $this->doctype_model->read($id);

        $this->load->view('layouts/header');
        $this->load->view('layouts/navbar');
        $this->load->view('admin/doctype_form_edit', $data);
        $this->load->view('layouts/footer');
    }

    public function update()
    {
        $this->doctype_model->update();
        redirect('doctypecontroller');
    }

    public function delete($id)
    {
        $this->doctype_model->delete($id);
        redirect('doctypecontroller');
    }
}
