<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mobil extends CI_Controller

{
    public function index()
    {
        $this->load->model('M_mobil');
        $data['namamobil']= $this->M_mobil->get_data();
        $data['merk'] = $this->M_mobil->get_merk();
        $data['no'] = 1;
        
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('Mobil/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $this->load->model('M_mobil');
        $id_merk = $this->input->post('id_merk');
        $nama = $this->input->post('nama');
        $warna = $this->input->post('warna');
        $jumlah_kursi = $this->input->post('jumlah_kursi');
        $no_polisi = $this->input->post('no_polisi');
        $harga = $this->input->post('harga');
        $gambar = $_FILES['gambar'];
        if ($gambar=''){}else{
            $config['upload_path']      = './assets/mobil/';
            $config['allowed_types']    = 'jpg|png|jpeg|gif';

            $this->load->library('upload');
            $this->upload->initialize($config);
            if(!$this->upload->do_upload('gambar')){
                echo "upload gagal"; die();
            }else{
                $gambar=$this->upload->data('file_name');
            }
        }

        $data = [
            'id_merk'       => $id_merk,
            'nama'          => $nama,
            'warna'         => $warna,
            'jumlah_kursi'  => $jumlah_kursi,
            'no_polisi'     => $no_polisi,
            'harga'         => $harga,
            'gambar'        => $gambar,
        ]; 

        $this->M_mobil->input_data($data, 'tbl_mobil');
        redirect('Mobil/index');
    }

    public function hapus($id)
    {
        $this->load->model('M_mobil');
        $where = ['id' => $id];
        $this->M_mobil->hapus_data($where,'tbl_mobil');
        redirect('Mobil/index');
    }

    public function detail($id)
    {
        $this->load->model('M_mobil');
        $mobil = new stdClass();
        $mobil->id_merk = null;
        $mobil->name = null;
        $data = array(
            'row' => $mobil
        );
        $data['row'] = $this->M_mobil->get($id);

        
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('Mobil/detail', $data);
        $this->load->view('templates/footer');
    }
}
