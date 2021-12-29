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
        $this->M_akun->hapus_data($where, 'user');
        redirect('User/akun');
    }

    public function detail($id)
    {
        $this->load->model('M_akun');
        $roles = $this->M_akun->get_role();

        $detail = new stdClass();
        $detail->id = null;
        $detail->name = null;

        $data['titleHeader'] = 'Detail';
        $data['row'] = $this->M_akun->get_data($id);
        $data['roles'] = $roles;


        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('User/form', $data);
        $this->load->view('templates/footer');
    }

    function edit($id)
    {
        $this->load->model('M_akun');
        $roles = $this->M_akun->get_role();

        $detail = new stdClass();
        $detail->id = null;
        $detail->name = null;


        $data['titleHeader'] = 'Edit';
        $data['row'] = $this->M_akun->get_data($id);
        $data['roles'] = $roles;

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('User/form', $data);
        $this->load->view('templates/footer');
    }

    function update()
    {
        $this->load->model('M_akun');


        $id = $this->input->post('id');

        $username = $this->input->post('username');
        $alamat = $this->input->post('alamat');
        $phone_number = $this->input->post('phone_number');
        $address = $this->input->post('address');
        $role_id = $this->input->post('role_id');

        $data = array(
            'name' => $username,
            'address' => $alamat,
            'phone_number' => $phone_number,
            'address' => $address,
            'role_id' => $role_id
        );

        $where = array(
            'id' => $id
        );

        $this->M_akun->update_data($where, $data, 'user');
        redirect('User/detail/' . $id);
    }
}
