<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends CI_Controller

{
    public function index()
    {
        $this->load->model('M_beranda');
        $data['berandamobil']= $this->M_beranda->get();

        $data['title'] = 'Rental mobil';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('Beranda/index', $data);
        $this->load->view('templates/footer');
    }

    public function detailmobil($mbl)
    {
        $this->load->model('M_beranda');
        $detailmobil = new stdClass();
        $detailmobil->id_merk = null;
        $data = array(
            'row' => $detailmobil
        );
        $data['row'] = $this->M_beranda->get($mbl);

        
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('Beranda/detail', $data);
        $this->load->view('templates/footer');
    }
}
