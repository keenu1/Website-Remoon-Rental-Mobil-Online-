<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pesanan extends CI_Controller

{
    public function index()
    {
        $this->load->model('M_transaksi');

        $data['row'] = $this->M_transaksi->get_all_cust(null, $this->session->userdata('user_id'));

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('Pesanan/index', $data);
        $this->load->view('templates/footer');
    }

    // public function detail()
    // {
    //     $this->load->model('M_transaksi');
    //     $pesanan = new stdClass();
    //     $pesanan->id = null;
    //     $pesanan->name = null;
    //     $data = array(
    //         'row' => $pesanan
    //     );
    //     $data['row'] = $this->M_transaksi->get_pesanan();


    //     $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    //     $this->load->view('templates/header', $data);
    //     $this->load->view('templates/sidebar', $data);
    //     $this->load->view('templates/topbar', $data);
    //     $this->load->view('pesanan/index', $data);
    //     $this->load->view('templates/footer');
    // }

    public function admin()
    {
        $this->load->model('M_transaksi');
        $pesanan = new stdClass();
        $pesanan->id = null;
        $pesanan->name = null;
        $data = array(
            'row' => $pesanan
        );
        $data['row'] = $this->M_transaksi->get_pesanan();


        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('Pesanan/admin', $data);
        $this->load->view('templates/footer');
    }

    public function lihat()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('Pesanan/lihat', $data);
        $this->load->view('templates/footer');
    }

    public function hapus($id)
    {
        $this->load->model('M_transaksi');
        $where = ['id_transaksi' => $id];
        $this->M_transaksi->hapus_data($where, 'tbl_transaksi');
        redirect('Pesanan/admin');
    }

    public function detail($id)
    {
        $this->load->model('M_transaksi');
        $detailpesanan = new stdClass();
        $detailpesanan->id_transaksi = null;
        $data = array(
            'detail' => $detailpesanan
        );
        $data['row'] = $this->M_transaksi->get_all($id);


        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('Pesanan/detailadmin', $data);
        $this->load->view('templates/footer');
    }

    public function detail_cust($id)
    {
        $this->load->model('M_transaksi');
        $detailpesanan = new stdClass();
        $detailpesanan->id_transaksi = null;
        $data = array(
            'detail' => $detailpesanan
        );
        $data['row'] = $this->M_transaksi->get_all($id);

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('Pesanan/detailcust', $data);
        $this->load->view('templates/footer');
    }
}
