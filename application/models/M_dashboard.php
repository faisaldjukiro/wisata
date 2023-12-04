<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_dashboard extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function hitungpeninggalan()
    {
        return $this->db->get('tb_peninggalan')->num_rows();
    }
    public function hitungdaerah()
    {
        return $this->db->get('tb_daerah')->num_rows();
    }
    public function hitungpakaian()
    {
        return $this->db->get('tb_adat')->num_rows();
    }
    public function hitunguser()
    {
        return $this->db->get('tb_user')->num_rows();
    }
}
