<?php

namespace App\Controllers;
use App\Models\PerdimDewasaModel;
use App\Controllers\BaseController;

class PemohonDewasa extends BaseController
{
    protected $PerdimDewasaModel;
    public function __construct()
    {
        $this->PerdimDewasaModel = new PerdimDewasaModel();
    }
    public function perdimdewasa()
    {
        $data = [
            'validation' => \Config\Services::validation()
        ];
        return view('pemohon/perdimdewasa', $data);
    }
    
    public function createperdimdewasa()
    {
        $data = [
                'jenis_permohonan' => $this->request->getVar('jenis_permohonan'),
                'nama_lengkap' => $this->request->getVar('nama_lengkap'),
                'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
                'tempat_lahir' => $this->request->getVar('tempat_lahir'),
                'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
                'nik' => $this->request->getVar('nik'),
                'tgl_output' => $this->request->getVar('tgl_output'),
                'tempat_output' => $this->request->getVar('tempat_output'),
                'alamat' => $this->request->getVar('alamat'),
                'no_hp' => $this->request->getVar('no_hp'),
                'email' => $this->request->getVar('email'),
                'nama_ibu' => $this->request->getVar('nama_ibu'),
                'kewarganegaraan_ibu' => $this->request->getVar('kewarganegaraan_ibu'),
                'tempat_lhr_ibu' => $this->request->getVar('tempat_lhr_ibu'),
                'tgl_lhr_ibu' => $this->request->getVar('tgl_lhr_ibu'),
                'nama_ayah' => $this->request->getVar('nama_ayah'),
                'kewarganegaraan_ayah' => $this->request->getVar('kewarganegaraan_ayah'),
                'tempat_lhr_ayah' => $this->request->getVar('tempat_lhr_ayah'),
                'tgl_lhr_ayah' => $this->request->getVar('tgl_lhr_ayah'),
                'alamat_ortu' => $this->request->getVar('alamat_ortu'),
                'nama_pasangan' => $this->request->getVar('nama_pasangan'),
                'kewarganegaraan_pasangan' => $this->request->getVar('kewarganegaraan_pasangan'),
                'tempat_lhr_pasangan' => $this->request->getVar('tempat_lhr_pasangan'),
                'tgl_lhr_pasangan' => $this->request->getVar('tgl_lhr_pasangan'),
                'nama_pasangan' => $this->request->getVar('nama_pasangan'),
                'endorse' => $this->request->getVar('endorse'),
                'nama_kakek' => $this->request->getVar('nama_kakek'),
                'pekerjaan' => $this->request->getVar('pekerjaan'),
                'status_sipil' => $this->request->getVar('status_sipil'),
                'tujuan' => $this->request->getVar('tujuan'),
                'alasan_penggantian' => $this->request->getVar('alasan_penggantian'),
                'no_seri' => $this->request->getVar('no_seri'),
                'no_reg' => $this->request->getVar('no_reg')
        ];
        //validate input
        if (!$this->validate([
            'jenis_permohonan' => 'required',
            'nama_lengkap' => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required',
            'tempat_lahir' => 'required',
            'nik' => 'required|max_length[16]',
            'tgl_output' => 'required',
            'tempat_output' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'email' => 'valid_email',
            'nama_ibu' => 'required',
            'kewarganegaraan_ibu' => 'required',
            'nama_ayah' => 'required',
            'kewarganegaraan_ayah' => 'required',
            'tujuan' => 'required',
            'status_sipil' => 'required',
            'pekerjaan' => 'required',
        ])) {
            session()->setFlashdata('error','Mohon cek kembali data Anda!');
            return redirect()->to('/perdimdewasa')->withInput();
        } 

        else{

            $this->PerdimDewasaModel->insert($data);
            $id = $this->PerdimDewasaModel->insertID();
            return redirect()->to('/cetak-perdim-dewasa/' . $id);
        }
    }
}
