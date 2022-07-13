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

    protected $allowedFields = ['jenis_permohonan', 'nama_anak','jenis_kelamin',
    'ttl_anak','no_paspor_anak','no_reg_anak','nik','alamat_anak','tgl_berlaku_kia',
    'rentang_tgl_kia','no_hp','nama_ibu','alamat_ibu','ttl_ibu','no_ktp_ibu','tgl_ktp_ibu',
    'rentang_ktp_ibu','no_paspor_ibu','tgl_paspor_ibu','rentang_paspor_ibu','nama_ayah',
    'ttl_ayah','alamat_ayah','no_ktp_ayah','tgl_ktp_ayah','rentang_ktp_ayah','no_paspor_ayah',
    'tgl_paspor_ayah','rentang_paspor_ayah','nama_kakek','pekerjaan','status_sipil','tujuan','negara'];


    protected $useTimestamps = true;
    
    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}