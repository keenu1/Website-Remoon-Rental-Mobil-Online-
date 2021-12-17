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
            if($prof != null){
                $this->db->where('user.id', $prof);
            }
            $query = $this->db->get()->result_array();
            return $query;
        }
}