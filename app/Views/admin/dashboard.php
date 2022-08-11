<?= $this->extend('admin/layout/template'); ?>

<?= $this->section('content'); ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Selamat Datang Admin</h1>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">
            <!-- Customers Card -->
            <div class="col-xxl-12 col-xl-6">

              <div class="card info-card customers-card">

                <div class="card-body">
                  <h5 class="card-title"> Pemohon Dewasa <span>| Baru</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h5><strong><?= $total_dewasa_baru; ?> Pemohon</strong></h5>
                    </div>
                  </div>

                </div>
              </div>

            </div>
            <!-- End Customers Card -->

            <!-- Customers Card -->
            <div class="col-xxl-12 col-xl-6">

              <div class="card info-card customers-card">

                <div class="card-body">
                  <h5 class="card-title"> Pemohon Dewasa <span>| Pergantian</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h5><strong><?= $total_dewasa_penggantian; ?> Pemohon</strong></h5>
                    </div>
                  </div>

                </div>
              </div>

            </div>
            <!-- End Customers Card -->

            <!-- Customers Card -->
            <div class="col-xxl-12 col-xl-6">

              <div class="card info-card customers-card">

                <div class="card-body">
                  <h5 class="card-title"> Pemohon Anak <span>| Baru</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h5><strong><?= $total_anak_baru; ?> Pemohon</strong></h5>
                    </div>
                  </div>

                </div>
              </div>

            </div>
            <!-- End Customers Card -->

            <!-- Customers Card -->
            <div class="col-xxl-12 col-xl-6">

              <div class="card info-card customers-card">

                <div class="card-body">
                  <h5 class="card-title"> Pemohon Anak <span>| Pergantian</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h5><strong><?= $total_anak_penggantian; ?> Pemohon</strong></h5>
                    </div>
                  </div>

                </div>
              </div>

            </div>
            <!-- End Customers Card -->

          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">


        </div><!-- End Right side columns -->

      </div>
    </section>

  </main><!-- End #main -->
  <?= $this->endSection(); ?>

