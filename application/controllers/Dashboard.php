<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

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
        // $sesi['total_peninggalan'] = $this->M_dashboard->hitungpeninggalan();
        $sesi['total1'] = $this->M_dashboard->hitungpeninggalan();
        $sesi['total2'] = $this->M_dashboard->hitungdaerah();
        $sesi['total3'] = $this->M_dashboard->hitungpakaian();
        $sesi['total4'] = $this->M_dashboard->hitunguser();
        $this->load->view('dashboard', $sesi);
    }
}
