<?php

namespace App\Controllers;
use App\Models\PerdimDewasaModel;
use App\Models\PerdimAnakModel;
use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function __construct(){
        $this->PerdimDewasaModel = new PerdimDewasaModel();
        $this->PerdimAnakModel = new PerdimAnakModel();
    }

    public function total_data_baru_dewasa(){
        $this->db->select('id_perdim');
        $this->db->from('perdim_dewasa');
        $this->db->where('jenis_permohonan', 'Baru');
        $num_results = $this->db->count_all_results();
    }

    public function total_data_pergantian_dewasa(){
        $this->db->select('id_perdim');
        $this->db->from('perdim_dewasa');
        $this->db->where('jenis_permohonan', 'Penggantian');
        $num_results = $this->db->count_all_results();
    }

    public function total_data_baru_anak(){
        $this->db->select('id_perdim');
        $this->db->from('perdim_anak');
        $this->db->where('jenis_permohonan', 'Baru');
        $num_results = $this->db->count_all_results();
    }

    public function total_data_pergantian_anak(){
        $this->db->select('id_perdim');
        $this->db->from('perdim_anak');
        $this->db->where('jenis_permohonan', 'Penggantian');
        $num_results = $this->db->count_all_results();
    }
}