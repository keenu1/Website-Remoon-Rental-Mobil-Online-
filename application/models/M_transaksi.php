<?php
class M_transaksi extends CI_model
{
    public function get_mobil($id = null)
    {
        $this->db->select('*');
        $this->db->from('tbl_mobil');
        if ($id != null) {
            $this->db->where('id', $id);
        }
        $query = $this->db->get()->result_array();
        return $query;
    }

    public function get_user($id = null)
    {
        $this->db->select('*');
        $this->db->from('user');
        if ($id != null) {
            $this->db->where('id', $id);
        }
        $query = $this->db->get()->result_array();
        return $query;
    }

    public function input_data($data)
    {
        $this->db->insert('tbl_transaksi', $data);
        return $this->db->insert_id();
    }

    public function get_tbl_transaksi($id = null)
    {
        $this->db->select('*');
        $this->db->from('tbl_transaksi');
        if ($id != null) {
            $this->db->where('id_transaksi', $id);
        }
        $query = $this->db->get()->result_array();
        return $query;
    }

    public function get_all($id = null)
    {
        $this->db->select('*');
        $this->db->from('tbl_transaksi');
        $this->db->join('tbl_mobil', 'tbl_mobil.id = tbl_transaksi.id_mobil');
        $this->db->join('user', 'user.id = tbl_transaksi.id_user');
        if ($id != null) {
            $this->db->where('id_transaksi', $id);
        }
        $query = $this->db->get()->result_array();
        return $query;
    }

    public function get_pesanan($id = null)
    {
        $this->db->select('*');
        $this->db->from('tbl_transaksi');
        $this->db->join('tbl_mobil', 'tbl_mobil.id = tbl_transaksi.id_mobil');
        $this->db->join('user', 'user.id = tbl_transaksi.id_user');
        if ($id != null) {
            $this->db->where('tbl_transaksi.id_user', $id);
        }
        $query = $this->db->get()->result_array();
        return $query;
    }

    public function get_all_cust($id = null, $user_id = null)
    {

        $this->db->select('*');
        $this->db->from('tbl_transaksi');
        $this->db->join('tbl_mobil', 'tbl_mobil.id = tbl_transaksi.id_mobil');
        $this->db->join('user', 'user.id = tbl_transaksi.id_user');
        $this->db->where('id_user', $user_id);

        if ($id != null) {
            $this->db->where('id_user', $id);
        }

        $this->db->order_by('tbl_transaksi.id_transaksi', 'DESC');
        $query = $this->db->get()->result_array();
        return $query;
    }


    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}
