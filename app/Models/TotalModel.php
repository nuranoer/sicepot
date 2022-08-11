<?php

namespace App\Models;

use CodeIgniter\Model;

class TotalModel extends Model
{
    public function total_anak_baru()
    {
        return $this->db->table('perdim_anak')->where(['jenis_permohonan' => 'Baru'])->countAllResults();
    }
    
    public function total_anak_penggantian()
    {
        return $this->db->table('perdim_anak')->where(['jenis_permohonan' => 'Penggantian'])->countAllResults();
    }

    public function total_dewasa_baru()
    {
        return $this->db->table('perdim_dewasa')->where(['jenis_permohonan' => 'Baru'])->countAllResults();
    }
    
    public function total_dewasa_penggantian()
    {
        return $this->db->table('perdim_dewasa')->where(['jenis_permohonan' => 'Penggantian'])->countAllResults();
    }

    public function total_dewasa()
    {
        return $this->db->table('perdim_anak')->where(['jenis_permohonan' => 'Baru'])->countAllResults();
        // return $this->db->table('perdim_dewasa')->countAll();
    }
}