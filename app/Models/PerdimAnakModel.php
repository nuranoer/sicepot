<?php

namespace App\Models;

use CodeIgniter\Model;

class PerdimAnakModel extends Model
{
    protected $table      = 'perdim_anak';
    protected $primaryKey = 'id_perdim';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['jenis_permohonan', 'nama_lengkap','jenis_kelamin','tempat_lahir','tanggal_lahir','alasan_penggantian','no_seri','no_reg','nik','alamat','no_hp','email','nama_ibu','alamat_ibu','kewarganegaraan_ibu','tempat_lhr_ibu','tgl_lhr_ibu','no_ktp_ibu', 'tgl_ktp_ibu','no_paspor_ibu','tgl_paspor_ibu','rentang_paspor_ibu','nama_ayah','kewarganegaraan_ayah','tempat_lhr_ayah','tgl_lhr_ayah','alamat_ayah','no_ktp_ayah','tgl_ktp_ayah','no_paspor_ayah','tgl_paspor_ayah','rentang_paspor_ayah','alamat_ortu','endorse','nama_kakek','tujuan','negara'];


    protected $useTimestamps = true;
    
    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    //SHOW DATA PERDIM ANAK
    public function getPerdimAnak()
    {
        return $this->findAll();
    }

    //GET ID DATA FROM DATABASE
    public function getCetakPerdimAnak($id = false)
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