<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller

{
    public function index()
    {
        $this->load->model('M_profile');
        $data['dataprofile'] = $this->M_profile->user();

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('Profile/index', $data);
        $this->load->view('templates/footer');
    }

    public function detail_akun()
    {
        $this->load->model('M_profile');
        $akun = new stdClass();
        $akun->id = null;
        $data = array(
            'dataprofile' => $akun
        );
        $data['dataprofile'] = $this->M_profile->get_user();

        
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('Profile/detail', $data);
        $this->load->view('templates/footer');
    }
}
