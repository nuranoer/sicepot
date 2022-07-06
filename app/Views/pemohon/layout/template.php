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

	<link rel="stylesheet" href="HTML/css/custom.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Document Title
	============================================= -->
	<title>Si Cepot</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

        <!-- Navbar
		============================================= -->
            <header id="header" class="full-header transparent-header" data-sticky-class="not-dark">
                <div id="header-wrap">
                    <div class="container">
                        <div class="header-row">

                            <!-- Logo
                            ============================================= -->
                            <div id="logo">
                                <a href="/dashboard" class="standard-logo" data-dark-logo="HTML/images/logoimigrasi.png"><img src="HTML/images/logoimigrasi.png" alt="Imigrasi"></a>

                            </div><!-- #logo end -->

                            <div class="header-misc">
                                <!-- Top Admin
                                            ============================================= -->
                                <div class="header-misc-icon">
                                    <a href="/loginadmin">
                                        <i class="icon-user-tie"></i>
                                    </a>
                                </div>
                                <!-- #top-search end -->
                            </div>

                            <div id="primary-menu-trigger">
                                <svg class="svg-trigger" viewBox="0 0 100 100">
                                    <path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path>
                                    <path d="m 30,50 h 40"></path>
                                    <path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path>
                                </svg>
                            </div>

                            <!-- Primary Navigation
                            ============================================= -->
                            <nav class="primary-menu">

                                <ul class="menu-container">
                                    <li class="menu-item">
                                        <a class="menu-link" href="/dashboard">
                                            <div>Home</div>
                                        </a>

                                    <li class="menu-item mega-menu mega-menu-small">
                                        <a class="menu-link" href="#">
                                            <div>About</div>
                                        </a>
                                    </li>
                                    <li class="menu-item mega-menu mega-menu-small">
                                        <a class="menu-link" href="/praperdim">
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

		<!-- Content
		============================================= -->
		<?= $this->renderSection('content'); ?>
        <!-- #content end -->

		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">
			<div class="container">
				<!-- Footer Widgets
						============================================= -->
				<div class="footer-widgets-wrap">
					<div class="row col-mb-50">
						<div class="col-lg-8">
							<div class="row col-mb-50">
								<div class="col-md-4">
									<div class="widget clearfix">
									<img
										src="HTML/images/logoimigrasi.png"
										alt="Image"
										class="footer-logo"
										width="100"
									/>

									<p>
										We believe in <strong>Simple</strong>,
										<strong>Creative</strong> &amp;
										<strong>Flexible</strong> Design Standards.
									</p>

									<div
										style="
										background: url('images/world-map.png') no-repeat
											center center;
										background-size: 100%;
										"
									>
										<address>
										<strong>Headquarters:</strong><br />
										795 Folsom Ave, Suite 600<br />
										San Francisco, CA 94107<br />
										</address>
										<abbr title="Phone Number"
										><strong>Phone:</strong></abbr
										>
										(1) 8547 632521<br />
										<abbr title="Fax"><strong>Fax:</strong></abbr> (1) 11
										4752 1433<br />
										<abbr title="Email Address"
										><strong>Email:</strong></abbr
										>
										info@canvas.com
									</div>
									</div>
								</div>
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
					<div class="col-md-6 text-center text-md-start">
						Copyrights &copy; 2020 All Rights Reserved by Canvas Inc.<br />
						<div class="copyright-links">
						<a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a>
						</div>
					</div>

					<div class="col-md-6 text-center text-md-end">
						<div
						class="d-flex justify-content-center justify-content-md-end"
						>
						<a
							href="#"
							class="social-icon si-small si-borderless si-facebook"
						>
							<i class="icon-facebook"></i>
							<i class="icon-facebook"></i>
						</a>

						<a
							href="#"
							class="social-icon si-small si-borderless si-twitter"
						>
							<i class="icon-twitter"></i>
							<i class="icon-twitter"></i>
						</a>

						<a
							href="#"
							class="social-icon si-small si-borderless si-gplus"
						>
							<i class="icon-gplus"></i>
							<i class="icon-gplus"></i>
						</a>

						<a
							href="#"
							class="social-icon si-small si-borderless si-pinterest"
						>
							<i class="icon-pinterest"></i>
							<i class="icon-pinterest"></i>
						</a>

						<a
							href="#"
							class="social-icon si-small si-borderless si-vimeo"
						>
							<i class="icon-vimeo"></i>
							<i class="icon-vimeo"></i>
						</a>

						<a
							href="#"
							class="social-icon si-small si-borderless si-github"
						>
							<i class="icon-github"></i>
							<i class="icon-github"></i>
						</a>

						<a
							href="#"
							class="social-icon si-small si-borderless si-yahoo"
						>
							<i class="icon-yahoo"></i>
							<i class="icon-yahoo"></i>
						</a>

						<a
							href="#"
							class="social-icon si-small si-borderless si-linkedin"
						>
							<i class="icon-linkedin"></i>
							<i class="icon-linkedin"></i>
						</a>
						</div>

						<div class="clear"></div>

						<i class="icon-envelope2"></i> info@canvas.com
						<span class="middot">&middot;</span>
						<i class="icon-headphones"></i> +1-11-6541-6369
						<span class="middot">&middot;</span>
						<i class="icon-skype2"></i> CanvasOnSkype
					</div>
					</div>
				</div>
			</div>
			<!-- #copyrights end -->
		</footer>
		<!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- JavaScripts
	============================================= -->
	<script src="HTML/js/jquery.js"></script>
	<script src="HTML/js/plugins.min.js"></script>

	<script src="HTML/js/form.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="HTML/js/functions.js"></script>

</body>

</html>