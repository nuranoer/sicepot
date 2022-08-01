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
    'nama_ayah','nama_kakek','pekerjaan','status_sipil','tujuan', 'alasan_penggantian','no_seri','no_reg'];


    protected $useTimestamps = true;
    
    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function getPerdimDewasa()
    {
        return $this->findAll();
    }

    public function getCetakPerdimDewasa($id = false)
    {
        if($id == false){
            return $this->findAll();
        } else {
            return $this->where(['id_perdim' => $id])
                        ->first();
        }
    }
}