<?php
namespace App\Controllers;
use App\Models\PerdimDewasaModel;
use App\Controllers\BaseController;
use MPDF;


class Cetak1 extends BaseController {

    protected $PerdimDewasaModel;
    public function __construct()
    {
        $this->PerdimDewasaModel = new PerdimDewasaModel();
    }

    public function index()
    {
       $mpdf = new \Mpdf\Mpdf();
         $request = \Config\Services::request();


        $nik = $this->request->getVar('nik');
        $jeniskelamin = $this->request->getVar('jenis_kelamin');
        $alamat = $this->request->getVar('alamat');
        $tempatlahir = $this->request->getVar('tempat_lahir');
        $tanggallahir = $this->request->getVar('tanggal_lahir');
        $nama = $this->request->getVar('nama_lengkap');
        $pekerjaan = $this->request->getVar('pekerjaan');
        $statussipil = $this->request->getVar('status_sipil');
        $kotaterbit = $this->request->getVar('tempat_output');
        $data['nik']=$nik; 
        $data['alamat']=$alamat;
        $data['pekerjaan']=$pekerjaan; 
        $data['status_sipil']=$statussipil; 
        $data['tempat_output']=$kotaterbit;
        $data['tempat_lahir']=$tempatlahir;
        $data['tanggal_lahir']=$tanggallahir;
        $data['nama_lengkap']=$nama;
        $data['jenis_kelamin']=$jeniskelamin;
        

        $namaibu = $this->request->getVar('nama_ibu');
        $namaayah = $this->request->getVar('nama_ayah');
        $namakakek = $this->request->getVar('nama_kakek');
        $jenispermohonan = $this->request->getVar('jenis_permohonan');
        $tujuan = $this->request->getVar('tujuan');
        $nopaspor = $this->request->getVar('no_seri');
        $noregister = $this->request->getVar('no_reg');
        $nohp = $this->request->getVar('no_hp');

        $tgl = strtotime("CAST(created_at AS DATE) DateOnly");
        $tglpermohonan = date("d F Y",$tgl);
        $data['created_at']=$tglpermohonan;

        $data['nama_ibu']=$namaibu;
        $data['nama_ayah']=$namaayah;
        $data['nama_kakek']=$namakakek;
        $data['no_seri']=$nopaspor;
        $data['no_reg']=$noregister;
        $data['jenis_permohonan']=$jenispermohonan;
        $data['tujuan']=$tujuan;
        $data['no_hp']=$nohp;
        

        
       // $this->load->view('result',$data);
        if ($jenispermohonan == 'Baru'){
            if ($tujuan=='Umroh'||$tujuan=='Haji'){ 
        return view('admin/cetak/perdim',$data,);         
        $mpdf->WriteHTML('admin/cetak/perdim');
        return view('admin/cetak/perdim2',$data);
        $mpdf->WriteHTML('admin/cetak/perdim2');
        return view('admin/cetak/suratpernyataanumum',$data);
        $mpdf->WriteHTML('admin/cetak/suratpernyataanumum');
        return view('admin/cetak/suratpernyataanendorse',$data);
        $mpdf->WriteHTML('admin/cetak/suratpernyataanendorse');
        $mpdf -> Output();
        $mpdf-> Output('perdim.pdf', 'I');
            }else{
                return view('admin/cetak/perdim',$data);       
                $mpdf->WriteHTML('admin/cetak/perdim');
                return view('admin/cetak/perdim2',$data);
                $mpdf->WriteHTML('admin/cetak/perdim2');
                return view('admin/cetak/suratpernyataanumum',$data);
                $mpdf->WriteHTML('admin/cetak/suratpernyataanumum');
                $mpdf -> Output();
                $mpdf-> Output('perdim.pdf', 'I'); 
            }
        }
        elseif ($jenispermohonan == 'Penggantian') {
            if ($tujuan=='Umroh'||$tujuan=='Haji'){
                return view('admin/cetak/perdim',$data);  
                $mpdf->WriteHTML('admin/cetak/perdim');
                return view('admin/cetak/perdim2',$data);
                $mpdf->WriteHTML('admin/cetak/perdim2');
                return view('admin/cetak/suratpernyataanumum',$data);
                $mpdf->WriteHTML('admin/cetak/suratpernyataanumum');
                return view('admin/cetak/suratpernyataanganti',$data);
                $mpdf->WriteHTML('admin/cetak/suratpernyataanganti'); 
                return view('admin/cetak/suratpernyataanendorse',$data);
                $mpdf->WriteHTML('admin/cetak/suratpernyataanendorse');
                $mpdf -> Output();
                $mpdf-> Output('perdim.pdf', 'I');   
            }else{
                return view('admin/cetak/perdim',$data);  
                $mpdf->WriteHTML('admin/cetak/perdim');
                return view('admin/cetak/perdim2',$data);
                $mpdf->WriteHTML('admin/cetak/perdim2');
                return view('admin/cetak/suratpernyataanumum',$data);
                $mpdf->WriteHTML('admin/cetak/suratpernyataanumum');
                return view('admin/cetak/suratpernyataanganti',$data);
                $mpdf->WriteHTML('admin/cetak/suratpernyataanganti');
                $mpdf -> Output();
                $mpdf-> Output('perdim.pdf', 'I'); 
            } 
        }


}
    }

?>