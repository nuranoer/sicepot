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
	<link rel="stylesheet" href="HTML/css/dark.css" type="text/css" />
	<link rel="stylesheet" href="HTML/css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="HTML/css/animate.css" type="text/css" />
	<link rel="stylesheet" href="HTML/css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="HTML/css/custom.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Document Title
	============================================= -->
	<title>Login</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap py-0">
				<div class="section p-0 m-0 h-100 position-absolute" style="background: url('HTML/images/login/imigrasi1.jpg') center center no-repeat; background-size: cover;"></div>
					<div class="section bg-transparent min-vh-100 p-0 m-0">
						<div class="vertical-middle">
							<div class="container-fluid py-5 mx-auto">
								<div class="card mx-auto rounded-0 border-0" style="max-width: 380px; background-color: rgba(255,255,255,0.93);">
									<div class="card-body" style="padding: 28px;">
									
									<form action="<?= route_to('login') ?>" method="post">
										<?= csrf_field() ?>
										<div class="center">
											<a href="/loginadmin"><img src="HTML/images/login/logo.png" alt="Imigrasi Logo" width="130"></a>
											<h4>Imigrasi Kediri</h4>
										</div>  

										<?php if ($config->validFields === ['email']): ?>
										<div class="form-group">
											<label for="login">Email</label>
											<input type="email" class="form-control <?php if(session('errors.login')) : ?>is-invalid<?php endif ?>"
												name="login" placeholder="<?=lang('Auth.email')?>">
											<div class="invalid-feedback">
												<?= session('errors.login') ?>
											</div>
										</div>
										<?php else: ?>
										<div class="form-group">
											<label for="login">NIP:</label>
											<input type="text" class="form-control <?php if(session('errors.login')) : ?>is-invalid<?php endif ?>"
												name="login" placeholder="<?=lang('Auth.emailOrUsername')?>">
											<div class="invalid-feedback">
												<?= session('errors.login') ?>
											</div>
										</div>
										<?php endif; ?>

										<div class="form-group">
											<label for="password">Password</label>
											<input type="password" name="password" class="form-control  <?php if(session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.password')?>">
											<div class="invalid-feedback">
												<?= session('errors.password') ?>
											</div>
										</div>

										<?php if ($config->allowRemembering): ?>
										<div class="form-check">
											<label class="form-check-label">
												<input type="checkbox" name="remember" class="form-check-input" <?php if(old('remember')) : ?> checked <?php endif ?>>
												<?=lang('Auth.rememberMe')?>
											</label>
										</div>
										<?php endif; ?>
										
										<div class="col-12 justify-content-center text-center">
											<button type="submit" class="btn btn-dark justify-content-center text-center"><?=lang('Auth.loginAction')?></button>
										</div>
									</form>
									
									<!-- <form id="login-form" name="login-form" class="mb-0" action="#" method="post">
											<div class="center">
												<a href="/loginadmin"><img src="HTML/images/login/logo.png" alt="Imigrasi Logo" width="140"></a>
												<h4>Imigrasi Kediri</h4>
											</div>        
											<div class="row">
												<div class="col-12 form-group">
													<label for="login-form-nip">NIP:</label>
													<input type="text" id="login-form-nip" name="login-form-nip" value="" class="form-control not-dark" />
												</div>

												<div class="col-12 form-group">
													<label for="login-form-password">Password:</label>
													<input type="password" id="login-form-password" name="login-form-password" value="" class="form-control not-dark" />
												</div>

												<div class="col-12 form-group justify-content-center text-center">
													<a href="/dashboardadmin" class="button button-3d button-black m-0" id="login-form-submit" name="login-form-submit" value="login">Login</a>
												</div>
											</div>
									</form> -->
									</div>
								</div>
								<div class="text-center dark mt-2">
									<small>Copyrights &copy; Kantor Imigrasi Kelas II Non TPI Kediri</small>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section><!-- #content end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- JavaScripts
	============================================= -->
	<script src="HTML/js/jquery.js"></script>
	<script src="HTML/js/plugins.min.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="HTML/js/functions.js"></script>

</body>
</html>