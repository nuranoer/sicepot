<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<link rel="icon" href="HTML/images/pemohon/logoimigrasi.png" type="image/gif">

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="HTML/css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="HTML/style.css" type="text/css" />
	<link rel="stylesheet" href="HTML/css/swiper.css" type="text/css" />
	<link rel="stylesheet" href="HTML/css/dark.css" type="text/css" />
	<link rel="stylesheet" href="HTML/css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="HTML/css/animate.css" type="text/css" />
	<link rel="stylesheet" href="HTML/css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="HTML/css/form.css" type="text/css" />
	<link rel="stylesheet" href="HTML/css/card.css" type="text/css" />

	<!-- Date & Time Picker CSS -->
	<link rel="stylesheet" href="HTML/css/components/datepicker.css" type="text/css" />
	<link rel="stylesheet" href="HTML/css/components/timepicker.css" type="text/css" />
	<link rel="stylesheet" href="HTML/css/components/daterangepicker.css" type="text/css" />

	<link rel="stylesheet" href="HTML/css/custom.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Document Title -->
	<title>SICEPOT</title>

</head>

<style>
	.hidden{
		display: none;
	}
	.show{
		display: block;
	}
</style>

<body class="stretched">

	<!-- Document Wrapper -->
	<div id="wrapper" class="clearfix">

		<!-- Navbar -->
		<header id="header" class="full-header transparent-header" data-sticky-class="not-dark">
			<div id="header-wrap">
				<div class="container">
					<div class="header-row">

						<!-- Logo -->
						<div id="logo">
							<a href="/" class="standard-logo" data-dark-logo="HTML/images/logoimigrasi.png"><img src="HTML/images/logoimigrasi.png" alt="Imigrasi"></a>
						</div>
						<!-- #logo end -->

						
						<div class="header-misc">
							<!-- Top Admin  -->
							<div class="header-misc-icon">
								<a href="/dashboardadmin">
									<i class="icon-user-tie"></i>
								</a>
							</div>
						</div>
						
						<div id="primary-menu-trigger">
							<svg class="svg-trigger" viewBox="0 0 100 100">
								<path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path>
								<path d="m 30,50 h 40"></path>
								<path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path>
							</svg>
						</div>
						
						<!-- <div style="font-size: 18px;"><strong>Kantor Imigrasi Kelas II Non TPI Kediri</strong></div> -->

						<!-- Primary Navigation -->
						<nav class="primary-menu">
							
							<ul class="menu-container">
								<li class="menu-item mega-menu mega-menu-small">
									<a class="menu-link" href="/">
										<div>Formulir</div>
									</a>
								</li>

							</ul>
							</li>
							</ul>
						</nav><!-- #primary-menu end -->

					</div>
				</div>
			</div>
			<div class="header-wrap-clone"></div>
		</header>
		<!-- #Navbar end -->

		<!-- Content -->
		<?= $this->renderSection('content'); ?>
		<!-- #content end -->

		<!-- Footer -->
		<footer id="footer" class="dark">
			<div class="container">
				<!-- Footer Widgets
						============================================= -->
				<div class="footer-widgets-wrap">
					<div class="row">
						<div class="col-lg-12">
							<div class="row">
								<div class="col-md-1">
									<img src="HTML/images/logo_kemenkumham.svg" alt="Logo Kemenkumham" class="footer-logo" width="100">
								</div>
								<div class="col-md-1">
									<div class="widget clearfix">
										<img src="HTML/images/logoimigrasi.png" alt="Logo Imigrasi" class="footer-logo" width="115" />
									</div>
								</div>
								<div class="col-md-5">
									<h4>Kementerian Hukum dan Hak Asasi Manusia RI <br>
									Kantor Imigrasi Kelas II Non TPI Kediri <br>
									<small>"Dedikasi Melayani Sepenuh Hati"</small>
									</h4>
								</div>
								<div class="col-md-5">
									<address>
										<strong>Alamat Kantor:</strong><br />
										Jl. Jawa No. 135, Bedrek Selatan, Desa Grogol, Kec. Grogol,
										<br> Kab. Kediri, Jawa Timur, 64151
									</address>
								</div>
								<!-- <div class="col-md-2">
									<abbr title="Phone Number"><strong>Phone:</strong></abbr>
									(0354) 688307<br />
									<abbr title="Email Address"><strong>Email:</strong></abbr>
									imigrasi.kediri@gmail.com
								</div> -->
							</div>
						</div>
					</div>
				</div>
				<!-- .footer-widgets-wrap end -->
			</div>
			<!-- Copyrights
				============================================= -->
			<div id="copyrights">
				<div class="container">
					<div class="row col-mb-30">
						<div class="col-md-6 text-center text-md-start pt-3">
							Copyrights &copy; Internship Imigrasi Kediri (2022)<br />
						</div>

						<div class="col-md-6 text-center text-md-end">
							<div class="d-flex justify-content-center justify-content-md-end">
								<!-- <a href="#" class="social-icon si-small si-borderless si-facebook">
									<i class="icon-facebook"></i>
									<i class="icon-facebook"></i>
								</a>

								<a href="#" class="social-icon si-small si-borderless si-twitter">
									<i class="icon-twitter"></i>
									<i class="icon-twitter"></i>
								</a> -->

								<!-- <a href="#" class="social-icon si-small si-borderless si-gplus">
									<i class="icon-gplus"></i>
									<i class="icon-gplus"></i>
								</a> -->

								<a href="https://kediri.imigrasi.go.id/" class="social-icon si-small si-borderless si-google">
									<i class="icon-google"></i>
									<i class="icon-google"></i>
								</a>

								<a href="https://www.instagram.com/imigrasi_kediri" class="social-icon si-small si-borderless si-instagram">
									<i class="icon-instagram"></i>
									<i class="icon-instagram"></i>
								</a>

								<a href="https://www.tiktok.com/@imigrasi_kediri?_t=8V8pjPtRRgn&_r=1" class="social-icon si-small si-borderless si-tiktok">
									<i class="icon-tiktok"></i>
									<i class="icon-tiktok"></i>
								</a>

								<a href="https://wa.me/6281133378284" class="social-icon si-small si-borderless si-whatsapp">
									<i class="icon-whatsapp"></i>
									<i class="icon-whatsapp"></i>
								</a>

								<a href="mailto:imigrasi.kediri@gmail.com" class="social-icon si-small si-borderless si-email3">
									<i class="icon-gmail"></i>
									<i class="icon-gmail"></i>
								</a>
							</div>

							<div class="clear"></div>

							<i class="icon-envelope2"></i> imigrasi.kediri@gmail.com
							<span class="middot">&middot;</span>
							<i class="icon-headphones"></i> (0354) 688307
							<span class="middot">&middot;</span>
						</div>
					</div>
				</div>
			</div>
			<!-- #copyrights end -->
		</footer>
		<!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- JavaScripts -->
	<script src="HTML/js/jquery.js"></script>
	<script src="HTML/js/plugins.min.js"></script>

	<script src="HTML/js/form.js"></script>

	<!-- Date & Time Picker JS -->
	<script src="HTML/js/components/moment.js"></script>
	<script src="HTML/js/components/timepicker.js"></script>
	<script src="HTML/js/components/datepicker.js"></script>
	<script src="HTML/js/datetime-format.js"></script>

	<!-- Include Date Range Picker -->
	<script src="HTML/js/components/daterangepicker.js"></script>

	<!-- Show and Hide Input Perdim -->
	<script src="HTML/js/show-hide-input.js"></script>

	<!-- Footer Scripts -->
	<script src="HTML/js/functions.js"></script>

</body>

</html>