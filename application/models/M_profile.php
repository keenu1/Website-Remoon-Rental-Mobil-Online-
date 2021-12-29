<?php
class M_profile extends CI_Model
{

    public function user()
    {
        return $this->db->get('user')->result_array();
    }


    public function get_user($prof = null)
    {
        $this->db->select('*');
        $this->db->from('user');
        if ($prof != null) {
            $this->db->where('user.id', $prof);
        }
        $query = $this->db->get()->result_array();
        return $query;
    }
    function edit_user($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    function update_user($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}
