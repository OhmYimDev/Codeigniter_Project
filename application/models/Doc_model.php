<?php

class Doc_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function list()
    {
        $this->db->select('d.*, t.d_name');
        $this->db->from('tbl_doc as d');
        $this->db->join('tbl_doc_type as t', 'd.d_id = t.d_id');
        $this->db->order_by("doc_save", "desc");
        $query = $this->db->get();

        return $query->result();
    }

    public function list_doc_emp()
    {
        $this->db->select('d.*, t.d_name');
        $this->db->from('tbl_doc as d');
        $this->db->join('tbl_doc_type as t', 'd.d_id = t.d_id');
        $this->db->where('doc_status', 1);
        $this->db->order_by("doc_save", "desc");
        $query = $this->db->get();

        return $query->result();
    }

    public function add()
    {
        $config['upload_path'] = './docs/';
        $config['allowed_types'] = 'pdf';
        $config['max_size'] = '5000';
        $config['encrypt_name'] = true;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('doc_file')) {
            echo $this->upload->display_errors();
        } else {
            $data = $this->upload->data();
            $filename = $data['file_name'];
            $data = array(
                'doc_status' => $this->input->post('doc_status'),
                'd_id' => $this->input->post('d_id'),
                'doc_num' => $this->input->post('doc_num'),
                'doc_name' => $this->input->post('doc_name'),
                'doc_from' => $this->input->post('doc_from'),
                'doc_date' => $this->input->post('doc_date'),
                'doc_to' => $this->input->post('doc_to'),
                'doc_file' => $filename
            );

            $query = $this->db->insert('tbl_doc', $data);

            if ($query) {
                echo "<script>";
                echo "alert('Data has been added successful.');";
                echo "</script>";
            } else {
                echo "<script>";
                echo "alert('Something went worng!');";
                echo "</script>";
            }
        }
    }

    public function read($doc_id)
    {
        $this->db->select('d.*, t.d_id, t.d_name');
        $this->db->from('tbl_doc as d');
        $this->db->where('doc_id', $doc_id);
        $this->db->join('tbl_doc_type as t', 'd.d_id = t.d_id');
        $query = $this->db->get();
        return $query->row();
    }

    public function update()
    {

        $config['upload_path'] = './docs/';
        $config['allowed_types'] = 'pdf';
        $config['max_size'] = '5000';
        $config['encrypt_name'] = true;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('doc_file')) {

            $data = array(
                'doc_status' => $this->input->post('doc_status'),
                'd_id' => $this->input->post('d_id'),
                'doc_num' => $this->input->post('doc_num'),
                'doc_name' => $this->input->post('doc_name'),
                'doc_from' => $this->input->post('doc_from'),
                'doc_date' => $this->input->post('doc_date'),
                'doc_to' => $this->input->post('doc_to')
            );

            $this->db->where('doc_id', $this->input->post('doc_id'));
            $query = $this->db->update('tbl_doc', $data);

            if ($query) {
                echo "<script>";
                echo "alert('Data has been updated successful.');";
                echo "</script>";
            } else {
                echo "<script>";
                echo "alert('Something went worng!');";
                echo "</script>";
            }
        } else {

            $data = $this->upload->data();
            $filename = $data['file_name'];

            $data = array(
                'doc_status' => $this->input->post('doc_status'),
                'd_id' => $this->input->post('d_id'),
                'doc_num' => $this->input->post('doc_num'),
                'doc_name' => $this->input->post('doc_name'),
                'doc_from' => $this->input->post('doc_from'),
                'doc_date' => $this->input->post('doc_date'),
                'doc_to' => $this->input->post('doc_to'),
                'doc_file' => $filename
            );

            $this->db->where('doc_id', $this->input->post('doc_id'));
            $query = $this->db->update('tbl_doc', $data);

            if ($query) {
                echo "<script>";
                echo "alert('Data has been updated successful.');";
                echo "</script>";
            } else {
                echo "<script>";
                echo "alert('Something went worng!');";
                echo "</script>";
            }
        }
    }
}
