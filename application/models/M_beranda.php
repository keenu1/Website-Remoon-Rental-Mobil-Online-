<?php
class M_beranda extends CI_Model
{
    public function get_data() 
    {
        return $this->db->get('tbl_mobil')->result_array();
    }

    public function get($mbl = null)
    {
        $this->db->select('*');
        $this->db->from('tbl_merk');
        $this->db->join('tbl_mobil', 'tbl_mobil.id_merk = tbl_merk.id');
        if($mbl != null){
            $this->db->where('tbl_mobil.id', $mbl);
        }
        $query = $this->db->get()->result_array();
        return $query;
    }

    public function get_transaksi($id = null)
    {
        $this->db->select('*');
        $this->db->from('tbl_transaksi');
        $this->db->join('tbl_mobil', 'tbl_mobil.id = tbl_transaksi.id_mobil');
        $this->db->join('user', 'user.id = tbl_transaksi.id_user');
        if($id != null){
            $this->db->where('tbl_transaksi.id', $id);
        }
        $query = $this->db->get()->result_array();
        return $query;
    }
}
