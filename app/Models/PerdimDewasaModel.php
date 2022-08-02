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
    public function getUmrohPerdim($id = false)
    {
        if($id == false){
            return $this->findAll();
        } else {
            return $this->where(['id_perdim' => $id])
                        ->where(['tujuan' => 'Umroh'])
                        ->first();
        }
    }
    public function getHajiPerdim($id = false)
    {
        if($id == false){
            return $this->findAll();
        } else {
            return $this->where(['id_perdim' => $id])
                        ->where(['tujuan' => 'Haji'])
                        ->first();
        }
    }

    // public function getBaruBekerjaPerdim($id = false)
    // {
    //     if($id == false){
    //         return $this->findAll();
    //     } else {
    //         return $this->where(['id_perdim' => $id])
    //                     ->where(['jenis_permohonan' => 'Baru'])
    //                     ->where(['tujuan' => 'Bekerja'])
    //                     ->first();
    //     }
    // }
    
    // public function getBaruBelajarPerdim($id = false)
    // {
    //     if($id == false){
    //         return $this->findAll();
    //     } else {
    //         return $this->where(['id_perdim' => $id])
    //                     ->where(['jenis_permohonan' => 'Baru'])
    //                     ->where(['tujuan' => 'Belajar'])
    //                     ->first();
    //     }
    // }
    
    // public function getBaruBerobatPerdim($id = false)
    // {
    //     if($id == false){
    //         return $this->findAll();
    //     } else {
    //         return $this->where(['id_perdim' => $id])
    //                     ->where(['jenis_permohonan' => 'Baru'])
    //                     ->where(['tujuan' => 'Berobat'])
    //                     ->first();
    //     }
    // }

    // public function getBaruHajiEndorsePerdim($id = false)
    // {
    //     if($id == false){
    //         return $this->findAll();
    //     } else {
    //         return $this->where(['id_perdim' => $id])
    //                     ->where(['jenis_permohonan' => 'Baru'])
    //                     ->where(['tujuan' => 'Haji'])
    //                     ->first();
    //     }
    // }
    
    // public function getBaruHajiPerdim($id = false)
    // {
    //     if($id == false){
    //         return $this->findAll();
    //     } else {
    //         return $this->where(['id_perdim' => $id])
    //                     ->where(['jenis_permohonan' => 'Baru'])
    //                     ->where(['tujuan' => 'Haji'])
    //                     ->where(['nama_kakek' => null])
    //                     ->first();
    //     }
    // }

    // public function getBaruKunjunganPerdim($id = false)
    // {
    //     if($id == false){
    //         return $this->findAll();
    //     } else {
    //         return $this->where(['id_perdim' => $id])
    //                     ->where(['jenis_permohonan' => 'Baru'])
    //                     ->where(['tujuan' => 'Kunjungan'])
    //                     ->first();
    //     }
    // }
    
    // public function getBaruUmrohPerdim($id = false)
    // {
    //     if($id == false){
    //         return $this->findAll();
    //     } else {
    //         return $this->where(['id_perdim' => $id])
    //                     ->where(['jenis_permohonan' => 'Baru'])
    //                     ->where(['tujuan' => 'Umroh'])
    //                     ->first();
    //     }
    // }

    // public function getBaruUmrohKakekPerdim($id = false)
    // {
    //     if($id == false){
    //         return $this->findAll();
    //     } else {
    //         return $this->where(['id_perdim' => $id])
    //                     ->where(['jenis_permohonan' => 'Baru'])
    //                     ->where(['tujuan' => 'Umroh'])
    //                     ->where(['nama_kakek' => ''])
    //                     ->first();
    //     }
    // }

    // public function getBaruWisataPerdim($id = false)
    // {
    //     if($id == false){
    //         return $this->findAll();
    //     } else {
    //         return $this->where(['id_perdim' => $id])
    //                     ->where(['jenis_permohonan' => 'Baru'])
    //                     ->where(['tujuan' => 'Wisata'])
    //                     ->first();
    //     }
    // }


    // //MODEL FUNCTION PERDIM PENGGANTIAN
    // public function getPenggantianBekerjaPerdim($id = false)
    // {
    //     if($id == false){
    //         return $this->findAll();
    //     } else {
    //         return $this->where(['id_perdim' => $id])
    //                     ->where(['jenis_permohonan' => 'Penggantian'])
    //                     ->where(['tujuan' => 'Bekerja'])
    //                     ->first();
    //     }
    // }
    
    // public function getPenggantianBelajarPerdim($id = false)
    // {
    //     if($id == false){
    //         return $this->findAll();
    //     } else {
    //         return $this->where(['id_perdim' => $id])
    //                     ->where(['jenis_permohonan' => 'Penggantian'])
    //                     ->where(['tujuan' => 'Belajar'])
    //                     ->first();
    //     }
    // }
    
    // public function getPenggantianBerobatPerdim($id = false)
    // {
    //     if($id == false){
    //         return $this->findAll();
    //     } else {
    //         return $this->where(['id_perdim' => $id])
    //                     ->where(['jenis_permohonan' => 'Penggantian'])
    //                     ->where(['tujuan' => 'Berobat'])
    //                     ->first();
    //     }
    // }

    // public function getPenggantianHajiPerdim($id = false)
    // {
    //     if($id == false){
    //         return $this->findAll();
    //     } else {
    //         return $this->where(['id_perdim' => $id])
    //                     ->where(['jenis_permohonan' => 'Penggantian'])
    //                     ->where(['tujuan' => 'Haji'])
    //                     ->first();
    //     }
    // }

    // public function getPenggantianKunjunganPerdim($id = false)
    // {
    //     if($id == false){
    //         return $this->findAll();
    //     } else {
    //         return $this->where(['id_perdim' => $id])
    //                     ->where(['jenis_permohonan' => 'Penggantian'])
    //                     ->where(['tujuan' => 'Kunjungan'])
    //                     ->first();
    //     }
    // }
    
    // public function getPenggantianUmrohPerdim($id = false)
    // {
    //     if($id == false){
    //         return $this->findAll();
    //     } else {
    //         return $this->where(['id_perdim' => $id])
    //                     ->where(['jenis_permohonan' => 'Penggantian'])
    //                     ->where(['tujuan' => 'Umroh'])
    //                     ->first();
    //     }
    // }

    // public function getPenggantianWisataPerdim($id = false)
    // {
    //     if($id == false){
    //         return $this->findAll();
    //     } else {
    //         return $this->where(['id_perdim' => $id])
    //                     ->where(['jenis_permohonan' => 'Penggantian'])
    //                     ->where(['tujuan' => 'Wisata'])
    //                     ->first();
    //     }
    // }
}