<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_pakaian extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function tampil()
    {
        $this->db->select('*');
        $this->db->from('tb_adat');
        $this->db->join('tb_daerah', 'tb_daerah.id_daerah = tb_adat.id_daerah');
        $this->db->order_by("id_pakaian", "desc");
        $data = $this->db->get();
        return $data->result_array();
    }
    public function hapus($id)
    {
        $this->db->where('id_pakaian', $id);
        $this->db->delete('tb_adat');
    }
    public function ambil($id)
    {
        // $this->db->select('nama_daerah');
        // $this->db->from('tb_peninggalan');
        $this->db->join('tb_daerah', 'tb_daerah.id_daerah = tb_adat.id_daerah');
        return $this->db->get_where('tb_adat', ['id_pakaian' => $id])->row_array();
    }
    public function ambil_id($id)
    {
        return $this->db->get_where('tb_adat', ['id_pakaian' => $id])->row_array();
    }
    public function tampil_select()
    {
        $this->db->from('tb_daerah');
        $this->db->order_by("nama_daerah", "ASC");
        $data = $this->db->get();
        return $data;
    }
}
