<?php
class M_akun extends CI_Model
{
    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function get_data($id = null)
    {
        $this->db->select('*');
        $this->db->from('user');        
        if($id != null){
            $this->db->where('user.id', $id);
        }
        $query = $this->db->get()->result_array();
        return $query;
    }
}
