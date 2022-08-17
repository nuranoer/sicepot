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
                'tempat_output' => $this->request->getVar('tempat_output'),
                'alamat' => $this->request->getVar('alamat'),
                'no_hp' => $this->request->getVar('no_hp'),
                'nama_ibu' => $this->request->getVar('nama_ibu'),
                'nama_ayah' => $this->request->getVar('nama_ayah'),
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
            'nik' => 'required|is_unique[perdim_dewasa.nik]|max_length[16]',
            'tempat_output' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
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

            // session()->setFlashdata('success', 'ID Print anda '.$id);
            // $perdimdewasa = $this->PerdimDewasaModel->findAll();
            // $data = ['perdimdewasa' => $perdimdewasa];
            // return view('/perdimdewasa',$data);

        }
    }
}
