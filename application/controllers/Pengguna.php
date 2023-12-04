<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengguna extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('M_pengguna');
    }

    function index()
    {
        if (!$this->session->userdata('logged_in')) {
            $pemberitahuan = "<div class='alert alert-warning'>Anda harus login dulu </div>";
            $this->session->set_flashdata('pemberitahuan', $pemberitahuan);
            redirect('login');
        }

        $session_data = $this->session->userdata('logged_in');
        $sesi['nama'] = $session_data['nama'];
        $sesi['username'] = $session_data['username'];
        $sesi['email'] = $session_data['email'];
        $sesi['alamat'] = $session_data['alamat'];
        $sesi['tgl_lahir'] = $session_data['tgl_lahir'];
        $sesi['hasil'] = $this->M_pengguna->tampil();
        $this->load->view('pengguna', $sesi);
    }
    public function tambah()
    {
        if (!$this->session->userdata('logged_in')) {
            $pemberitahuan = "<div class='alert alert-warning'>Anda harus login dulu </div>";
            $this->session->set_flashdata('pemberitahuan', $pemberitahuan);
            redirect('login');
        }

        $session_data = $this->session->userdata('logged_in');
        $sesi['nama'] = $session_data['nama'];
        $sesi['username'] = $session_data['username'];
        $sesi['email'] = $session_data['email'];
        $sesi['alamat'] = $session_data['alamat'];
        $sesi['tgl_lahir'] = $session_data['tgl_lahir'];
        // $sesi['hasil'] = $this->M_daerah->tampil_data('tb_daerah');
        $this->load->view('u_tambah', $sesi);
    }
    public function proses()
    {
        $this->M_pengguna->proses();
        redirect('pengguna');
    }
    public function hapus($id)
    {
        $this->M_pengguna->hapus($id);
        redirect('pengguna');
    }

    public function edit($id)
    {
        if (!$this->session->userdata('logged_in')) {
            $pemberitahuan = "<div class='alert alert-warning'>Anda harus login dulu </div>";
            $this->session->set_flashdata('pemberitahuan', $pemberitahuan);
            redirect('login');
        }

        $session_data = $this->session->userdata('logged_in');
        $sesi['nama'] = $session_data['nama'];
        $sesi['username'] = $session_data['username'];
        $sesi['email'] = $session_data['email'];
        $sesi['alamat'] = $session_data['alamat'];
        $sesi['tgl_lahir'] = $session_data['tgl_lahir'];
        $sesi['hasil'] = $this->M_pengguna->ambil($id);
        $this->load->view('u_edit', $sesi);
    }
    public function p_edit()
    {
        $this->M_pengguna->proses_edit();
        redirect('pengguna');
    }
}
