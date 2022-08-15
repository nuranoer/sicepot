<?php

namespace App\Models;

use CodeIgniter\Model;

class PerdimDewasaModel extends Model
{
    protected $table      = 'perdim_dewasa';
    protected $primaryKey = 'id_perdim';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['jenis_permohonan', 'nama_lengkap','jenis_kelamin',
    'tempat_lahir','tanggal_lahir','nik','tempat_output','alamat','no_hp','nama_ibu',
    'nama_ayah','nama_kakek','pekerjaan','status_sipil','tujuan', 'alasan_penggantian',
    'no_seri','no_reg'];

    protected $useTimestamps = true;
    
    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    //SHOW DATA PERDIM DEWASA
    public function getPerdimDewasa()
    {
        return $this->findAll();
    }

    //GET ID DATA FROM DATABASE
    public function getCetakPerdimDewasa($id = false)
    {
        if($id == false){
            return $this->findAll();
        } else {
            return $this->where(['id_perdim' => $id])
                        ->first();
        }
    }

    //MODEL FUNCTION PERDIM BARU
    public function getBaruPerdim($id = false)
    {
        if($id == false){
            return $this->findAll();
        } else {
            return $this->where(['id_perdim' => $id])
                        ->where(['jenis_permohonan' => 'Baru'])
                        ->first();
        }
    }

    public function getPenggantianPerdim($id = false)
    {
        if($id == false){
            return $this->findAll();
        } else {
            return $this->where(['id_perdim' => $id])
                        ->where(['jenis_permohonan' => 'Penggantian'])
                        ->first();
        }
    }

    public function getEndorse($id = false)
    {
        if($id == false){
            return $this->findAll();
        } else {
            return $this->where(['id_perdim' => $id])
                        ->where(['endorse' => 'Ya'])
                        ->first();
        }
    }
    
    public function getLatestId()
    {
        return $this->orderBy('id_perdim','desc')->limit(1);
        // return $this->selectMax('id_perdim')->first();
        // $id = $this->selectMax('id_perdim')->first();
        // return $this->where(['id_perdim' => $id])->findAll();
        // return $this->where(['id_perdim' => $this->selectMax('id_perdim')]);
        // $this->db->insert_id();
                    // ->orderBy('id_perdim')->limit(1);
    }

    public function getLatestBaru()
    {
        return $this->where(['jenis_permohonan' => 'Baru'])
                    ->where(['id_perdim' => $this->getLatestId()]);
    }

    public function getLatestPenggantian()
    {
        return $this->where(['id_perdim' => $this->getLatestId()])
                    ->where(['jenis_permohonan' => 'Penggantian']);
        // if($id == false){
        //     return $this->findAll();
        // } else {
        // }
    }

    public function getLatestEndorse()
    {
        return $this->where(['id_perdim' => $this->getLatestId()])
                    ->where(['endorse' => 'Ya']);
        // if($id == false){
        //     return $this->findAll();
        // } else {
        // }
    }
    
    // public function getUmrohPerdim($id = false)
    // {
    //     if($id == false){
    //         return $this->findAll();
    //     } else {
    //         return $this->where(['id_perdim' => $id])
    //                     ->where(['tujuan' => 'Umroh'])
    //                     ->first();
    //     }
    // }

    // public function getHajiPerdim($id = false)
    // {
    //     if($id == false){
    //         return $this->findAll();
    //     } else {
    //         return $this->where(['id_perdim' => $id])
    //                     ->where(['tujuan' => 'Haji'])
    //                     ->first();
    //     }
    // }
    
}