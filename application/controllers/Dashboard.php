<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller

{
    public function index()
    {
        $this->load->model('M_dashboard');
        $data['jumlahmerk'] = $this->M_dashboard->jumlahmerk();
        $data['jumlahmobil'] = $this->M_dashboard->jumlahmobil();
        $data['jumlahakun'] = $this->M_dashboard->jumlahakun();
        $data['jumlahtransaksi'] = $this->M_dashboard->jumlahtransaksi();



        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('Dashboard/index', $data);
        $this->load->view('templates/footer');
    }
}
