<?php

namespace App\Controllers;
use App\Models\PerdimDewasaModel;
use App\Models\PerdimAnakModel;
use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function __construct(){
        $this->PerdimDewasaModel = new PerdimDewasaModel();
        $this->PerdimAnakModel = new PerdimAnakModel();
    }

    public function index(){
        $data['title'] = 'Dashboard';
        $data['perdim_dewasa'] = $this->PerdimDewasaModel->count('perdim_dewasa');
        $data['perdim_anak'] = $this->PerdimAnakModel->count('perdim_anak');
        return view('admin/dashboard/index', $data);
    }

}