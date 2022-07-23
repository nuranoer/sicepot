<?php
namespace App\Controllers;
use App\Models\PerdimDewasaModel;

class Cetak1 extends BaseController {

    public function index()
    {
       $mpdf = new \Mpdf\Mpdf();
       $result = new PerdimDewasaModel();
         $data = $result->getPerdimDewasa();

        $nik = $this->input->post('nik');
        $jeniskelamin = $this->input->post('jenis_kelamin');
        $alamat = $this->input->post('alamat');
        $tempatlahir = $this->input->post('tempat_lahir');
        $tanggallahir = $this->input->post('tanggal_lahir');
        $nama = $this->input->post('nama_lengkap');
        $pekerjaan = $this->input->post('pekerjaan');
        $statussipil = $this->input->post('status_sipil');
        $kotaterbit = $this->input->post('tempat_output');
        $data['nik']=$nik; 
        $data['alamat']=$alamat;
        $data['pekerjaan']=$pekerjaan; 
        $data['status_sipil']=$statussipil; 
        $data['tempat_output']=$kotaterbit;
        $data['tempat_lahir']=$tempatlahir;
        $data['tanggal_lahir']=$tanggallahir;
        $data['nama_lengkap']=$nama;
        $data['jenis_kelamin']=$jeniskelamin;
        

        $namaibu = $this->input->post('nama_ibu');
        $namaayah = $this->input->post('nama_ayah');
        $namakakek = $this->input->post('nama_kakek');
        $jenispermohonan = $this->input->post('jenis_permohonan');
        $tujuan = $this->input->post('tujuan');
        $nopaspor = $this->input->post('no_seri');
        $noregister = $this->input->post('no_reg');
        $nohp = $this->input->post('no_hp');

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
        $data = $this->load->view('hasilPrint', [], TRUE);
		$mpdf->WriteHTML($data);
		$mpdf->Output();

        
       // $this->load->view('result',$data);
        if ($jenispermohonan == 'Baru'){
            if ($tujuan=='Umroh'||$tujuan=='Haji'){  
        return view('admin/cetak/perdim',$data);
        return view('admin/cetak/perdim2',$data);
        return view('admin/cetak/suratpernyataanumum',$data);
        return view('admin/cetak/suratpernyataanendorse',$data);
            }else{       
        return view('admin/cetak/perdim',$data);
        return view('admin/cetak/perdim2',$data);
        return view('admin/cetak/suratpernyataanumum',$data); 
            }
        }
        elseif ($jenispermohonan == 'Penggantian') {
            if ($tujuan=='Umroh'||$tujuan=='Haji'){ 
        return view('admin/cetak/perdim',$data);
        return view('admin/cetak/perdim2',$data);
        return view('admin/cetak/suratpernyataanumum',$data);
        return view('admin/cetak/suratpernyataanganti',$data); 
        return view('admin/cetak/suratpernyataanendorse',$data);  
            }else{
                return view('admin/cetak/perdim',$data);
                return view('admin/cetak/perdim2',$data);
                return view('admin/cetak/suratpernyataanumum',$data);
                return view('admin/cetak/suratpernyataanganti',$data); 
            } 
        }


}
    }

?>