<?php

class Member_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function list()
    {
        $this->db->select('m.m_id, m.m_prefix, m.m_fname, m.m_lname, p.p_name');
        $this->db->from('tbl_member as m');
        $this->db->join('tbl_position as p', 'm.p_id = p.p_id');
        $query = $this->db->get();
        return $query->result();
    }

    public function add()
    {
        $m_username = $this->input->post('m_username');
        $this->db->select('m_username');
        $this->db->where('m_username', $m_username);
        $query = $this->db->get('tbl_member');
        $num = $query->num_rows();

        if ($num > 0) {
            echo "<script>";
            echo "alert('ข้อมูลซ้ำ กรุณาเพิ่มใหม่อีกครั้ง')";
            echo "</script>";
        } else {
            $data = array(
                'p_id' => $this->input->post('p_id'),
                'm_prefix' => $this->input->post('m_prefix'),
                'm_username' => $this->input->post('m_username'),
                'm_password' => sha1($this->input->post('m_password')),
                'm_fname' => $this->input->post('m_fname'),
                'm_lname' => $this->input->post('m_lname'),
            );

            $query = $this->db->insert('tbl_member', $data);
        }

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

    public function read($id)
    {
        $this->db->select('m.m_id, m.m_username, m.m_prefix, m.m_fname, m.m_lname, m.p_id, p.p_name');
        $this->db->from('tbl_member as m');
        $this->db->where('m_id', $id);
        $this->db->join('tbl_position as p', 'm.p_id = p.p_id');
        $query = $this->db->get();
        return $query->row();
    }

    public function update()
    {
        $data = array(
            'p_id' => $this->input->post('p_id'),
            'm_prefix' => $this->input->post('m_prefix'),
            'm_fname' => $this->input->post('m_fname'),
            'm_lname' => $this->input->post('m_lname'),
        );

        $this->db->where('m_id', $this->input->post('m_id'));
        $query = $this->db->update('tbl_member', $data);

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

    public function update_profile()
    {
        $data = array(
            'm_prefix' => $this->input->post('m_prefix'),
            'm_fname' => $this->input->post('m_fname'),
            'm_lname' => $this->input->post('m_lname'),
        );

        $this->db->where('m_id', $this->input->post('m_id'));
        $query = $this->db->update('tbl_member', $data);

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

    public function update_password()
    {
        $data = array(
            'm_password' => sha1($this->input->post('m_password'))
        );

        $this->db->where('m_id', $this->input->post('m_id'));
        $query = $this->db->update('tbl_member', $data);

        if ($query) {
            echo "<script>";
            echo "alert('Password has been updated successful.');";
            echo "</script>";
        } else {
            echo "<script>";
            echo "alert('Something went worng!');";
            echo "</script>";
        }
    }


    public function delete($id)
    {
        $this->db->where('m_id', $id);
        $query = $this->db->delete('tbl_member');

        if ($query) {
            echo "<script>";
            echo "alert('Data has been deleted successful.');";
            echo "</script>";
        } else {
            echo "<script>";
            echo "alert('Something went worng!');";
            echo "</script>";
        }
    }

    public function fetch_user_login($m_username, $m_password)
    {
        $this->db->where('m_username', $m_username);
        $this->db->where('m_password', $m_password);
        $query = $this->db->get('tbl_member');
        return $query->row();
    }
}
