<?php

namespace App\Controllers;

class Cetak extends BaseController
{
    public function index()
    {
        $mpdf = new \Mpdf\Mpdf();

        $pecah = array_reverse(explode('","', $this->request->getPost('data')));

        $nik = substr($pecah[20],-16);
        $jeniskelamin = $pecah[12];
        $alamat = $pecah[19];
        $tempatlahir = $pecah[16];
        $tgllahir = $pecah[6];
        $tanggallahir = date('d-m-Y',strtotime($tgllahir));
        $nama = $pecah[7];
        $pekerjaan = $pecah[8];
        $statussipil = $pecah[9];
        $kotaterbit = substr($pecah[0],0,-2);
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
        $nopaspor = $this->input->post('no_paspor');
        $noregister = $this->input->post('no_register');
        $nohp = $this->input->post('no_hp');

        $tgl = strtotime("now");
        $tglpermohonan = date("d F Y",$tgl);
        $data['tglpermohonan']=$tglpermohonan;

        $data['nama_ibu']=$namaibu;
        $data['nama_ayah']=$namaayah;
        $data['nama_kakek']=$namakakek;
        $data['no_seri']=$nopaspor;
        $data['no_reg']=$noregister;
        $data['jenis_permohonan']=$jenispermohonan;
        $data['tujuan']=$tujuan;
        $data['nohp']=$nohp;  

		$html = view('admin/cetak/perdim',[]);
		$mpdf->WriteHTML($html);
        if ($jenispermohonan == 'Baru'){
            if ($tujuan=='Umroh'||$tujuan=='umroh'||$tujuan=='umrah'||$tujuan=='Umrah'||$tujuan=='Haji'||$tujuan=='haji'){  
        $html = view('admin/cetak/perdim',$data);
        $mpdf->WriteHTML($html);
        $html = view('admin/cetak/perdim2',$data);
        $mpdf->WriteHTML($html);
        $html = view('admin/cetak/suratpernyataanumum',$data);
        $mpdf->WriteHTML($html);
        $html = view('admin/cetak/suratpernyataanendorse',$data);
        $mpdf->WriteHTML($html);
            }else{       
        $html = view('admin/cetak/perdim',$data);
        $mpdf->WriteHTML($html);
        $html = view('admin/cetak/perdim2',$data);
        $mpdf->WriteHTML($html);
        $html = view('admin/cetak/suratpernyataanumum',$data); 
        $mpdf->WriteHTML($html);
            }
        }
        elseif ($jenispermohonan == 'Penggantian') {
            if ($tujuan=='Umroh'||$tujuan=='umroh'||$tujuan=='umrah'||$tujuan=='Umrah'||$tujuan=='Haji'||$tujuan=='haji'){ 
        $html = view('admin/cetak/perdim',$data);
        $mpdf->WriteHTML($html);
        $html = view('admin/cetak/perdim2',$data);
        $mpdf->WriteHTML($html);
        $html = view('admin/cetak/suratpernyataanumum',$data);
        $mpdf->WriteHTML($html);
        $html = view('admin/cetak/suratpernyataanganti',$data); 
        $mpdf->WriteHTML($html);
        $html = view('admin/cetak/suratpernyataanendorse',$data);
        $mpdf->WriteHTML($html);  
            }else{
        $html = view('admin/cetak/perdim',$data);
        $mpdf->WriteHTML($html);
        $html = view('admin/cetak/perdim2',$data);
        $mpdf->WriteHTML($html);
        $html = view('admin/cetak/suratpernyataanumum',$data);
        $mpdf->WriteHTML($html);
        $html = view('admin/cetak/suratpernyataanganti',$data);
        $mpdf->WriteHTML($html); 
            } 
        }
		$this->response->setHeader('Content-Type', 'application/pdf');
		$mpdf->Output('arjun.pdf','I'); // opens in browser
		//$mpdf->Output('arjun.pdf','D'); // it downloads the file into the user system, with give name
		//return view('welcome_message');

        
    }
}
