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
        $data = [
            'jenis_permohonan' => $this->request->getVar('jenis_permohonan'),
                    'nama_lengkap' => $this->request->getVar('nama_lengkap'),
                    'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
                    'tempat_lahir' => $this->request->getVar('tempat_lahir'),
                    'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
                    'alasan_penggantian' => $this->request->getVar('alasan_penggantian'),
                    'no_seri' => $this->request->getVar('no_seri'),
                    'no_reg' => $this->request->getVar('no_reg'),
                    'nik' => $this->request->getVar('nik'),
                    'alamat' => $this->request->getVar('alamat'),
                    'tempat_output' => $this->request->getVar('tempat_output'),
                    'rentang_tgl_kia' => $this->request->getVar('rentang_tgl_kia'),
                    'no_hp' => $this->request->getVar('no_hp'),
                    'nama_ibu' => $this->request->getVar('nama_ibu'),
                    'alamat_ibu' => $this->request->getVar('alamat'),
                    'alamat_ayah' => $this->request->getVar('alamat'),
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
                    'endorse' => $this->request->getVar('endorse'),
                    'nama_kakek' => $this->request->getVar('nama_kakek'),
                    'pekerjaan' => $this->request->getVar('pekerjaan'),
                    'negara' => $this->request->getVar('negara'),
                    'tujuan' => $this->request->getVar('tujuan'),
        ];

        $data2 = [
            'jenis_permohonan' => $this->request->getVar('jenis_permohonan'),
                    'nama_lengkap' => $this->request->getVar('nama_lengkap'),
                    'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
                    'tempat_lahir' => $this->request->getVar('tempat_lahir'),
                    'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
                    'alasan_penggantian' => $this->request->getVar('alasan_penggantian'),
                    'no_seri' => $this->request->getVar('no_seri'),
                    'no_reg' => $this->request->getVar('no_reg'),
                    'nik' => $this->request->getVar('nik'),
                    'alamat' => $this->request->getVar('alamat'),
                    'tempat_output' => $this->request->getVar('tempat_output'),
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
                    'endorse' => $this->request->getVar('endorse'),
                    'nama_kakek' => $this->request->getVar('nama_kakek'),
                    'pekerjaan' => $this->request->getVar('pekerjaan'),
                    'negara' => $this->request->getVar('negara'),
                    'tujuan' => $this->request->getVar('tujuan'),
        ];

        //validate input
        if(!$this->validate([
            'jenis_permohonan' => 'required',
            'nama_lengkap' => 'required',
            'jenis_kelamin' => 'required',
            'nik' => 'required|max_length[16]', 
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required|max_length[16]',
            'nama_ibu' => 'required',
            'ttl_ibu' => 'required',
            'no_ktp_ibu' => 'required',
            'tgl_ktp_ibu' => 'required',
            'nama_ayah' => 'required',
            'ttl_ayah' => 'required',
            'no_ktp_ayah' => 'required',
            'tgl_ktp_ayah' => 'required',
            'tujuan' => 'required',
            'endorse' => 'required',
            'negara' => 'required',
            'pekerjaan' => 'required',
        ])) {
            session()->setFlashdata('error','Mohon cek kembali data Anda!');
            return redirect()->to('/perdimanak')->withInput();
        } 
        
        else {
            
            if ($this->request->getVar('address_ortu')=='Ya')
            {
                $this->PerdimAnakModel->insert($data);
            } 
            
            elseif ($this->request->getVar('address_ortu')=='Tidak') 
            {
                $this->PerdimAnakModel->insert($data2);
            };
    
            $id = $this->PerdimAnakModel->insertID();
            return redirect()->to('/cetak-perdim-anak/' . $id);
        }
    }
}
