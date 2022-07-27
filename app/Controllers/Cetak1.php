<?php
namespace App\Controllers;
use App\Models\PerdimDewasaModel;


class Cetak1 extends BaseController {

    public function index()
    {
       $mpdf = new \Mpdf\Mpdf();
       $mpdf = new PerdimDewasaModel();
         $request = \Config\Services::request();


        $nik = $request->getPost('nik');
        $jeniskelamin = $request->getPost('jenis_kelamin');
        $alamat = $request->getPost('alamat');
        $tempatlahir = $request->getPost('tempat_lahir');
        $tanggallahir = $request->getPost('tanggal_lahir');
        $nama = $request->getPost('nama_lengkap');
        $pekerjaan = $request->getPost('pekerjaan');
        $statussipil = $request->getPost('status_sipil');
        $kotaterbit = $request->getPost('tempat_output');
        $data['nik']=$nik; 
        $data['alamat']=$alamat;
        $data['pekerjaan']=$pekerjaan; 
        $data['status_sipil']=$statussipil; 
        $data['tempat_output']=$kotaterbit;
        $data['tempat_lahir']=$tempatlahir;
        $data['tanggal_lahir']=$tanggallahir;
        $data['nama_lengkap']=$nama;
        $data['jenis_kelamin']=$jeniskelamin;
        

        $namaibu = $request->getPost('nama_ibu');
        $namaayah = $request->getPost('nama_ayah');
        $namakakek = $request->getPost('nama_kakek');
        $jenispermohonan = $request->getPost('jenis_permohonan');
        $tujuan = $request->getPost('tujuan');
        $nopaspor = $request->getPost('no_seri');
        $noregister = $request->getPost('no_reg');
        $nohp = $request->getPost('no_hp');

        $tgl = strtotime("SELECT CAST(created_at AS DATE) DateOnly
        FROM perdim_dewasa");
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
        $this->load->view('admin/cetak/perdim',$data,true);         
        $mpdf->WriteHTML('admin/cetak/perdim');
        $this->load->view('admin/cetak/perdim2',$data,true);
        $mpdf->WriteHTML('admin/cetak/perdim2');
        $this->load->view('admin/cetak/suratpernyataanumum',$data,true);
        $mpdf->WriteHTML('admin/cetak/suratpernyataanumum');
        $this->load->view('admin/cetak/suratpernyataanendorse',$data,true);
        $mpdf->WriteHTML('admin/cetak/suratpernyataanendorse');
        $mpdf -> Output();
        $mpdf-> Output('perdim.pdf', 'I');
            }else{
                $this->load->view('admin/cetak/perdim',$data,true);       
                $mpdf->WriteHTML('admin/cetak/perdim');
                $this->load->view('admin/cetak/perdim2',$data,true);
                $mpdf->WriteHTML('admin/cetak/perdim2');
                $this->load->view('admin/cetak/suratpernyataanumum',$data,true);
                $mpdf->WriteHTML('admin/cetak/suratpernyataanumum');
                $mpdf -> Output();
                $mpdf-> Output('perdim.pdf', 'I'); 
            }
        }
        elseif ($jenispermohonan == 'Penggantian') {
            if ($tujuan=='Umroh'||$tujuan=='Haji'){
                $this->load->view('admin/cetak/perdim',$data,true);  
                $mpdf->WriteHTML('admin/cetak/perdim');
                $this->load->view('admin/cetak/perdim2',$data,true);
                $mpdf->WriteHTML('admin/cetak/perdim2');
                $this->load->view('admin/cetak/suratpernyataanumum',$data,true);
                $mpdf->WriteHTML('admin/cetak/suratpernyataanumum');
                $this->load->view('admin/cetak/suratpernyataanganti',$data,true);
                $mpdf->WriteHTML('admin/cetak/suratpernyataanganti'); 
                $this->load->view('admin/cetak/suratpernyataanendorse',$data,true);
                $mpdf->WriteHTML('admin/cetak/suratpernyataanendorse');
                $mpdf -> Output();
                $mpdf-> Output('perdim.pdf', 'I');   
            }else{
                $this->load->view('admin/cetak/perdim',$data,true);  
                $mpdf->WriteHTML('admin/cetak/perdim');
                $this->load->view('admin/cetak/perdim2',$data,true);
                $mpdf->WriteHTML('admin/cetak/perdim2');
                $this->load->view('admin/cetak/suratpernyataanumum',$data,true);
                $mpdf->WriteHTML('admin/cetak/suratpernyataanumum');
                $this->load->view('admin/cetak/suratpernyataanganti',$data,true);
                $mpdf->WriteHTML('admin/cetak/suratpernyataanganti');
                $mpdf -> Output();
                $mpdf-> Output('perdim.pdf', 'I'); 
            } 
        }


}
    }

?>