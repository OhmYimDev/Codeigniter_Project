<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PositionController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('position_model');
    }

    public function index()
    {
        $data['positions'] = $this->position_model->list();
        // echo '<pre>';
        // print_r($positions);
        // echo '</pre>';
        // exit;
        $this->load->view('layouts/header');
        $this->load->view('layouts/navbar');
        $this->load->view('admin/position', $data);
        $this->load->view('layouts/footer');
    }

    public function add()
    {
        $this->load->view('layouts/header');
        $this->load->view('layouts/navbar');
        $this->load->view('admin/position_form_add');
        $this->load->view('layouts/footer');
    }

    public function insert()
    {
        $this->position_model->add_position();
        redirect('positioncontroller');
    }

    public function edit($id)
    {
        $data['position'] = $this->position_model->read($id);

        $this->load->view('layouts/header');
        $this->load->view('layouts/navbar');
        $this->load->view('admin/position_form_edit', $data);
        $this->load->view('layouts/footer');
    }

    public function update()
    {
        $this->position_model->update();
        redirect('positioncontroller');
    }

    public function delete($id)
    {
        $this->position_model->delete($id);
        redirect('positioncontroller');
    }
}
