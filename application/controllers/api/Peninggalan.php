<?php
defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Peninggalan extends RestController
{

    public function index_get()
    {
        $this->db->select("*");
        $this->db->from('tb_peninggalan');
        $this->db->join('tb_daerah', 'tb_daerah.id_daerah= tb_peninggalan.id_daerah');
        $this->db->order_by('id_peninggalan', 'desc');
        $data = $this->db->get()->result();

        $this->response($data, RestController::HTTP_OK);
        header('Content-Type: application/json');
    }
}
