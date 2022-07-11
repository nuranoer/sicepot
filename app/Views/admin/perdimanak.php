<?= $this->extend('admin/layout/template'); ?>

<?= $this->section('content'); ?>

<main id="main" class="main">

<div class="pagetitle">
  <h1>Data Perdim Anak</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/dashboardadmin">Home</a></li>
      <li class="breadcrumb-item">Tables</li>
      <li class="breadcrumb-item active">Data</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <!-- Table with stripped rows -->
          <table class="table datatable">
            <thead>
              <tr>
              <th scope="col">No.</th>
                <th scope="col">Id Perdim</th>
                <th scope="col">Jenis Permohonan</th>
                <th scope="col">Nama Lengkap</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Tempat Lahir</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">NIK</th>
                <th scope="col">Tempat Dikeluarkan</th>
                <th scope="col">Alamat</th>
                <th scope="col">No HP</th>
                <th scope="col">Nama Ibu</th>
                <th scope="col">Nama Ayah</th>
                <th scope="col">Nama Kakek</th>
                <th scope="col">Pekerjaan</th>
                <th scope="col">Status Sipil</th>
                <th scope="col">Tujuan</th>
                <th scope="col">No Seri</th>
                <th scope="col">No Registrasi</th>
                <th scope="col">Aksi</th>

              </tr>
            </thead>
            <tbody>
            </tbody>
          </table>
          <!-- End Table with stripped rows -->

        </div>
      </div>

    </div>
  </div>
</section>

</main><!-- End #main -->
<?= $this->endSection(); ?>

