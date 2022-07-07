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
                
              <tr>
              <th scope="row"><?= $no++; ?></th>
                <td><?= $pd['id_perdim']; ?></td>
                <td><?= $pd['nama_lengkap']; ?></td>
                <td><?= $pd['jenkel']; ?></td>
                <td><?= $pd['tempat_lahir']; ?></td>
                <td><?= $pd['tanggal_lahir']; ?></td>
                <td><?= $pd['nik']; ?></td>
                <td><?= $pd['tempat_output']; ?></td>
                <td><?= $pd['alamat']; ?></td>
                <td><?= $pd['no_hp']; ?></td>
                <td><?= $pd['nama_ibu']; ?></td>
                <td><?= $pd['nama_ayah']; ?></td>
                <td><?= $pd['nama_kakek']; ?></td>
                <td><?= $pd['pekerjaan']; ?></td>
                <td><?= $pd['status_sipil']; ?></td>
                <td><?= $pd['tujuan']; ?></td>
                <td><?= $pd['no_seri']; ?></td>
                <td><?= $pd['no_reg']; ?></td>
                <th>
                    <a href="<?= base_url('perdimdewasa/edit/') . $c['id_perdim'] ?>" class="btn btn-circle btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                    <a onclick="return confirm('Yakin ingin hapus?')" href="<?= base_url('perdimdewasa/delete/') . $c['id_perdim'] ?>" class="btn btn-circle btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                </th>
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

