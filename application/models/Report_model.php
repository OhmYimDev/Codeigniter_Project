<?php

class Report_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function count_doc()
    {
        $this->db->select('COUNT(doc_id) as doc_total');
        $this->db->from('tbl_doc');
        $query = $this->db->get();
        return $query->row();
    }

    public function count_doc_ststus()
    {
        $this->db->select('doc_status, COUNT(doc_id) as doc_status_total');
        $this->db->from('tbl_doc');
        $this->db->group_by('doc_status');
        $query = $this->db->get();
        return $query->result();
    }

    public function count_doc_type()
    {
        $this->db->select('t.d_name, COUNT(d.doc_id) as doc_type_total');
        $this->db->from('tbl_doc as d');
        $this->db->join('tbl_doc_type as t', 'd.d_id = t.d_id');
        $this->db->group_by('d.d_id');
        $query = $this->db->get();
        return $query->result();
    }

    public function count_doc_date()
    {
        $this->db->select('DATE_FORMAT(d.doc_save, "%d %M %Y") as docsave, COUNT(d.doc_id) as doc_date_total');
        $this->db->from('tbl_doc as d');
        $this->db->group_by('DATE_FORMAT(d.doc_save, "%d%")');
        $query = $this->db->get();
        return $query->result();
    }

    public function count_doc_month()
    {
        $this->db->select('DATE_FORMAT(d.doc_save, "%M %Y") as docsave, COUNT(d.doc_id) as doc_date_total');
        $this->db->from('tbl_doc as d');
        $this->db->group_by('DATE_FORMAT(d.doc_save, "%m%")');
        $query = $this->db->get();
        return $query->result();
    }

    public function count_doc_year()
    {
        $this->db->select('DATE_FORMAT(d.doc_save, "%Y") as docsave, COUNT(d.doc_id) as doc_date_total');
        $this->db->from('tbl_doc as d');
        $this->db->group_by('DATE_FORMAT(d.doc_save, "%y%")');
        $query = $this->db->get();
        return $query->result();
    }

    public function count_doc_form()
    {
        $date_start = $this->input->post('date_start');
        $date_end = $this->input->post('date_end');

        $date_end = $date_end . ' 23:59:59';

        $this->db->select('d.*, t.d_name');
        $this->db->from('tbl_doc as d');
        $this->db->join('tbl_doc_type as t', 'd.d_id = t.d_id');
        $this->db->where('doc_date >= ', $date_start);
        $this->db->where('doc_date <= ', $date_end);
        $query = $this->db->get();
        return $query->result();
    }
}
