<?php
class M_akun extends CI_Model
{
    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function get_data($id = null)
    {
        $this->db->select('*');
        $this->db->from('user');
        if ($id != null) {
            $this->db->where('user.id', $id);
        }
        $query = $this->db->get()->result_array();
        return $query;
    }
    public function get_role()
    {
        $this->db->select('*');
        $this->db->from('user_role');

        $query = $this->db->get()->result_array();
        return $query;
    }
}
