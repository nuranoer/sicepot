<?php

namespace App\Controllers;
use App\Controllers\BaseController;

class DataPerdimAnak extends BaseController
{
    public function dataperdimdewasa()
    {
        $data['title'] = "Data Perdim Anak";
        $perdimanakModel = new \App\Models\PerdimAnakModel();
        $perdimanak = $perdimanakModel->findAll();
        $data = array('perdimanak' => $perdimanak);
        return view('admin/perdimanak', $data);
    }
}