<?= $this->extend('pemohon/layout/template'); ?>

<?= $this->section('content'); ?>

<?= $this->include('pemohon/layout/jumbotron'); ?>

<section id="content">
	<div class="content-wrap">
		<div class="container">
			<div class="row align-items-center">

				<div class="col-lg-5">
					<div class="heading-block">
						<h1>Welcome to <br>Kantor Imigrasi Kelas II Non TPI Kediri</h1>
					</div>
					<p class="lead">Create a website that you are gonna be proud of. Be it Business, Portfolio, Agency, Photography, eCommerce &amp; much more.</p>
				</div>

				<div class="col-lg-7 align-self-end">

					<div class="position-relative overflow-hidden">
						<img src="HTML/images/services/main-fbrowser.png" data-animate="fadeInUp" data-delay="100" alt="Chrome">
						<img src="HTML/images/services/main-fmobile.png" style="top: 0; left: 0; min-width: 100%; min-height: 100%;" data-animate="fadeInUp" data-delay="400" alt="iPhone" class="position-absolute">
					</div>

				</div>

			</div>
		</div>

		<div class="section my-0">
			<div class="container">

				<div class="row mt-4 col-mb-50">

					<div class="col-lg-4">
						<i class="i-plain color i-large icon-line2-screen-desktop inline-block" style="margin-bottom: 15px;"></i>
						<div class="heading-block border-bottom-0" style="margin-bottom: 15px;">
							<span class="before-heading">Kantor Imigrasi Kelas II Non-TPI Kediri</span>
							<h4>Responsive</h4>
						</div>
						<p>Website Si Cepot dapat diakses di Web Browser Laptop maupun Handphone</p>
					</div>

					<div class="col-lg-4">
						<i class="i-plain color i-large icon-line2-energy inline-block" style="margin-bottom: 15px;"></i>
						<div class="heading-block border-bottom-0" style="margin-bottom: 15px;">
							<span class="before-heading">Kantor Imigrasi Kelas II Non-TPI Kediri</span>
							<h4>Cepat & Mudah</h4>
						</div>
						<p>Website si cepot bisa diakses dan diisi oleh pemohon itu sendiri dan proses nya sangat praktis</p>
					</div>

					<div class="col-lg-4">
						<i class="i-plain color i-large icon-line2-equalizer inline-block" style="margin-bottom: 15px;"></i>
						<div class="heading-block border-bottom-0" style="margin-bottom: 15px;">
							<span class="before-heading">Kantor Imigrasi Kelas II Non-TPI Kediri</span>
							<h4>Praktis</h4>
						</div>
						<p>Bisa diakses dimanapun, hanya satu kali klik, pemohon bisa langsung dapat menikmati fiturnya</p>
					</div>

				</div>

			</div>
		</div>

		<div class="container clearfix">

			<div class="heading-block topmargin-lg center">
				<h2>Fitur Website Si Cepot</h2>
			</div>

			<div class="row col-mb-50 mb-4">
				<div class="col-lg-4 col-md-6">

					<div class="feature-box flex-md-row-reverse text-md-end" data-animate="fadeIn">
						<div class="fbox-icon">
							<a href="#"><i class="icon-line-heart"></i></a>
						</div>
						<div class="fbox-content">
							<h3>Dashboard</h3>
							<p>Halaman Utama yang berisi informasi Website Si Cepot</p>
						</div>
					</div>

					<div class="feature-box flex-md-row-reverse text-md-end mt-5" data-animate="fadeIn" data-delay="200">
						<div class="fbox-icon">
							<a href="#"><i class="icon-line-paper"></i></a>
						</div>
						<div class="fbox-content">
						<h3>Form Perdim Pemohon Anak Anak</h3>
							<p>Form Perdim yang diperuntukkan umur 17 tahun ke bawah yang belum memiliki KTP pribadi dan harus didampingi orang tua</p>
						</div>
					</div>
				</div>

				<div class="col-lg-4 d-md-none d-lg-block text-center">
					<img src="HTML/images/services/iphone7.png" alt="iphone 2">
				</div>

				<div class="col-lg-4 col-md-6">

					<div class="feature-box" data-animate="fadeIn">
						<div class="fbox-icon">
							<a href="#"><i class="icon-line-power"></i></a>
						</div>
						<div class="fbox-content">
						<h3>Form Perdim Pemohon Dewasa</h3>
							<p>Form Perdim yang diperuntukkan umur 17 tahun ke atas yang sudah memiliki KTP pribadi</p>
						</div>
					</div>

					<div class="feature-box mt-5" data-animate="fadeIn" data-delay="200">
						<div class="fbox-icon">
							<a href="#"><i class="icon-line-check"></i></a>
						</div>
						<div class="fbox-content">
							<h3>Cetak Perdim</h3>
							<p>Pemohon dapat mencetak secara mandiri perdim yang telah diinputkan</p>
						</div>
					</div>
				</div>
			</div>

		</div>
		</div>
</section>

<?= $this->endSection(); ?>