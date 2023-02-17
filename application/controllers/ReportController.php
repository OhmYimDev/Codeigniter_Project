<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ReportController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('report_model');

        // if ($this->session->userdata('m_level') != '1') {
        //     redirect('usercontroller', 'refresh');
        // }
    }

    public function index()
    {
        $data['document'] = $this->report_model->count_doc();

        $this->load->view('layouts/header');
        $this->load->view('layouts/navbar_report');
        $this->load->view('report/mainpage', $data);
        $this->load->view('layouts/footer');
    }

    public function doc_status()
    {
        $data['doc_status'] = $this->report_model->count_doc_ststus();

        $this->load->view('layouts/header');
        $this->load->view('layouts/navbar_report');
        $this->load->view('report/report_doc_status', $data);
        $this->load->view('layouts/footer');
    }

    public function doc_type()
    {
        $data['doc_type'] = $this->report_model->count_doc_type();

        $this->load->view('layouts/header');
        $this->load->view('layouts/navbar_report');
        $this->load->view('report/report_doc_type', $data);
        $this->load->view('layouts/footer');
    }

    public function doc_date()
    {
        $data['doc_date'] = $this->report_model->count_doc_date();

        $this->load->view('layouts/header');
        $this->load->view('layouts/navbar_report');
        $this->load->view('report/report_doc_date', $data);
        $this->load->view('layouts/footer');
    }

    public function doc_month()
    {
        $data['doc_month'] = $this->report_model->count_doc_month();

        $this->load->view('layouts/header');
        $this->load->view('layouts/navbar_report');
        $this->load->view('report/report_doc_month', $data);
        $this->load->view('layouts/footer');
    }

    public function doc_year()
    {
        $data['doc_year'] = $this->report_model->count_doc_year();

        $this->load->view('layouts/header');
        $this->load->view('layouts/navbar_report');
        $this->load->view('report/report_doc_year', $data);
        $this->load->view('layouts/footer');
    }

    public function form()
    {
        $this->load->view('layouts/header');
        $this->load->view('layouts/navbar_report');
        $this->load->view('report/report_form');
        $this->load->view('layouts/footer');
    }

    public function get_data()
    {
        $data['report'] = $this->report_model->count_doc_form();
        $this->load->view('layouts/header');
        $this->load->view('layouts/navbar_report');
        $this->load->view('report/document', $data);
        $this->load->view('layouts/footer');
    }
}
