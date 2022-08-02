<?php

namespace App\Controllers;

use App\Models\PerdimDewasaModel;
use App\Controllers\BaseController;
use MPDF;


class Cetak1 extends BaseController
{

    protected $PerdimDewasaModel;
    public function __construct()
    {
        $this->PerdimDewasaModel = new PerdimDewasaModel();
    }

    public function index()
    {
        $mpdf = new \Mpdf\Mpdf();

        $nik = $this->request->getVar('nik');
        $jeniskelamin = $this->request->getVar('jenis_kelamin');
        $alamat = $this->request->getVar('alamat');
        $tempatlahir = $this->request->getVar('tempat_lahir');
        $tanggallahir = $this->request->getVar('tanggal_lahir');
        $nama = $this->request->getVar('nama_lengkap');
        $pekerjaan = $this->request->getVar('pekerjaan');
        $statussipil = $this->request->getVar('status_sipil');
        $kotaterbit = $this->request->getVar('tempat_output');
        $data['nik'] = $nik;
        $data['alamat'] = $alamat;
        $data['pekerjaan'] = $pekerjaan;
        $data['status_sipil'] = $statussipil;
        $data['tempat_output'] = $kotaterbit;
        $data['tempat_lahir'] = $tempatlahir;
        $data['tanggal_lahir'] = $tanggallahir;
        $data['nama_lengkap'] = $nama;
        $data['jenis_kelamin'] = $jeniskelamin;


        $namaibu = $this->request->getVar('nama_ibu');
        $namaayah = $this->request->getVar('nama_ayah');
        $namakakek = $this->request->getVar('nama_kakek');
        $jenispermohonan = $this->request->getVar('jenis_permohonan');
        $tujuan = $this->request->getVar('tujuan');
        $nopaspor = $this->request->getVar('no_seri');
        $noregister = $this->request->getVar('no_reg');
        $nohp = $this->request->getVar('no_hp');

        $tgl = strtotime("CAST(created_at AS DATE) DateOnly");
        $tglpermohonan = date("d F Y", $tgl);
        $data['created_at'] = $tglpermohonan;

        $data['nama_ibu'] = $namaibu;
        $data['nama_ayah'] = $namaayah;
        $data['nama_kakek'] = $namakakek;
        $data['no_seri'] = $nopaspor;
        $data['no_reg'] = $noregister;
        $data['jenis_permohonan'] = $jenispermohonan;
        $data['tujuan'] = $tujuan;
        $data['no_hp'] = $nohp;

        print  $nik;



        if ($jenispermohonan == 'Baru') {
            if ($tujuan == 'Umroh' || $tujuan == 'Haji') {
                $cetak = view('admin/cetak/perdim', []);
                $cetak = view('admin/cetak/perdim2', []);
                $cetak = view('admin/cetak/suratpernyataanumum', []);
                $cetak = view('admin/cetak/suratpernyataanendorse', []);
                $mpdf->WriteHTML($cetak);
                $mpdf->Output('Perdim', 'I');
            } else {
                $cetak = view('admin/cetak/perdim', []);
                $cetak = view('admin/cetak/perdim2', []);
                $cetak = view('admin/cetak/suratpernyataanumum', []);
                $mpdf->WriteHTML($cetak);
                $mpdf->Output('Perdim', 'I');
            }
        } elseif ($jenispermohonan == 'Penggantian') {
            if ($tujuan == 'Umroh' || $tujuan == 'Haji') {
                $cetak = view('admin/cetak/perdim', []);
                $cetak = view('admin/cetak/perdim2', []);
                $cetak = view('admin/cetak/suratpernyataanumum', []);
                $cetak = view('admin/cetak/suratpernyataanganti', []);
                $cetak = view('admin/cetak/suratpernyataanendorse', []);
                $mpdf->WriteHTML($cetak);
                $mpdf->Output('Perdim', 'I');
            } else {
                $cetak = view('admin/cetak/perdim', []);
                $cetak = view('admin/cetak/perdim2', []);
                $cetak = view('admin/cetak/suratpernyataanumum', []);
                $cetak = view('admin/cetak/suratpernyataanganti', []);
                $mpdf->WriteHTML($cetak);
                $mpdf->Output('Perdim', 'I');
            }
        }
    }

