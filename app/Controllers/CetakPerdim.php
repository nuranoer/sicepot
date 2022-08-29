<?php

namespace App\Controllers;

use App\Models\PerdimDewasaModel;
use App\Controllers\BaseController;
use MPDF;


class CetakPerdim extends BaseController
{

    protected $PerdimDewasaModel;
    public function __construct()
    {
        $this->PerdimDewasaModel = new PerdimDewasaModel();
    }

    public function cetak($id)
    {
        $cetak = $this->PerdimDewasaModel->getCetakPerdimDewasa($id);

        $permohonanBaru = $this->PerdimDewasaModel->getBaruPerdim($id);
        $permohonanHbsBerlaku = $this->PerdimDewasaModel->getHbsBerlakuPerdim($id);
        $permohonanHlmnPenuh = $this->PerdimDewasaModel->getHlmnPenuhPerdim($id);
        $permohonanRusak = $this->PerdimDewasaModel->getRusakPerdim($id);
        $permohonanHilang = $this->PerdimDewasaModel->getHilangPerdim($id);
        $permohonanUbhData = $this->PerdimDewasaModel->getUbhDataPerdim($id);
        $endorse = $this->PerdimDewasaModel->getEndorse($id);

        if ($permohonanBaru || $permohonanRusak || $permohonanHilang || $permohonanUbhData) {
            if ($endorse) {
                echo view('admin/cetak/perdim', $cetak);
                echo view('admin/cetak/perdim2', $cetak);
                echo view('admin/cetak/suratpernyataanumum', $cetak);
                echo view('admin/cetak/suratpernyataanendorse', $cetak);
            } else {
                echo view('admin/cetak/perdim', $cetak);
                echo view('admin/cetak/perdim2', $cetak);
                echo view('admin/cetak/suratpernyataanumum', $cetak);
            }
        } elseif ($permohonanHbsBerlaku || $permohonanHlmnPenuh) {
            if ($endorse) {
                echo view('admin/cetak/perdim', $cetak);
                echo view('admin/cetak/perdim2', $cetak);
                echo view('admin/cetak/suratpernyataanumum', $cetak);
                echo view('admin/cetak/suratpernyataanganti', $cetak);
                echo view('admin/cetak/suratpernyataanendorse', $cetak);
            } else {
                echo view('admin/cetak/perdim', $cetak);
                echo view('admin/cetak/perdim2', $cetak);
                echo view('admin/cetak/suratpernyataanumum', $cetak);
                echo view('admin/cetak/suratpernyataanganti', $cetak);
            }
        }
    }
}
