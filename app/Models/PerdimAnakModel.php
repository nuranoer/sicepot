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

    protected $allowedFields = ['jenis_permohonan', 'nama_lengkap','jenis_kelamin',
    'tempat_lahir','tanggal_lahir','alasan_penggantian','no_seri','no_reg','nik','alamat',
    'tempat_output','rentang_tgl_kia','no_hp','nama_ibu','alamat_ibu','ttl_ibu','no_ktp_ibu',
    'tgl_ktp_ibu','rentang_ktp_ibu','no_paspor_ibu','tgl_paspor_ibu','rentang_paspor_ibu','nama_ayah',
    'ttl_ayah','alamat_ayah','no_ktp_ayah','tgl_ktp_ayah','rentang_ktp_ayah','no_paspor_ayah',
    'tgl_paspor_ayah','rentang_paspor_ayah','endorse','nama_kakek','pekerjaan','tujuan','negara'];


    protected $useTimestamps = true;
    
    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    //SHOW DATA PERDIM DEWASA
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