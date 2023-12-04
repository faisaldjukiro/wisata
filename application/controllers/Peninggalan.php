<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Peninggalan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('M_peninggalan');
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
        $sesi['hasil'] = $this->M_peninggalan->tampil();
        $this->load->view('peninggalan', $sesi);
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
        $this->load->view('p_tambah', $sesi);
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
            echo 'Gambar Upload';
        } else {

            $foto = $this->upload->data();
            $foto = $foto['file_name'];
            $id_daerah = $this->input->post('id_daerah', TRUE);
            $nama_peninggalan = $this->input->post('nama_peninggalan', TRUE);
            $keterangan = $this->input->post('keterangan', TRUE);
            $lokasi = $this->input->post('lokasi', TRUE);
            $latitude = $this->input->post('latitude', TRUE);
            $longitude = $this->input->post('longitude', TRUE);
            $data = array(
                'id_daerah' => $id_daerah,
                'nama_peninggalan' => $nama_peninggalan,
                'keterangan' => $keterangan,
                'lokasi' => $lokasi,
                'latitude' => $latitude,
                'longitude' => $longitude,
                'foto' => $foto,
            );
            $this->db->insert('tb_peninggalan', $data);
            redirect('peninggalan');
        }
    }
    public function hapus($id)
    {
        $this->M_peninggalan->hapus($id);
        redirect('peninggalan');
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
        $sesi['hasil'] = $this->M_peninggalan->ambil($id);
        $sesi['hasill'] = $this->M_peninggalan->tampil_select();

        $this->load->view('p_edit', $sesi);
    }
    public function proses_edit()
    {
        // $this->M_peninggalan->proses();
        // redirect('peninggalan');
        $config['upload_path']          = './gambar/';
        $config['allowed_types']        = 'gif|jpg|png|PNG|JPEG|jpeg';
        $config['max_size']             = 10000;
        $config['max_width']            = 10000;
        $config['max_height']           = 10000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('userfile')) {
            echo 'Gagal Update';
        } else {

            $foto = $this->upload->data();
            $foto = $foto['file_name'];
            $update = [
                'id_daerah' => $this->input->post('id_daerah'),
                'nama_peninggalan' => $this->input->post('nama_peninggalan'),
                'foto' => $foto,
                'keterangan' => $this->input->post('keterangan')

            ];

            $this->db->where('id_peninggalan', $this->input->post('id_peninggalan'));
            $this->db->update('tb_peninggalan', $update);
            redirect('peninggalan');
        }
    }
    public function getlokasi()
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
        // $sesi['hasil'] = $this->M_peninggalan->tampil();
        $this->load->view('maps', $sesi);
    }

    public function editlokasi($id)
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
        $sesi['hasil'] = $this->M_peninggalan->ambil_id($id);
        $this->load->view('e_maps', $sesi);
    }
}
