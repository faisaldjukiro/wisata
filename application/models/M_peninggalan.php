<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_peninggalan extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function tampil()
    {
        $this->db->select('*');
        $this->db->from('tb_peninggalan');
        $this->db->join('tb_daerah', 'tb_daerah.id_daerah = tb_peninggalan.id_daerah');
        $this->db->order_by("id_peninggalan", "desc");
        $data = $this->db->get();
        return $data->result_array();
    }
    public function tampil_select()
    {
        $this->db->from('tb_daerah');
        $this->db->order_by("nama_daerah", "ASC");
        $data = $this->db->get();
        return $data;
    }
    public function hapus($id)
    {
        $this->db->where('id_peninggalan', $id);
        $this->db->delete('tb_peninggalan');
    }
    public function ambil($id)
    {
        // $this->db->select('nama_daerah');
        // $this->db->from('tb_peninggalan');
        $this->db->join('tb_daerah', 'tb_daerah.id_daerah = tb_peninggalan.id_daerah');
        return $this->db->get_where('tb_peninggalan', ['id_peninggalan' => $id])->row_array();
    }
    public function ambil_id($id)
    {
        return $this->db->get_where('tb_peninggalan', ['id_peninggalan' => $id])->row_array();
    }
}
