<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller

{
    public function index()
    {
        $this->load->model('M_profile');
        $data['dataprofile'] = $this->M_profile->user();
        $data['titleHeader'] = 'Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('Profile/index', $data);
        $this->load->view('templates/footer');
    }

    function edit()
    {
        $this->load->model('M_profile');
        $akun = new stdClass();
        $akun->id = null;

        $data['titleHeader'] = 'Edit';



        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('Profile/index', $data);
        $this->load->view('templates/footer');
    }

    function update()
    {
        $this->load->model('M_profile');

        $id = $this->input->post('id');

        $username = $this->input->post('username');
        $alamat = $this->input->post('alamat');
        $phone_number = $this->input->post('phone_number');
        $address = $this->input->post('address');

        $data = array(
            'name' => $username,
            'address' => $alamat,
            'phone_number' => $phone_number,
            'address' => $address
        );

        $where = array(
            'id' => $id
        );

        $this->M_profile->update_user($where, $data, 'user');
        redirect('Profile/index/' . $id);
    }
}
