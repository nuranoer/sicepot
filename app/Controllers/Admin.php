<?php

namespace App\Controllers;
use App\Controllers\BaseController;

class Admin extends BaseController
{
    public function dashboard()
    {
        $data = [
            'title' => 'Dashboard',
        ];
        return view('admin/dashboard', $data);
    }
    public function dataperdimanak()
    {
        $data['title'] = "Data Perdim Dewasa";
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