    public function cetak($id)
    {
        // dd($cetak);
        // $jenispermohonan = $this->request->getVar('jenis_permohonan');
        // echo view ('admin/cetak/perdim', $cetak);
        // echo view ('admin/cetak/perdim2', $cetak);
        // echo view ('admin/cetak/suratpernyataanumum', $cetak);
        // $tujuan = $this->request->getVar('tujuan');

        $cetak = $this->PerdimDewasaModel->getCetakPerdimDewasa($id);

        //get permohonan baru from PerdimDewasaModel
        // $baru_bekerja = $this->PerdimDewasaModel->getBaruBekerjaPerdim($id);
        // $baru_belajar = $this->PerdimDewasaModel->getBaruBelajarPerdim($id);
        // $baru_berobat = $this->PerdimDewasaModel->getBaruBerobatPerdim($id);
        // $baru_haji = $this->PerdimDewasaModel->getBaruHajiPerdim($id);
        // $baru_haji_endorse = $this->PerdimDewasaModel->getBaruHajiEndorsePerdim($id);
        // $baru_kunjungan = $this->PerdimDewasaModel->getBaruKunjunganPerdim($id);
        // $baru_umroh = $this->PerdimDewasaModel->getBaruUmrohPerdim($id);
        // $baru_wisata = $this->PerdimDewasaModel->getBaruWisataPerdim($id);

        // $penggantian_bekerja = $this->PerdimDewasaModel->getPenggantianBekerjaPerdim($id);
        // $penggantian_belajar = $this->PerdimDewasaModel->getPenggantianBelajarPerdim($id);
        // $penggantian_berobat = $this->PerdimDewasaModel->getPenggantianBerobatPerdim($id);
        // $penggantian_haji = $this->PerdimDewasaModel->getPenggantianHajiPerdim($id);
        // $penggantian_kunjungan = $this->PerdimDewasaModel->getPenggantianKunjunganPerdim($id);
        // $penggantian_umroh = $this->PerdimDewasaModel->getPenggantianUmrohPerdim($id);
        // $penggantian_wisata = $this->PerdimDewasaModel->getPenggantianWisataPerdim($id);

        // if($baru_bekerja){
        //     echo view('admin/cetak/perdim', $cetak);
        //     echo view('admin/cetak/perdim2', $cetak);
        //     echo view('admin/cetak/suratpernyataanumum', $cetak);
        // } elseif($baru_belajar){
        //     echo view('admin/cetak/perdim', $cetak);
        //     echo view('admin/cetak/perdim2', $cetak);
        //     echo view('admin/cetak/suratpernyataanumum', $cetak);
        // } elseif($baru_berobat){
        //     echo view('admin/cetak/perdim', $cetak);
        //     echo view('admin/cetak/perdim2', $cetak);
        //     echo view('admin/cetak/suratpernyataanumum', $cetak);
        // } elseif($baru_belajar){
        //     echo view('admin/cetak/perdim', $cetak);
        //     echo view('admin/cetak/perdim2', $cetak);
        //     echo view('admin/cetak/suratpernyataanumum', $cetak);
        // } elseif($baru_haji){
        //     echo view('admin/cetak/perdim', $cetak);
        //     echo view('admin/cetak/perdim2', $cetak);
        //     echo view('admin/cetak/suratpernyataanumum', $cetak);
        // } elseif($baru_haji_endorse){
        //     echo view('admin/cetak/perdim', $cetak);
        //     echo view('admin/cetak/perdim2', $cetak);
        //     echo view('admin/cetak/suratpernyataanumum', $cetak);
        //     echo view('admin/cetak/suratpernyataanendorse', $cetak);
        // } elseif($baru_kunjungan){
        //     echo view('admin/cetak/perdim', $cetak);
        //     echo view('admin/cetak/perdim2', $cetak);
        //     echo view('admin/cetak/suratpernyataanumum', $cetak);
        // } elseif($baru_umroh){
        //     echo view('admin/cetak/perdim', $cetak);
        //     echo view('admin/cetak/perdim2', $cetak);
        //     echo view('admin/cetak/suratpernyataanumum', $cetak);
        // } elseif($baru_wisata){
        //     echo view('admin/cetak/perdim', $cetak);
        //     echo view('admin/cetak/perdim2', $cetak);
        //     echo view('admin/cetak/suratpernyataanumum', $cetak);
        //     echo view('admin/cetak/suratpernyataanendorse', $cetak);
        // } elseif($penggantian_bekerja){
        //     echo view('admin/cetak/perdim', $cetak);
        //     echo view('admin/cetak/perdim2', $cetak);
        //     echo view('admin/cetak/suratpernyataanumum', $cetak);
        // } elseif($penggantian_belajar){
        //     echo view('admin/cetak/perdim', $cetak);
        //     echo view('admin/cetak/perdim2', $cetak);
        //     echo view('admin/cetak/suratpernyataanumum', $cetak);
        // } elseif($penggantian_berobat){
        //     echo view('admin/cetak/perdim', $cetak);
        //     echo view('admin/cetak/perdim2', $cetak);
        //     echo view('admin/cetak/suratpernyataanumum', $cetak);
        // } elseif($penggantian_belajar){
        //     echo view('admin/cetak/perdim', $cetak);
        //     echo view('admin/cetak/perdim2', $cetak);
        //     echo view('admin/cetak/suratpernyataanumum', $cetak);
        // } elseif($penggantian_haji){
        //     echo view('admin/cetak/perdim', $cetak);
        //     echo view('admin/cetak/perdim2', $cetak);
        //     echo view('admin/cetak/suratpernyataanumum', $cetak);
        //     echo view('admin/cetak/suratpernyataanendorse', $cetak);
        // } elseif($penggantian_kunjungan){
        //     echo view('admin/cetak/perdim', $cetak);
        //     echo view('admin/cetak/perdim2', $cetak);
        //     echo view('admin/cetak/suratpernyataanumum', $cetak);
        // } elseif($penggantian_umroh){
        //     echo view('admin/cetak/perdim', $cetak);
        //     echo view('admin/cetak/perdim2', $cetak);
        //     echo view('admin/cetak/suratpernyataanumum', $cetak);
        //     echo view('admin/cetak/suratpernyataanendorse', $cetak);
        // } elseif($penggantian_wisata){
        //     echo view('admin/cetak/perdim', $cetak);
        //     echo view('admin/cetak/perdim2', $cetak);
        //     echo view('admin/cetak/suratpernyataanumum', $cetak);
        // }

        // $jenispermohonan = $this->request->getVar('jenis_permohonan');
        // $tujuan = $this->request->getVar('tujuan');
        // $data['jenis_permohonan'] = $jenispermohonan;
        // $data['tujuan'] = $tujuan;

        $permohonanBaru = $this->PerdimDewasaModel->getBaruPerdim($id);
        $permohonanPenggantian = $this->PerdimDewasaModel->getPenggantianPerdim($id);
        $permohonanUmroh = $this->PerdimDewasaModel->getUmrohPerdim($id);
        $permohonanHaji = $this->PerdimDewasaModel->getHajiPerdim($id);

        if ($permohonanBaru) {
            if ($permohonanUmroh || $permohonanHaji) {
                // echo view('admin/cetak/perdim', $cetak);
                // echo view('admin/cetak/perdim2', $cetak);
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
            if ($permohonanUmroh || $permohonanHaji) {
                echo view('admin/cetak/perdim', $cetak);
                echo view('admin/cetak/perdim2', $cetak);
                echo view('admin/cetak/suratpernyataanumum', $cetak);
                echo view('admin/cetak/suratpernyataanendorse', $cetak);
            } else {
                echo view('admin/cetak/perdim', $cetak);
                echo view('admin/cetak/perdim2', $cetak);
                echo view('admin/cetak/suratpernyataanumum', $cetak);
            }
        }
    }
}
