<?php

namespace App\Controllers;
use App\Models\TotalModel;
use App\Controllers\BaseController;

class Admin extends BaseController
{
    public function __construct()
    {
        $this->TotalModel = new TotalModel();
    }

    public function dashboard()
    {
        $data = [
            'title' => 'Dashboard',
            'total_anak_baru' => $this->TotalModel->total_anak_baru(),
            'total_anak_penggantian' => $this->TotalModel->total_anak_penggantian(),
            'total_dewasa_baru' => $this->TotalModel->total_dewasa_baru(),
            'total_dewasa_penggantian' => $this->TotalModel->total_dewasa_penggantian(),
        ];
        return view('admin/dashboard', $data);
    }
    
    public function dataperdimanak()
    {
        $data['title'] = "Data Perdim Anak";
        $perdimanakModel = new \App\Models\PerdimAnakModel();
        $perdimanak = $perdimanakModel->findAll();
        $data = array('perdimanak' => $perdimanak);
        return view('admin/perdimanak', $data);
    }

    public function dataperdimdewasa()
    {
        $data['title'] = "Data Perdim Dewasa";
        $perdimdewasaModel = new \App\Models\PerdimDewasaModel();
        $perdimdewasa = $perdimdewasaModel->findAll();
        $data = array('perdimdewasa' => $perdimdewasa);
        return view('admin/perdimdewasa', $data);
    }
}
