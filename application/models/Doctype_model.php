<?php

class Doctype_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function list()
    {
        $query = $this->db->get('tbl_doc_type');
        return $query->result();
    }

    public function add()
    {
        $data = array(
            'd_name' => $this->input->post('d_name')
        );

        $query = $this->db->insert('tbl_doc_type', $data);
    }

    public function read($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_doc_type');
        $this->db->where('d_id', $id);
        $query = $this->db->get();
        return $query->row();
    }

    public function update()
    {
        $data = array(
            'd_name' => $this->input->post('d_name')
        );

        $this->db->where('d_id', $this->input->post('d_id'));
        $this->db->update('tbl_doc_type', $data);
    }

    public function delete($id)
    {
        $this->db->where('d_id', $id);
        $this->db->delete('tbl_doc_type');
    }
}
