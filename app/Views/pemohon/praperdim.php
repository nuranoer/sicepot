<?= $this->extend('pemohon/layout/template'); ?>

<?= $this->section('content'); ?>
		<!-- Page Title -->
		<section id="page-title">
			<div class="container clearfix">
				<div class="row">
					<!-- <div class="col-3 text-center">
						<img src="HTML/images/login/logo_si_cepot.png" alt="Logo Redi Dinanti" width="200">
					</div> -->
					<div class="col pt-2">
						<h1>Formulir</h1>
					</div>
				</div>
			</div>
		</section>
		<!-- #page-title end -->

        <!-- Content -->
		<section id="content">
			<div class="content-wrap2">
				<div class="container clearfix">
					<div class="form-widget">
						<div class="form-process">
							<div class="css3-spinner">
									<div class="css3-spinner-scaler"></div>
							</div>
						</div>
						<br>
						<div class="row checkout-form-billing">
							<div class="col-12">
								<h3>Silahkan Pilih</h3>
							</div>
						</div>

						<!-- Card -->
						<div class="row block-card-9 col-mb-50">
							<div class="col-md-6 min-vh-75">
								<div class="grid-inner rounded-3 h-100">
									<div class="grid-image lazy" data-bg="HTML/images/pemohon/adult2.jpg"></div>
									<div class="bg-overlay">
										<div class="bg-overlay-content flex-column justify-content-between align-items-start p-5 dark">
											<div class="grid-icon">
												<img src="HTML/images/demos/doc.svg" alt="Image" width="60">
											</div>
											<div class="grid-content">
												<h5 class="text-uppercase fw-medium font-body ls1 text-smaller op-07 mb-2">Pengajuan Paspor</h5>
												<h3 class="fw-medium h2">Dewasa</h3><small><i>( sudah punya KTP )</i></small>
												<a href="/perdimdewasa" class="icon-stacked rounded-circle bg-white text-danger text-center mb-0 btn-hover h5"><i class="icon-line-arrow-right"></i></a>
											</div>
										</div>
										<div class="bg-overlay-bg" style="background: linear-gradient(to bottom, rgba(0,0,0,0.3) 0%, #0693e3 100%);"></div>
									</div>
								</div>
							</div>
							<div class="col-md-6 min-vh-75">
								<div class="grid-inner rounded-3 h-100">
									<div class="grid-image lazy" data-bg="HTML/images/pemohon/kids.jpg"></div>
									<div class="bg-overlay">
										<div class="bg-overlay-content flex-column justify-content-between align-items-start p-5 dark">
											<div class="grid-icon">
												<img src="HTML/images/demos/doc.svg" alt="Image" width="60">
											</div>
											<div class="grid-content">
											<h5 class="text-uppercase fw-medium font-body ls1 text-smaller op-07 mb-2">Pengajuan Paspor</h5>
												<h3 class="fw-medium h2">Anak</h3><small><i>( < 17 Tahun )</i></small>
												<a href="/perdimanak" class="icon-stacked rounded-circle bg-white text-center mb-0 btn-hover h5" style="color: brown"><i class="icon-line-arrow-right"></i></a>
											</div>
										</div>
										<div class="bg-overlay-bg" style="background: linear-gradient(to bottom, rgba(0,0,0,0.3) 0%, #fcb900 100%);"></div>
									</div>
								</div>
							</div>
						</div>
						<!-- Card End -->

					</div>
				</div>

				<br><br>
				
				<div class="section my-0">
					<div class="container">
						<div class="row">

							<div class="col-lg-4">
								<i class="i-plain color i-large icon-line2-screen-desktop inline-block" style="margin-bottom: 15px;"></i>
								<div class="heading-block border-bottom-0" style="margin-bottom: 15px;">
									<span class="before-heading">Kantor Imigrasi Kelas II Non-TPI Kediri</span>
									<h4>menarik</h4>
								</div>
								<p>Website SI CEPOT dapat diakses di desktop dengan tampilan yang sangat menarik</p>
							</div>

							<div class="col-lg-4">
								<i class="i-plain color i-large icon-line2-energy inline-block" style="margin-bottom: 15px;"></i>
								<div class="heading-block border-bottom-0" style="margin-bottom: 15px;">
									<span class="before-heading">Kantor Imigrasi Kelas II Non-TPI Kediri</span>
									<h4>Cepat & Mudah</h4>
								</div>
								<p>Website SI CEPOT bisa diakses dan diisi oleh pemohon itu sendiri dan prosesnya sangat praktis</p>
							</div>

							<div class="col-lg-4">
								<i class="i-plain color i-large icon-line2-equalizer inline-block" style="margin-bottom: 15px;"></i>
								<div class="heading-block border-bottom-0" style="margin-bottom: 15px;">
									<span class="before-heading">Kantor Imigrasi Kelas II Non-TPI Kediri</span>
									<h4>Praktis</h4>
								</div>
								<p>Bisa diakses dimanapun, hanya satu kali klik, pemohon bisa langsung menikmati fiturnya</p>
							</div>

						</div>
					</div>
				</div>
			</div>
        </section>
		<!-- #content end -->

<?= $this->endSection(); ?>

