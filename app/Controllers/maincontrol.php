
<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class maincontrol extends CI_Controller {

    function __construct() {
        parent::__construct();
		$this->load->library('session');
        $this->load->model('mod_siskar');
        $this->load->database();
    }

    public function index() {
		
        $this->load->view('cetak/landingpage');

        
    }

    public function cleardata() {
        
        file_put_contents("c:/KTP/_Log_Transaksi_lengkap.txt", "");
        redirect('maincontrol/index');

        
    }

        public function getdata() {
        
                $file = 'c:/KTP/_Log_Transaksi_lengkap.txt';
        $searchfor = 'KTP-el --> ASCII';

// the following line prevents the browser from parsing this as HTML.
        header('Content-Type: text/plain');

// get the file contents, assuming the file to be readable (and exist)
        $contents = file_get_contents($file);
// escape special characters in the query
        $pattern = preg_quote($searchfor, '/');
// finalise the regular expression, matching the whole line
        $pattern = "/^.*$pattern.*\$/m";
// search, and store all matching occurences in $matches
        if(preg_match_all($pattern, $contents, $matches)){
           $result = implode("\n", $matches[0]);
           $result = substr($result, 39);
        }
        else{
           $result = "No matches found";
        }

        $this->senddata($result);

        
    }



    public function senddata(){

        $file = 'c:/KTP/_Log_Transaksi_lengkap.txt';
        $timestamp = filemtime($file);
        $lastmodified = date('yyyy-mm-dd H:i:s', $timestamp);

        $searchfor = 'KTP-el --> ASCII';

// get the file contents, assuming the file to be readable (and exist)
        $contents = file_get_contents($file);
// escape special characters in the query
        $pattern = preg_quote($searchfor, '/');
// finalise the regular expression, matching the whole line
        $pattern = "/^.*$pattern.*\$/m";
// search, and store all matching occurences in $matches
        if(preg_match_all($pattern, $contents, $matches)){
           $result = implode("\n", $matches[0]);
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
        $data['statussipil']=$statussipil; 
        $data['kotaterbit']=$kotaterbit;
        $data['tempatlahir']=$tempatlahir;
        $data['tanggallahir']=$tanggallahir;
        $data['nama']=$nama;
        $data['jeniskelamin']=$jeniskelamin;
        

        $namaibu = $this->input->post('namaibu');
        $namaayah = $this->input->post('namaayah');
        $namakakek = $this->input->post('namakakek');
        $jenispermohonan = $this->input->post('jenispermohonan');
        $tujuan = $this->input->post('tujuan');
        $nopaspor = $this->input->post('nopaspor');
        $noregister = $this->input->post('noregister');
        $nohp = $this->input->post('nohp');
        $jenisganti = $this->input->post('jenisganti');

        if ($jenispermohonan == 'Baru'){
            $centangbaru = "<input type='checkbox' checked>";
            $centangganti = "<input type='checkbox'>";
        }else{
            $centangbaru = "<input type='checkbox'>";
            $centangganti = "<input type='checkbox' checked>";
        }

        $tgl = strtotime("now");
        $tglpermohonan = date("d F Y",$tgl);
        $data['tglpermohonan']=$tglpermohonan;

        $data['namaibu']=$namaibu;
        $data['namaayah']=$namaayah;
        $data['namakakek']=$namakakek;
        $data['nopaspor']=$nopaspor;
        $data['noregister']=$noregister;
        $data['jenispermohonan']=$jenispermohonan;
        $data['centangganti']=$centangganti;
        $data['centangbaru']=$centangbaru;  
        $data['tujuan']=$tujuan;
        $data['nohp']=$nohp;  
        $data['jenisganti']=$jenisganti; 
        $data['result']=$result; 

        
       // $this->load->view('result',$data);
        if ($jenispermohonan == 'Baru'){
            if ($tujuan=='Umroh'||$tujuan=='umroh'||$tujuan=='umrah'||$tujuan=='Umrah'||$tujuan=='Haji'||$tujuan=='haji'){  
        $this->load->view('perdim',$data);
        $this->load->view('perdim2',$data);
        $this->load->view('suratpernyataanumum',$data);
        $this->load->view('suratpernyataanendorse',$data);
            }else{       
        $this->load->view('perdim',$data);
        $this->load->view('perdim2',$data);
        $this->load->view('suratpernyataanumum',$data); 
            }
        }
        elseif ($jenispermohonan == 'Penggantian') {
            if ($tujuan=='Umroh'||$tujuan=='umroh'||$tujuan=='umrah'||$tujuan=='Umrah'||$tujuan=='Haji'||$tujuan=='haji'){ 
        $this->load->view('perdim',$data);
        $this->load->view('perdim2',$data);
        $this->load->view('suratpernyataanumum',$data);
        $this->load->view('suratpernyataanganti',$data); 
        $this->load->view('suratpernyataanendorse',$data);  
            }else{
        $this->load->view('perdim',$data);
        $this->load->view('perdim2',$data);
        $this->load->view('suratpernyataanumum',$data);
        $this->load->view('suratpernyataanganti',$data); 
            } 
        }


}
    

  


      
 
}
