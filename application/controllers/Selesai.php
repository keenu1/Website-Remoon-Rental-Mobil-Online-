<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Selesai extends CI_Controller

{
    public function index($id)
    {
        // $this->load->model('m_mobil');
        $this->load->model('M_transaksi');
        // $data['harga']= $this->m_mobil->get_data();
        $data['tbsewa'] = $this->M_transaksi->get_tbl_transaksi($id);

        $data['title'] = 'Administrator profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('Selesai/index', $data);
        $this->load->view('templates/footer');
    }

    public function sewa($id)
    {
        $this->load->model('M_transaksi');
        $sewadetail = new stdClass();
        $sewadetail->id = null;
        $data = array(
            'row' => $sewadetail
        );
        
        $data['tbsewa'] = $this->M_transaksi->get_tbl_transaksi($id);
        $data['row'] = $this->M_transaksi->get_transaksi($id);

        
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('Selesai/index', $data);
        $this->load->view('templates/footer');
    }
}
