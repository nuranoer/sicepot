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

						<div class="form-result"></div>

						<form class="row" id="checkout-form" action="include/form.php" method="post" enctype="multipart/form-data">
							<div class="form-process">
								<div class="css3-spinner">
									<div class="css3-spinner-scaler"></div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="row checkout-form-billing">
									<div class="col-12">
										<h3>Silahkan Pilih</h3>
									</div>
					<div class="row justify-content-center gutter-100 col-mb-150">

						<div class="col-md-4">
							<div class="card">
								<div class="card-body">
									<h4 class="card-title justify-content-center">Dewasa</h4>
									<a href="#" class="btn btn-primary">Form</a>
								</div>
							</div>
						</div>
                        <div class="col-md-4">
							<div class="card">
								<div class="card-body">
									<h4 class="card-title justify-content-center">Anak Anak</h4>
									<a href="#" class="btn btn-primary">Form</a>
								</div>
							</div>
						</div>
        </section>
		<!-- #content end -->

<?= $this->endSection(); ?>

