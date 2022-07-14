<?php

namespace App\Controllers;
use App\Models\PerdimAnakModel;
use App\Controllers\BaseController;

class PemohonAnak extends BaseController
{
    protected $PerdimAnakModel;
    public function __construct()
    {
        $this->PerdimAnakModel = new PerdimAnakModel();
    }
    public function perdimanak()
    {
        $data = [
            'validation' => \Config\Services::validation()
        ];
        return view('pemohon/perdimanak', $data);
    }
    public function createperdimanak()
    {
        //validate input
        if(!$this->validate([
            'jenis_permohonan' => 'required',
            'nama_anak' => 'required',
            'jenis_kelamin' => 'required',
            'nik' => 'required|is_unique[perdim_anak.nik]|max_length[16]', 
            'ttl_anak' => 'required',
            'nik' => 'required',
            'alamat_anak' => 'required',
            'no_hp' => 'required',
            'tujuan' => 'required',
            'negara' => 'required',
            'pekerjaan' => 'required',
        ])) {
            // $validation = \Config\Services::validation();
            session()->setFlashdata('error','Mohon cek kembali data Anda!');
            return redirect()->to('/perdimanak')->withInput();
        } 
        
        else {
            
            if ($this->request->getVar('address_ortu')=='Ya')
            {
                $this->PerdimAnakModel->save([
                    'jenis_permohonan' => $this->request->getVar('jenis_permohonan'),
                    'nama_anak' => $this->request->getVar('nama_anak'),
                    'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
                    'ttl_anak' => $this->request->getVar('ttl_anak'),
                    'alasan_penggantian' => $this->request->getVar('alasan_penggantian'),
                    'no_paspor_anak' => $this->request->getVar('no_paspor_anak'),
                    'no_reg_anak' => $this->request->getVar('no_reg_anak'),
                    'nik' => $this->request->getVar('nik'),
                    'alamat_anak' => $this->request->getVar('alamat_anak'),
                    'tgl_berlaku_kia' => $this->request->getVar('tgl_berlaku_kia'),
                    'rentang_tgl_kia' => $this->request->getVar('rentang_tgl_kia'),
                    'no_hp' => $this->request->getVar('no_hp'),
                    'nama_ibu' => $this->request->getVar('nama_ibu'),
                    'alamat_ibu' => $this->request->getVar('alamat_anak'),
                    'alamat_ayah' => $this->request->getVar('alamat_anak'),
                    'ttl_ibu' => $this->request->getVar('ttl_ibu'),
                    'no_ktp_ibu' => $this->request->getVar('no_ktp_ibu'),
                    'tgl_ktp_ibu' => $this->request->getVar('tgl_ktp_ibu'),
                    'rentang_ktp_ibu' => $this->request->getVar('rentang_ktp_ibu'),
                    'no_paspor_ibu' => $this->request->getVar('no_paspor_ibu'),
                    'tgl_paspor_ibu' => $this->request->getVar('tgl_paspor_ibu'),
                    'rentang_paspor_ibu' => $this->request->getVar('rentang_paspor_ibu'),
                    'nama_ayah' => $this->request->getVar('nama_ayah'),
                    'ttl_ayah' => $this->request->getVar('ttl_ayah'),
                    'no_ktp_ayah' => $this->request->getVar('no_ktp_ayah'),
                    'tgl_ktp_ayah' => $this->request->getVar('tgl_ktp_ayah'),
                    'rentang_ktp_ayah' => $this->request->getVar('rentang_ktp_ayah'),
                    'no_paspor_ayah' => $this->request->getVar('no_paspor_ayah'),
                    'tgl_paspor_ayah' => $this->request->getVar('tgl_paspor_ayah'),
                    'rentang_paspor_ayah' => $this->request->getVar('rentang_paspor_ayah'),
                    'nama_kakek' => $this->request->getVar('nama_kakek'),
                    'pekerjaan' => $this->request->getVar('pekerjaan'),
                    'status_sipil' => $this->request->getVar('status_sipil'),
                    'negara' => $this->request->getVar('negara'),
                    'tujuan' => $this->request->getVar('tujuan'),
                ]);
            } 
            
            elseif ($this->request->getVar('address_ortu')=='Tidak') 
            {
                $this->PerdimAnakModel->save([
                    'jenis_permohonan' => $this->request->getVar('jenis_permohonan'),
                    'nama_anak' => $this->request->getVar('nama_anak'),
                    'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
                    'ttl_anak' => $this->request->getVar('ttl_anak'),
                    'alasan_penggantian' => $this->request->getVar('alasan_penggantian'),
                    'no_paspor_anak' => $this->request->getVar('no_paspor_anak'),
                    'no_reg_anak' => $this->request->getVar('no_reg_anak'),
                    'nik' => $this->request->getVar('nik'),
                    'alamat_anak' => $this->request->getVar('alamat_anak'),
                    'tgl_berlaku_kia' => $this->request->getVar('tgl_berlaku_kia'),
                    'rentang_tgl_kia' => $this->request->getVar('rentang_tgl_kia'),
                    'no_hp' => $this->request->getVar('no_hp'),
                    'nama_ibu' => $this->request->getVar('nama_ibu'),
                    'alamat_ibu' => $this->request->getVar('alamat_ibu'),
                    'alamat_ayah' => $this->request->getVar('alamat_ayah'),
                    'ttl_ibu' => $this->request->getVar('ttl_ibu'),
                    'no_ktp_ibu' => $this->request->getVar('no_ktp_ibu'),
                    'tgl_ktp_ibu' => $this->request->getVar('tgl_ktp_ibu'),
                    'rentang_ktp_ibu' => $this->request->getVar('rentang_ktp_ibu'),
                    'no_paspor_ibu' => $this->request->getVar('no_paspor_ibu'),
                    'tgl_paspor_ibu' => $this->request->getVar('tgl_paspor_ibu'),
                    'rentang_paspor_ibu' => $this->request->getVar('rentang_paspor_ibu'),
                    'nama_ayah' => $this->request->getVar('nama_ayah'),
                    'ttl_ayah' => $this->request->getVar('ttl_ayah'),
                    'no_ktp_ayah' => $this->request->getVar('no_ktp_ayah'),
                    'tgl_ktp_ayah' => $this->request->getVar('tgl_ktp_ayah'),
                    'rentang_ktp_ayah' => $this->request->getVar('rentang_ktp_ayah'),
                    'no_paspor_ayah' => $this->request->getVar('no_paspor_ayah'),
                    'tgl_paspor_ayah' => $this->request->getVar('tgl_paspor_ayah'),
                    'rentang_paspor_ayah' => $this->request->getVar('rentang_paspor_ayah'),
                    'nama_kakek' => $this->request->getVar('nama_kakek'),
                    'pekerjaan' => $this->request->getVar('pekerjaan'),
                    'status_sipil' => $this->request->getVar('status_sipil'),
                    'negara' => $this->request->getVar('negara'),
                    'tujuan' => $this->request->getVar('tujuan'),
                ]);
            };
    
            session()->setFlashdata('success', 'Data berhasil ditambahkan!');
            return redirect()->to('/perdimanak');
        }
    }
}
