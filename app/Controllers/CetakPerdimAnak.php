<?php
namespace App\Controllers;
use App\Models\PerdimAnakModel;
use App\Controllers\BaseController;
use MPDF;


class CetakPerdimAnak extends BaseController {

    protected $PerdimAnakModel;
    public function __construct()
    {
        $this->PerdimAnakModel = new PerdimAnakModel();
    }

    public function cetak($id)
    {
        $cetak = $this->PerdimAnakModel->getCetakPerdimAnak($id);

        $permohonanBaru = $this->PerdimAnakModel->getBaruPerdim($id);
        $permohonanHbsBerlaku = $this->PerdimAnakModel->getHbsBerlakuPerdim($id);
        $permohonanHlmnPenuh = $this->PerdimAnakModel->getHlmnPenuhPerdim($id);
        $permohonanRusak = $this->PerdimAnakModel->getRusakPerdim($id);
        $permohonanHilang = $this->PerdimAnakModel->getHilangPerdim($id);
        $permohonanUbhData = $this->PerdimAnakModel->getUbhDataPerdim($id);
        $endorse = $this->PerdimAnakModel->getEndorse($id);

        if ($permohonanBaru || $permohonanRusak || $permohonanHilang || $permohonanUbhData) {
            if ($endorse) {
                echo view('admin/cetak/perdim', $cetak);
                echo view('admin/cetak/perdim2', $cetak);
                echo view('admin/cetak/suratpernyataanumum', $cetak);
                echo view('admin/cetak/suratpernyataanortu', $cetak);
                echo view('admin/cetak/suratpernyataanendorse', $cetak);
            } else {
                echo view('admin/cetak/perdim', $cetak);
                echo view('admin/cetak/perdim2', $cetak);
                echo view('admin/cetak/suratpernyataanumum', $cetak);
                echo view('admin/cetak/suratpernyataanortu', $cetak);
            }
        } elseif ($permohonanHbsBerlaku || $permohonanHlmnPenuh) {
            if ($endorse) {
                echo view('admin/cetak/perdim', $cetak);
                echo view('admin/cetak/perdim2', $cetak);
                echo view('admin/cetak/suratpernyataanumum', $cetak);
                echo view('admin/cetak/suratpernyataanganti', $cetak);
                echo view('admin/cetak/suratpernyataanortu', $cetak);
                echo view('admin/cetak/suratpernyataanendorse', $cetak);
            } else {
                echo view('admin/cetak/perdim', $cetak);
                echo view('admin/cetak/perdim2', $cetak);
                echo view('admin/cetak/suratpernyataanumum', $cetak);
                echo view('admin/cetak/suratpernyataanganti', $cetak);
                echo view('admin/cetak/suratpernyataanortu', $cetak);
            }
        }
    }
}

?>