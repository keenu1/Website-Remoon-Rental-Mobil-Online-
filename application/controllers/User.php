<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller

{
    public function index()
    {
        $data['title'] = 'My profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('Beranda/user', $data);
        $this->load->view('templates/footer');
    }

    public function akun()
    {
        $this->load->model('M_akun');
        $data['manajemenakun'] = $this->M_akun->get_data();
        $data['no'] = 1;

        $data['title'] = 'Manajemen Akun';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('User/akun', $data);
        $this->load->view('templates/footer');
    }

    public function hapus($id)
    {
        $this->load->model('M_akun');
        $where = ['id' => $id];
        $this->M_akun->hapus_data($where,'user');
        redirect('User/akun');
    }

    public function detail($id)
    {
        $this->load->model('M_akun');
        $detail = new stdClass();
        $detail->id = null;
        $detail->name = null;
        $data = array(
            'row' => $detail
        );
        $data['row'] = $this->M_akun->get_data($id);

        
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('User/detail', $data);
        $this->load->view('templates/footer');
    }
}
