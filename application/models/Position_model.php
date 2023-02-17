<?php

class Position_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function list()
    {
        $query = $this->db->get('tbl_position');
        return $query->result();
    }

    public function add_position()
    {
        $data = array(
            'p_name' => $this->input->post('position_name')
        );

        $query = $this->db->insert('tbl_position', $data);
    }

    public function read($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_position');
        $this->db->where('p_id', $id);
        $query = $this->db->get();
        return $query->row();
    }

    public function update()
    {
        $data = array(
            'p_name' => $this->input->post('position_name')
        );

        $this->db->where('p_id', $this->input->post('p_id'));
        $this->db->update('tbl_position', $data);
    }

    public function delete($id)
    {
        $this->db->where('p_id', $id);
        $this->db->delete('tbl_position');
    }
}
