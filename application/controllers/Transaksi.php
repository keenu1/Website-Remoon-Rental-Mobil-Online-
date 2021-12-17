<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi extends CI_Controller

{
    public function index()
    {
        $this->load->model('M_transaksi');
        $data['title'] = 'Administrator profile';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('Transaksi/index', $data);
        $this->load->view('templates/footer');
    }

    public function sewa($id)
    {
        $this->load->model('M_transaksi');
        $data['title'] = 'Administrator profile';
        $data['mobil'] = $this->M_transaksi->get_mobil($id);
        $data['datauser'] = $this->M_transaksi->get_user($id);

        $data['tbsewa'] = $id;  
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('Transaksi/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $this->load->model('M_transaksi');
        $lama_sewa = $this->input->post('lama_sewa');
        $tanggal_ambil = $this->input->post('tanggal_ambil');
        $jaminan = $this->input->post('jaminan');
        $jenis_bayar = $this->input->post('jenis_bayar');
        $id_mobil = $this->input->post('id_mobil');
        $id_user = $this->input->post('id_user');

        $data = array(
            'lama_sewa'         => $lama_sewa,
            'tanggal_ambil'     => $tanggal_ambil,
            'jaminan'           => $jaminan,
            'jenis_bayar'       => $jenis_bayar,
            'id_mobil'          => $id_mobil,
            'id_user'           => $id_user,

        ); 
        $trans = $this->M_transaksi->input_data($data, 'tbl_transaksi');
        $data['transaksidetail'] = $this->M_transaksi->get_all($trans);

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('Selesai/index', $data);
        $this->load->view('templates/footer');
    }


}
