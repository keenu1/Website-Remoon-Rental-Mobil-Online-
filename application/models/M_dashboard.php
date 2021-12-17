<?php
class M_dashboard extends CI_Model
{
    public function get_data() 
    {
        return $this->db->get('tbl_mobil')->result_array();
        return $this->db->get('user')->result_array();
        // return $this->db->get('user')->result_array();
    }

    public function jumlahmobil()
    {   
        $query = $this->db->get('tbl_mobil');
        if($query->num_rows()>0)
        {
          return $query->num_rows();
        }
        else
        {
          return 0;
        }
    }

    public function jumlahakun()
    {   
        $query = $this->db->get('user');
        if($query->num_rows()>0)
        {
          return $query->num_rows();
        }
        else
        {
          return 0;
        }
    }

    public function jumlahtransaksi()
    {   
        $query = $this->db->get('tbl_transaksi');
        if($query->num_rows()>0)
        {
          return $query->num_rows();
        }
        else
        {
          return 0;
        }
    }

    public function jumlahmerk()
    {   
        $query = $this->db->get('tbl_merk');
        if($query->num_rows()>0)
        {
          return $query->num_rows();
        }
        else
        {
          return 0;
        }
    }
}
