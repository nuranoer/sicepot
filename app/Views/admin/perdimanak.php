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
                      <th scope="col">NIK</th>
                      <th scope="col">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Id Perdim</td>
                        <td>Jenis Permohonan</td>
                        <td>Nama Lengkap</td>
                        <td>Jenis Kelamin</td>
                        <td>NIK</td>
                        <td><a href="#" class="btn btn-primary">Print</a></td>
                    </tr>
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

