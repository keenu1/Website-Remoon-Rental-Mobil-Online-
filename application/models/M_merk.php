<?php
class M_merk extends CI_Model
{
    public function get_data() 
    {
        return $this->db->get('tbl_merk')->result_array();
    }

    public function input_data($data)
    {
        $this->db->insert('tbl_merk', $data);
    }

    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}
