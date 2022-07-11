<?php

namespace App\Controllers;
use App\Controllers\BaseController;

class DataPerdimDewasa extends BaseController
{
    public function dataperdimdewasa()
    {
        $data['title'] = "Data Perdim Dewasa";
        $perdimdewasaModel = new \App\Models\PerdimDewasaModel();
        $perdimdewasa = $perdimdewasaModel->findAll();
        $data = array('perdimdewasa' => $perdimdewasa);
        return view('admin/perdimdewasa', $data);
    }
}