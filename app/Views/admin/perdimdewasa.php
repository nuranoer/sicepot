<?= $this->extend('admin/layout/template'); ?>

<?= $this->section('content'); ?>

<main id="main" class="main">

<div class="pagetitle">
  <h1>Data Perdim Dewasa</h1>
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
                      <th >No.</th>
                      <th scope="col">Jenis Permohonan</th>
                      <th scope="col">Nama Lengkap</th>
                      <th scope="col">Jenis Kelamin</th>
                      <th scope="col">NIK</th>
                      <th scope="col">Tanggal Upload</th>
                      <th scope="col">Print</th>
                    </tr>
                  </thead>
                  <tbody>
            <?php
                if ($perdimdewasa) :
                    $no = 1;
                    foreach ($perdimdewasa as $pd) :
                        ?>
                    <tr>
                        <th scope="row"><?= $no++; ?></th>
                        <td><?= $pd['jenis_permohonan']; ?></td>
                        <td><?= $pd['nama_lengkap']; ?></td>
                        <td><?= $pd['jenis_kelamin']; ?></td>
                        <td><?= $pd['nik']; ?></td>
                        <td><?= $pd['created_at']; ?></td>
                        <td>
                          <a href="/cetak-perdim-dewasa/<?= $pd['id_perdim']; ?>"> <button type="button" class="btn btn-primary"><i class="bi bi-printer-fill"></i></button></a>
                        </td>
                    </tr>
                  </tbody>
                  <?php endforeach; ?>
              <?php else : ?>
                  <!-- <div class="justify-content-center text-center">
                    <img src="assets/img/Empty-Pana.png" alt="No Records Found" width="300">
                    <h4 class="text-center">No Records Found</h4>
                  </div> -->
              <?php endif; ?>
                </table>
          <!-- End Table with stripped rows -->

        </div>
      </div>

    </div>
  </div>
</section>

</main><!-- End #main -->
<?= $this->endSection(); ?>

