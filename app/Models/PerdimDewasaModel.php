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
    'tempat_lahir','tanggal_lahir','nik','tgl_output','tempat_output','alamat','no_hp','email','nama_ibu',
    'kewarganegaraan_ibu','tempat_lhr_ibu','tgl_lhr_ibu','nama_ayah','kewarganegaraan_ayah','tempat_lhr_ayah','tgl_lhr_ayah','alamat_ortu','nama_pasangan','kewarganegaraan_pasangan','tempat_lhr_pasangan','tgl_lhr_pasangan','endorse','nama_kakek','pekerjaan','status_sipil','tujuan','alasan_penggantian',
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
                        ->where(['alasan_penggantian' => ''])
                        ->first();
        }
    }

    public function getHbsBerlakuPerdim($id = false)
    {
        if($id == false){
            return $this->findAll();
        } else {
            return $this->where(['id_perdim' => $id])
                        ->where(['alasan_penggantian' => 'Habis Masa Berlaku'])
                        ->first();
        }
    }
    
    public function getHlmnPenuhPerdim($id = false)
    {
        if($id == false){
            return $this->findAll();
        } else {
            return $this->where(['id_perdim' => $id])
                        ->where(['alasan_penggantian' => 'Halaman Penuh'])
                        ->first();
        }
    }

    public function getRusakPerdim($id = false)
    {
        if($id == false){
            return $this->findAll();
        } else {
            return $this->where(['id_perdim' => $id])
                        ->where(['alasan_penggantian' => 'Rusak'])
                        ->first();
        }
    }

    public function getHilangPerdim($id = false)
    {
        if($id == false){
            return $this->findAll();
        } else {
            return $this->where(['id_perdim' => $id])
                        ->where(['alasan_penggantian' => 'Hilang'])
                        ->first();
        }
    }

    public function getUbhDataPerdim($id = false)
    {
        if($id == false){
            return $this->findAll();
        } else {
            return $this->where(['id_perdim' => $id])
                        ->where(['alasan_penggantian' => 'Ubah Data'])
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
}