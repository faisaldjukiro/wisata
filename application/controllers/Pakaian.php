<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pakaian extends CI_Controller
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
        $sesi['hasil'] = $this->M_pakaian->tampil();

        $this->load->view('pakaian', $sesi);
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
        $sesi['hasil'] = $this->M_peninggalan->tampil_select();
        $this->load->view('pakaian_tambah', $sesi);
    }
    public function proses()
    {
        $config['upload_path']          = './gambar/';
        $config['allowed_types']        = 'gif|jpg|png|PNG|JPEG';
        $config['max_size']             = 10000;
        $config['max_width']            = 10000;
        $config['max_height']           = 10000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('userfile')) {
            echo 'Gagal Upload';
        } else {

            $foto = $this->upload->data();
            $foto = $foto['file_name'];
            $id_daerah = $this->input->post('id_daerah', TRUE);
            $nama_pakaian = $this->input->post('nama_pakaian', TRUE);
            $keterangan = $this->input->post('keterangan', TRUE);
            $data = array(
                'id_daerah' => $id_daerah,
                'nama_pakaian' => $nama_pakaian,
                'keterangan' => $keterangan,
                'foto' => $foto,
            );
            $this->db->insert('tb_adat', $data);
            redirect('pakaian');
        }
    }
    public function hapus($id)
    {
        $this->M_pakaian->hapus($id);
        redirect('pakaian');
    }
    public function p_edit($id)
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
        $sesi['hasil'] = $this->M_pakaian->ambil($id);
        $sesi['hasill'] = $this->M_pakaian->tampil_select();
        $this->load->view('pakaian_edit', $sesi);
    }
}
