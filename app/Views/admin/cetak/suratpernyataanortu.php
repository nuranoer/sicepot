<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" type="text/css" href="HTML/bootstrap/css/bootstrap.min.css" /> -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />

    <style>
      * {
        font-family: Arial, Helvetica, sans-serif;
      }
    </style>

  </head>
  <body class="lh-1">
    <div class="p-3">
      <!-- lampiran -->
      <section id="lampiran">
        <div class="container">
          <div class="row">
            <div class="col-8"></div>
            <div class="col-4" style="font-size: 10px">
              <small>
                Lampiran : <br />
                Surat Edaran Direktur Jenderal keimigrasian <br />
                Nomor : <br />
                Tanggal : <br />
              </small>
            </div>
          </div>
          <br />
        </div>
      </section>
      <!-- end of lampiran -->

      <!-- Judul -->
      <section id="judul">
        <div class="row">
          <div class="col text-center">
            <h6
              class="fw-bold text-uppercase text-decoration-underline"
              style="font-size: 13px"
            >
              surat pernyataan orang tua
            </h6>
          </div>
        </div>
        <br /><br />
      </section>
      <!-- end of judul -->

      <!-- Isi -->
      <section id="isi" style="font-size: 10px">
        <div class="container">
          <!-- Ayah -->
          <small>
            <div class="row">
              <div class="col">
                <p>Yang bertanda tangan di bawah ini, saya :</p>
              </div>
            </div>
            <div class="row">
              <div class="col-2">
                <p>Nama Ayah</p>
              </div>
              <div class="col-10">
                <p>&emsp;    : <?php echo $nama_ayah ?></p>
              </div>
            </div>
            <div class="row">
              <div class="col-2">
                <p>Tempat/Tgl Lahir</p>
              </div>
              <div class="col-10">
                <p>&emsp;    : <?php echo $tempat_lhr_ayah ?>, <?php echo $tgl_lhr_ayah ?></p>
              </div>
            </div>
            <div class="row">
              <div class="col-2">
                <p>Alamat</p>
              </div>
              <div class="col-10">
                <p>&emsp;    : <?php echo $alamat_ayah ?></p>
              </div>
            </div>
            <div class="row pt-3">
              <div class="col-5">
                <div class="row">
                  <div class="col-12">
                    <p>
                      Pemegang KTP No&emsp;&emsp;  :
                      <?php echo $no_ktp_ayah ?>
                    </p>
                  </div>
                  <!-- <div class="col-6">
                    <p>: (KTP)</p>
                  </div> -->
                </div>
              </div>
              <div class="col-4">
                <div class="row">
                  <div class="col-12">
                    <p>tgl diberikan&emsp;: <?php echo $tgl_ktp_ayah ?></p>
                  </div>
                </div>
              </div>
              <div class="col-3">
                <div class="row">
                  <div class="col-12">
                    <p>berlaku s/d&emsp;:</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-5">
                <div class="row">
                  <div class="col-12">
                    <p>
                      Pemegang Paspor No&emsp; :
                      <?php echo $no_paspor_ayah ?>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-4">
                <div class="row">
                  <div class="col-12">
                    <p>tgl diberikan&emsp;: <?php echo $tgl_paspor_ayah ?></p>
                  </div>
                </div>
              </div>
              <div class="col-3">
                <div class="row">
                  <div class="col-12">
                    <p>berlaku s/d&emsp;: <?php echo $rentang_paspor_ayah ?></p>
                  </div>
                </div>
              </div>
            </div>
          </small>
          <!-- end of data ayah -->

          <!-- ibu -->
          <small>
            <div class="row pt-4">
              <div class="col">
                <p>Yang bertanda tangan di bawah ini, saya :</p>
              </div>
            </div>
            <div class="row">
              <div class="col-2">
                <p>Nama Ibu</p>
              </div>
              <div class="col-10">
                <p>&emsp;    : <?php echo $nama_ibu ?></p>
              </div>
            </div>
            <div class="row">
              <div class="col-2">
                <p>Tempat/Tgl Lahir</p>
              </div>
              <div class="col-10">
                <p>&emsp;    : <?php echo $tempat_lhr_ibu ?>, <?php echo $tgl_lhr_ibu ?></p>
              </div>
            </div>
            <div class="row">
              <div class="col-2">
                <p>Alamat</p>
              </div>
              <div class="col-10">
                <p>&emsp;    : <?php echo $alamat_ibu ?></p>
              </div>
            </div>
            <div class="row pt-3">
              <div class="col-5">
                <div class="row">
                  <div class="col-12">
                    <p>
                      Pemegang KTP No&emsp;&emsp;  :
                      <?php echo $no_ktp_ibu ?>
                    </p>
                  </div>
                  <!-- <div class="col-6">
                    <p>: (KTP)</p>
                  </div> -->
                </div>
              </div>
              <div class="col-4">
                <div class="row">
                  <div class="col-12">
                    <p>tgl diberikan&emsp;: <?php echo $tgl_ktp_ibu ?></p>
                  </div>
                </div>
              </div>
              <div class="col-3">
                <div class="row">
                  <div class="col-12">
                    <p>berlaku s/d&emsp;:</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-5">
                <div class="row">
                  <div class="col-12">
                    <p>
                      Pemegang Paspor No&emsp; :
                      <?php echo $no_paspor_ibu ?>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-4">
                <div class="row">
                  <div class="col-12">
                    <p>tgl diberikan&emsp;: <?php echo $tgl_paspor_ibu ?></p>
                  </div>
                </div>
              </div>
              <div class="col-3">
                <div class="row">
                  <div class="col-12">
                    <p>berlaku s/d&emsp;: <?php echo $rentang_paspor_ibu ?></p>
                  </div>
                </div>
              </div>
            </div>
          </small>
          <!-- end of data ibu -->

          <!-- anak -->
          <small>
            <div class="row pt-3">
              <div class="col">
                <p class="text-justify lh-sm" style="text-indent: 25px">
                  Selaku Bapak/Ibu, menyatakan bahwa semua persyaratan yang
                  diajukan dalam rangka permohonan Paspor RI untuk dan atas nama
                  anak saya dengan identitas sebagai berikut ini:
                </p>
              </div>
            </div>
            <div class="row">
              <div class="col-2">
                <p>Nama</p>
              </div>
              <div class="col-10">
                <p>&emsp;   : <?php echo $nama_lengkap ?></p>
              </div>
            </div>
            <div class="row">
              <div class="col-2">
                <p>Tempat/Tgl Lahir</p>
              </div>
              <div class="col-10">
                <p>&emsp;   : <?php echo $tempat_lahir ?>, <?php echo $tanggal_lahir ?></p>
              </div>
            </div>
            <div class="row">
              <div class="col-2">
                <p>Alamat</p>
              </div>
              <div class="col-10">
                <p>&emsp;   : <?php echo $alamat ?></p>
              </div>
            </div>
            <div class="row pt-3">
              <div class="col-5">
                <div class="row">
                  <div class="col-12">
                    <p>
                      Pemegang NIK No&emsp;&emsp;  : <?php echo $nik ?>
                    </p>
                  </div>
                  <!-- <div class="col-6">
                    <p>: (KTP)</p>
                  </div> -->
                </div>
              </div>
              <div class="col-4">
                <div class="row">
                  <div class="col-12">
                    <p>tgl diberikan&emsp;:</p>
                  </div>
                </div>
              </div>
              <div class="col-3">
                <div class="row">
                  <div class="col-12">
                    <p>berlaku s/d&emsp;: </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-5">
                <div class="row">
                  <div class="col-12">
                    <p>
                      Pemegang Paspor No&emsp;:
                      <?php echo $no_seri ?>
                    </p>
                  </div>
                  <!-- <div class="col-6">
                    <p>: (KTP)</p>
                  </div> -->
                </div>
              </div>
              <div class="col-4">
                <div class="row">
                  <div class="col-12">
                    <p>tgl diberikan&emsp;: </p>
                  </div>
                </div>
              </div>
              <div class="col-3">
                <div class="row">
                  <div class="col-12">
                    <p>berlaku s/d&emsp;: </p>
                  </div>
                </div>
              </div>
            </div>
          </small>
          <!-- end of data anak -->

          <!-- penutup -->
          <small style="text-align: justify">
            <div class="row">
              <div class="col">
                <p class="pt-3 text-justify lh-sm" style="text-indent: 25px">
                  Adalah benar, sah, dan tidak palsu atau dipalsukan serta
                  dengan ini saya menyatakan tidak keberatan terhadap anak saya
                  untuk bepergian ke luar negeri dalam rangka
                  <strong><?php echo $tujuan ?></strong> yaitu ke negara
                  <strong><?php echo $negara ?></strong>. Bahwa keberangkatan anak saya
                  tersebut sepenuhnya menjadi tanggungan
                  pribadi/perusahaan/kantor/lembaga pendidikan***)
                </p>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <p class="text-justify lh-sm" style="text-indent: 25px">
                  Demikian pernyataan ini dibuat dengan sebenarnya, dengan penuh
                  kesadaran tanpa paksaan dalam bentuk atau cara apapun serta
                  dari apapun juga dan apabila ternyata dikemudian hari
                  pernyataan saya tidak benar, saya bersedia dituntut sesuai
                  peraturan perundangan yang berlaku.
                </p>
              </div>
            </div>
          </small>
          <!-- end of penutup -->

          <!-- ttd -->
          <small>
            <div class="container">
              <div class="row pt-3">
                <div class="col-12">
                <?php $getTanggal = str_split($created_at) ?>
                  <p class="text-center">
                    Kediri, <?php echo $getTanggal[8];?><?php echo $getTanggal[9];?>-<?php echo $getTanggal[5];?><?php echo $getTanggal[6];?>-<?php echo $getTanggal[0];?><?php echo $getTanggal[1];?><?php echo $getTanggal[2];?><?php echo $getTanggal[3];?><br />
                    Yang menyatakan
                  </p>
                </div>
                <div class="col-12">
                  <div class="row px-4 justify-content-center">
                    <div class="col-3 text-end">
                      <br /><br /><br /><br /><br /><br /><br />
                      <p>( <?php echo $nama_ayah ?> )</p>
                    </div>
                    <div class="col-3">
                      <div class="card">
                        <div class="card-body text-center lh-lg">
                          Materai <br />
                          10.000
                        </div>
                      </div>
                    </div>
                    <div class="col-3">
                      <br /><br /><br /><br /><br /><br /><br />
                      <p>( <?php echo $nama_ibu ?> )</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </small>
          <!-- end of ttd -->
        </div>
      </section>
      <!-- isi -->
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="HTML/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
    <!-- <script type="text/javascript">
      window.print();
    </script> -->
  </body>
</html>

<p style="page-break-after: always;">&nbsp;</p>