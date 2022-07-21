<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Cetak extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->library('pdf'); //MEMANGGIL LIBRARY PDF
    }
    public function index()
    {
        error_reporting(0); //AGAINT ERROR MASALAH VERSI PHP TIDAK MUNCUL
        $pdf = new FPDF('P','mm','A4'); //MEMBUAT FILE PDF BARU BERDASARKAN BENTUK PAPER DAN UKURAN DARI PAPER

        if(preg_match_all($)){
            $result = implode("\n", $pdf[0]);
       //     $result = substr($result, 39);
         }
         else{
            $result = "No matches found";
         }
        $pecah = array_reverse(explode('","', $result));

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
        $data['result']=$result; 

        
       // $this->load->view('result',$data);
        if ($jenispermohonan == 'Baru'){
            if ($tujuan=='Umroh'||$tujuan=='Haji'){  
        $this->load->view('admin/cetak/perdim',$data);
        $this->load->view('admin/cetak/perdim2',$data);
        $this->load->view('admin/cetak/suratpernyataanumum',$data);
        $this->load->view('admin/cetak/suratpernyataanendorse',$data);
            }else{       
        $this->load->view('admin/cetak/perdim',$data);
        $this->load->view('admin/cetak/perdim2',$data);
        $this->load->view('admin/cetak/suratpernyataanumum',$data); 
            }
        }
        elseif ($jenispermohonan == 'Penggantian') {
            if ($tujuan=='Umroh'||$tujuan=='Haji'){ 
        $this->load->view('admin/cetak/perdim',$data);
        $this->load->view('admin/cetak/perdim2',$data);
        $this->load->view('admin/cetak/suratpernyataanumum',$data);
        $this->load->view('admin/cetak/suratpernyataanganti',$data); 
        $this->load->view('admin/cetak/suratpernyataanendorse',$data);  
            }else{
        $this->load->view('admin/cetak/perdim',$data);
        $this->load->view('admin/cetak/perdim2',$data);
        $this->load->view('admin/cetak/suratpernyataanumum',$data);
        $this->load->view('admin/cetak/suratpernyataanganti',$data); 
            } 
        }


}
    }

?>