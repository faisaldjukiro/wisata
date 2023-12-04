<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_pengguna extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function tampil()
    {
        $this->db->select('*');
        $this->db->from('tb_user');
        $this->db->order_by('id_user', 'desc');
        $data = $this->db->get();
        return $data->result_array();
    }
    public function proses()
    {
        $data = [
            "nama" => $this->input->post('nama'),
            "email" => $this->input->post('email'),
            "alamat" => $this->input->post('alamat'),
            "tgl_lahir" => $this->input->post('tgl_lahir'),
            "username" => $this->input->post('username'),
            "password" => md5($this->input->post('password')),
        ];
        $this->db->insert('tb_user', $data);
    }
    public function hapus($id)
    {
        $this->db->where('id_user', $id);
        $this->db->delete('tb_user');
    }

    public function ambil($id)
    {
        return $this->db->get_where('tb_user', ['id_user' => $id])->row_array();
    }
    public function proses_edit()
    {
        $data = [
            "nama" => $this->input->post('nama'),
            "email" => $this->input->post('email'),
            "alamat" => $this->input->post('alamat'),
            "tgl_lahir" => $this->input->post('tgl_lahir'),
            "username" => $this->input->post('username'),
            "password" => md5($this->input->post('password')),
        ];
        $this->db->where('id_user', $this->input->post('id_user'));
        $this->db->update('tb_user', $data);
    }
}
