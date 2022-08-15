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
        $permohonanPenggantian = $this->PerdimAnakModel->getPenggantianPerdim($id);
        $endorse = $this->PerdimAnakModel->getEndorse($id);
        // $permohonanUmroh = $this->PerdimAnakModel->getUmrohPerdim($id);
        // $permohonanHaji = $this->PerdimAnakModel->getHajiPerdim($id);

        if ($permohonanBaru) {
            if ($endorse) {
                echo view('admin/cetak/perdim', $cetak);
                echo view('admin/cetak/perdim2', $cetak);
                echo view('admin/cetak/suratpernyataanortu',$cetak);
                echo view('admin/cetak/suratpernyataanumum', $cetak);
                echo view('admin/cetak/suratpernyataanendorse', $cetak);
            } else {
                echo view('admin/cetak/perdim', $cetak);
                echo view('admin/cetak/perdim2', $cetak);
                echo view('admin/cetak/suratpernyataanortu',$cetak);
                echo view('admin/cetak/suratpernyataanumum', $cetak);
            }
        } elseif ($permohonanPenggantian) {
            if ($endorse) {
                echo view('admin/cetak/perdim', $cetak);
                echo view('admin/cetak/perdim2', $cetak);
                echo view('admin/cetak/suratpernyataanortu',$cetak);
                echo view('admin/cetak/suratpernyataanumum', $cetak);
                echo view('admin/cetak/suratpernyataanendorse', $cetak);
                echo view('admin/cetak/suratpernyataanganti', $cetak);
            } else {
                echo view('admin/cetak/perdim', $cetak);
                echo view('admin/cetak/perdim2', $cetak);
                echo view('admin/cetak/suratpernyataanortu',$cetak);
                echo view('admin/cetak/suratpernyataanumum', $cetak);
                echo view('admin/cetak/suratpernyataanganti', $cetak);
            }
        }
    }
}

?>