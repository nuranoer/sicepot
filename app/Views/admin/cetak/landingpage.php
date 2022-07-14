<!DOCTYPE html>
<html lang="en">
  <head>
    <title>SICEPOT - Kantor Imigrasi Kediri</title>
    <link rel="icon" href="<?php echo base_url("assets/images/imigrasi1.png")?>">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,700|Muli:300,400,700,900" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url("assets/fonts/icomoon/style.css")?>">

    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css")?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/jquery-ui.css")?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/owl.carousel.min.css")?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/owl.theme.default.min.css")?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/owl.theme.default.min.css")?>">

    <link rel="stylesheet" href="<?php echo base_url("assets/css/jquery.fancybox.min.css")?>">

    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap-datepicker.css")?>">

    <link rel="stylesheet" href="<?php echo base_url("assets/fonts/flaticon/font/flaticon.css")?>">

    <link rel="stylesheet" href="<?php echo base_url("assets/css/aos.css")?>">

    <link rel="stylesheet" href="<?php echo base_url("assets/css/style.css")?>">
    
  </head>
  <body>

    <style>
body, html {
  height: 100%;
}

body{
  /* The image used */
  background-image: url('<?php echo base_url("assets/images/paspor.jpg")?>');

  /* Full height */
  height: 100%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>


              <?php 

        
        $file = 'c:/KTP/_Log_Transaksi_lengkap.txt';

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
        $tempatlahir = $pecah[15];
        $tanggallahir = $pecah[6];
        $nama = $pecah[7];
        $pekerjaan = $pecah[8];
        $statussipil = $pecah[9];
        $kotaterbit = substr($pecah[0],0,-2);

              ?>
  

  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>

    <div class="custom-owl-carousel" id="testimonials-section">
      <div class="container">
        <div class="row text-center justify-content-center mb-5"  data-aos="fade-up">
          <div class="col-lg-12 mb-5 text-center">
            <h3 class="section-title w-100 mx-auto" style="color:#fff">SICEPOT</h3>
            <p style="color:#fff">Aplikasi Cetak Formulir Paspor Otomatis (Beta Version)<br><strong>Kantor Imigrasi Kediri</strong> untuk pencetakan formulir pendaftaran paspor meliputi Perdim 11, Surat Pernyataan Umum, Penggantian, Endorse</p>
          </div>
        </div>
        <div class="row align-items-center"  data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-5 mr-auto">
        <form class="form-horizontal" action="<?php echo site_url('maincontrol/senddata');?>" method="POST" target="_blank">

        <div class="form-group row">
        <a data-toggle='modal' data-target='#modalEdit' class="btn btn-danger py-3 px-5 btn-block" style="text-align: center;color:#fff;">Cek Data Hasil Scan</a>
        </div>

        <div class="form-group row">
                <div class="col-md-12">
                  <input type="text" class="form-control" placeholder="Nama" name="nama" id="nama" value="<?php echo $nama ?>" >
                </div></div>
          
          <div class="form-group row">
                <div class="col-md-12">
                  <select name="jenispermohonan" id="jenispermohonan" autocomplete="off" class="form-control" onchange='CheckColors(this.value);'>
                                <option value="pilih" disabled selected>Pilih Jenis Permohonan</option>
                                <option value="Baru">Baru</option>
                                <option value="Penggantian">Penggantian</option>
                              </select>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <select name="jenisganti" id="jenisganti" autocomplete="off" class="form-control" style="display:none;">
                                <option value="pilih" disabled selected>Pilih Alasan Penggantian</option>
                                <option value="Habis Berlaku">Habis Berlaku</option>
                                <option value="Halaman Penuh">Halaman Penuh</option>
                                <option value="Hilang">Hilang</option>
                                <option value="Rusak">Rusak</option>
                              </select>
                </div>
              </div>

                <div class="form-group row" >
                <div class="col-md-6">
                  <input type="text" class="form-control" placeholder="No Seri Paspor Lama" name="nopaspor" id="nopaspor" style="display:none;">
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control" placeholder="No Register Paspor Lama" name="noregister" id="noregister" style="display:none;">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-6">
                  <input type="text" class="form-control" placeholder="Nama Ibu" name="namaibu" id="namaibu" >
                </div>

                <div class="col-md-6">
                  <input type="text" class="form-control" placeholder="Nama Ayah" name="namaayah" id="namaayah" >
                </div></div>

              <div class="form-group row">
                <div class="col-md-12">
                  <textarea class="form-control" id="tujuan" cols="30" rows="3" name="tujuan" placeholder="Tujuan Pengurusan Paspor" onchange='cektujuan(this.value);'></textarea>
                </div>
              </div>

              <script type="text/javascript">
function CheckColors(val){
 var element=document.getElementById('nopaspor');
 var element1=document.getElementById('noregister');
 var element2=document.getElementById('jenisganti');
if(val=='Penggantian'){
   element.style.display="block";
   element1.style.display="block";
   element2.style.display="block";}
 else{
   element.style.display="none";
   element1.style.display="none";
   element2.style.display="none"}
}

function cektujuan(val){
 var element1=document.getElementById('namakakek');
if(val=='Umroh'||val=='umroh'||val=='umrah'||val=='Umrah'||val=='Haji'||val=='haji'){
   
   element1.style.display="block";}
 else{
   
   element1.style.display="none";}
}

</script> 



              <div class="form-group row">
                <div class="col-md-6">
                  <input type="text" class="form-control" placeholder="Nama Kakek" name="namakakek" id="namakakek" style="display:none;">
                </div></div>

              <div class="form-group row">
                <div class="col-md-12">
                  <input type="text" class="form-control" id="nohp" cols="30" name="nohp" placeholder="Isi Nomor HP">
                </div>
              </div>

              
              

              <div class="form-group row">
                <div class="col-md-6">
                  
                  <input type="submit" class="btn btn-success py-3 px-5 btn-block" value="Cetak Formulir">
                </div>
              </div>

            </form>
              

          </div>
          <div class="col-lg-6 ml-auto"  data-aos="fade-up" data-aos-delay="200">
                        
            <div class="owl-carousel slide-one-item-alt">
              <img src="<?php echo base_url("assets/images/person_2.jpg")?>" alt="Image" class="img-fluid">
              <img src="<?php echo base_url("assets/images/person_22.png")?>" alt="Image" class="img-fluid">
            </div>

            <div class="owl-custom-direction">
              <a href="#" class="custom-prev"><span class="icon-keyboard_arrow_left"></span></a>
              <a href="#" class="custom-next"><span class="icon-keyboard_arrow_right"></span></a>
            </div>

          </div>
        </div>
      </div>
    </div>

    <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
              <p>
            by Kusuma H.C.
            </p>
            
            </div>
          </div>

  

  <script src="<?php echo base_url("assets/js/jquery-3.3.1.min.js")?>"></script>
  <script src="<?php echo base_url("assets/js/jquery-ui.js")?>"></script>
  <script src="<?php echo base_url("assets/js/popper.min.js")?>"></script>
  <script src="<?php echo base_url("assets/js/bootstrap.min.js")?>"></script>
  <script src="<?php echo base_url("assets/js/owl.carousel.min.js")?>"></script>
  <script src="<?php echo base_url("assets/js/jquery.easing.1.3.js")?>"></script>
  <script src="<?php echo base_url("assets/js/aos.js")?>"></script>
  <script src="<?php echo base_url("assets/js/jquery.fancybox.min.js")?>"></script>
  <script src="<?php echo base_url("assets/js/jquery.waypoints.min.js")?>"></script>
  <script src="<?php echo base_url("assets/js/jquery.animateNumber.min.js")?>"></script>
  <script src="<?php echo base_url("assets/js/jquery.sticky.js")?>"></script>
  <script src="<?php echo base_url("assets/js/main.js")?>"></script>
    
  
  </body>
</html>



<div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h2 class="modal-title" id="myModalLabel" style="color:black"> </h2>
              </div>
                <div class="modal-body">
                
 <form class="form-horizontal" action="#">
                   <div class="col-xl-12 col-lg-12">
             
                    <div class="card  col-md-12" >

          
          <div class="card-header"  ><strong>Get Data</strong><small> E-KTP </small></div>
                     

            <div class="card-body card-block">



                    
                         <div class="form-group"><div class="col-md-12"><input type="text" id="nama" name="nama" value="<?php echo $nama ?>"  class="form-control" readonly></div></div>
                         <div class="form-group"><div class="col-md-12"><input type="text" id="nik" name="nik" value="<?php echo $nik ?>"  class="form-control" readonly></div></div>

            
            
            <div class="card-footer">

                        <button  data-dismiss="modal" class="btn btn-success btn-sm">
                          <i class="fa fa-dot-circle-o"></i> Proses Data
                        </button>
                      </div>
            
                    </div>
          
          
          
            </div></div>

                            </form>



</div></div></div></div>