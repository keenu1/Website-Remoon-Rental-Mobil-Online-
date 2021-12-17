<?php
class M_mobil extends CI_Model
{
    public function get_data() 
    {
        return $this->db->get('tbl_mobil')->result_array();

    }

    public function get_merk()
    {
        return $this->db->get('tbl_merk')->result_array();
    }

    public function input_data($data)
    {
        $this->db->insert('tbl_mobil', $data);
    }

    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function get($id = null)
    {
        $this->db->select('*');
        $this->db->from('tbl_merk');
        $this->db->join('tbl_mobil', 'tbl_mobil.id_merk = tbl_merk.id');
        if($id != null){
            $this->db->where('tbl_mobil.id', $id);
        }
        $query = $this->db->get()->result_array();
        return $query;
    }
}

