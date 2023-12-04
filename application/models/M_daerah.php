<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_daerah extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function tampil_data()
    {
        $this->db->from('tb_daerah');
        $this->db->order_by("id_daerah", "desc");
        $data = $this->db->get();
        return $data->result_array();
    }
    public function proses()
    {
        $data = [
            "nama_daerah" => $this->input->post('nama_daerah'),
        ];
        $this->db->insert('tb_daerah', $data);
    }
    public function hapus($id)
    {
        $this->db->where('id_daerah', $id);
        $this->db->delete('tb_daerah');
    }
    public function ambil($id)
    {
        return $this->db->get_where('tb_daerah', ['id_daerah' => $id])->row_array();
    }
    public function proses_edit()
    {
        $data = [
            "nama_daerah" => $this->input->post('nama_daerah'),
        ];
        $this->db->where('id_daerah', $this->input->post('id_daerah'));
        $this->db->update('tb_daerah', $data);
    }
}
