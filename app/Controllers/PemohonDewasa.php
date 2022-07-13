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
        return view('pemohon/perdimdewasa');
    }
    public function perdimanak()
    {
        return view('pemohon/perdimanak');
    }
    public function createperdimdewasa()
    {
        // dd($this->request->getVar());
        $this->PerdimDewasaModel->save([
            'jenis_permohonan' => $this->request->getVar('jenis_permohonan'),
            'nama_lengkap' => $this->request->getVar('nama_lengkap'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'tempat_lahir' => $this->request->getVar('tempat_lahir'),
            'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
            'nik' => $this->request->getVar('nik'),
            'tempat_output' => $this->request->getVar('tempat_output'),
            'alamat' => $this->request->getVar('alamat'),
            'no_hp' => $this->request->getVar('no_hp'),
            'nama_ibu' => $this->request->getVar('nama_ibu'),
            'nama_ayah' => $this->request->getVar('nama_ayah'),
            'nama_kakek' => $this->request->getVar('nama_kakek'),
            'pekerjaan' => $this->request->getVar('pekerjaan'),
            'status_sipil' => $this->request->getVar('status_sipil'),
            'tujuan' => $this->request->getVar('tujuan'),
            'no_seri' => $this->request->getVar('no_seri'),
            'no_reg' => $this->request->getVar('no_reg')
        ]);

        session()->setFlashdata('success', 'Data berhasil ditambahkan!');
        return redirect()->to('/perdimdewasa');
    }
}
