<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Merk extends CI_Controller

{
    public function index()
    {
        $this->load->model('M_merk');
        $data['namamerk']= $this->M_merk->get_data();
        $data['no'] = 1;

        $data['title'] = 'Data Merk';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('Merk/index', $data);
        $this->load->view('templates/footer');

    }

    public function tambah_data()
    {
        $this->load->model('M_merk');
        $data = [
            'merk' => $this->input->post('merk'),
        ];

        $this->M_merk->input_data($data, 'tbl_merk');
        redirect('Merk/index');
    }
    
    public function hapus($id)
    {
        $this->load->model('M_merk');
        $where = ['id' => $id];
        $this->M_merk->hapus_data($where,'tbl_merk');
        redirect('Merk/index');
    }
}
