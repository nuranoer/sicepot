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
        $permohonanPenggantian = $this->PerdimDewasaModel->getPenggantianPerdim($id);
        $endorse = $this->PerdimDewasaModel->getEndorse($id);
        // $permohonanUmroh = $this->PerdimDewasaModel->getUmrohPerdim($id);
        // $permohonanHaji = $this->PerdimDewasaModel->getHajiPerdim($id);

        if ($permohonanBaru) {
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
        } elseif ($permohonanPenggantian) {
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
