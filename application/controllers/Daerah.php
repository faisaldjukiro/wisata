<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Daerah extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->database();
        $this->load->model('m_daerah', TRUE);
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
        $sesi['hasil'] = $this->M_daerah->tampil_data();


        $this->load->view('daerah', $sesi);
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
        $sesi['hasil'] = $this->M_daerah->tampil_data('tb_daerah');
        $this->load->view('d_tambah', $sesi);
    }
    public function proses()
    {
        $this->M_daerah->proses();
        redirect('daerah');
    }
    public function hapus($id)
    {
        $this->M_daerah->hapus($id);
        redirect('daerah');
    }
    public function t_edit($id)
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
        $sesi['hasil'] = $this->M_daerah->ambil($id);
        $this->load->view('d_edit', $sesi);
    }

    public function p_edit()
    {
        $this->M_daerah->proses_edit();
        redirect('daerah');
    }
}
