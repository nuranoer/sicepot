<?= $this->extend('pemohon/layout/template'); ?>

<?= $this->section('content'); ?>
		<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<div class="row">
					<div class="col-1">
						<img src="HTML/images/login/logo.png" alt="Logo Redi Dinanti" width="100">
					</div>
					<div class="col-7">
						<h1>Formulir</h1>
						
					</div>
					<div class="col-4">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Formulir</li>
						</ol>
					</div>
				</div>
			</div>

		</section><!-- #page-title end -->

        		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div class="container clearfix">
					<div class="form-widget">
						<div class="form-process">
							<div class="css3-spinner">
									<div class="css3-spinner-scaler"></div>
							</div>
						</div>
						<div class="row checkout-form-billing">
							<div class="col-12">
								<h3>Silahkan Pilih</h3>
							</div>
						</div>

						<!-- Card -->
						<div class="row block-card-9 col-mb-50">
							<div class="col-md-6 min-vh-75">
								<div class="grid-inner rounded-3 h-100">
									<div class="grid-image lazy" data-bg="HTML/images/pemohon/card1.jpg"></div>
									<div class="bg-overlay">
										<div class="bg-overlay-content flex-column justify-content-between align-items-start p-5 dark">
											<div class="grid-icon">
												<img src="HTML/demos/business/images/icons/doc.svg" alt="Image" width="60">
											</div>
											<div class="grid-content">
												<h5 class="text-uppercase fw-medium font-body ls1 text-smaller op-07 mb-2">Pengajuan Paspor</h5>
												<h3 class="fw-medium h2">Dewasa</h3>
												<a href="/perdimdewasa" class="icon-stacked rounded-circle bg-white text-danger text-center mb-0 btn-hover h5"><i class="icon-line-arrow-right"></i></a>
											</div>
										</div>
										<div class="bg-overlay-bg" style="background: linear-gradient(to bottom, rgba(0,0,0,0.3) 0%, #0693e3 100%);"></div>
									</div>
								</div>
							</div>
							<div class="col-md-6 min-vh-75">
								<div class="grid-inner rounded-3 h-100">
									<div class="grid-image lazy" data-bg="HTML/images/pemohon/kid.jpg"></div>
									<div class="bg-overlay">
										<div class="bg-overlay-content flex-column justify-content-between align-items-start p-5 dark">
											<div class="grid-icon">
												<img src="HTML/demos/business/images/icons/doc.svg" alt="Image" width="60">
											</div>
											<div class="grid-content">
											<h5 class="text-uppercase fw-medium font-body ls1 text-smaller op-07 mb-2">Pengajuan Paspor</h5>
												<h3 class="fw-medium h2">Anak</h3>
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
			</div>
        </section>
		<!-- #content end -->

<?= $this->endSection(); ?>

