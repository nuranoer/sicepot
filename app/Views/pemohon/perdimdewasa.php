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
				<br>
				<h1>FORMULIR PEMOHON</h1>
				<!-- <span>Forms Widget</span> -->
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
			<?php if(session()->getFlashdata('success')) : ?>
				<div class="style-msg successmsg">
					<div class="sb-msg"><i class="icon-check"></i><strong>Success!</strong> <?= session()->getFlashdata('success'); ?></div>
				</div>
			<?php endif; ?>
			<form class="row" action="/createperdimdewasa" method="post">
				<?= csrf_field(); ?>
				<div class="form-process">
					<div class="css3-spinner">
						<div class="css3-spinner-scaler"></div>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="row">
						<div class="col-12 justify-content-center text-center text-uppercase">
							<h3>Data Pemohon</h3>
						</div>
						<div class="col-12 form-group">
							<label>Nama Lengkap:</label>
							<input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control required" value="" placeholder="">
						</div>
						<div class="col-12 form-group">
							<label>Jenis Kelamin:</label>
							<select class="form-select required" name="jenis_kelamin" id="jenis_kelamin">
								<option>-Pilih Jenis Kelamin-</option>
								<option value="Laki-Laki">Laki-Laki</option>
								<option value="Perempuan">Perempuan</option>
							</select>
						</div>
						<div class="col-12 form-group">
							<label>Jenis Permohonan Paspor:</label>
							<select class="form-select jenis_permohonan required" name="jenis_permohonan" id="jenis_permohonan">
								<option>-Pilih Jenis Permohonan Paspor Anda-</option>
								<option value="Baru">Baru</option>
								<option value="Penggantian">Penggantian</option>
							</select>
						</div>
						<div class="col-12 hidden form-group" id="alasan">
							<label>Alasan Penggantian:</label>
							<select class="form-select alasan_penggantian required" name="alasan_penggantian" id="alasan_penggantian">
								<option value="">-Pilih Alasan Penggantian Paspor Anda-</option>
								<option value="Habis Masa Berlaku">Habis Masa Berlaku</option>
								<option value="Halaman Penuh">Halaman Penuh</option>
							</select>
						</div>
						<div class="col-6 hidden form-group" id="seri_paspor">
							<label>No Seri Paspor:</label><br>
							<input type="text" name="no_seri" id="no_seri" class="form-control" value="" placeholder="">
						</div>
						<div class="col-6 hidden form-group" id="reg_paspor">
							<label>No Reg Paspor:</label><br>
							<input type="text" name="no_reg" id="no_reg" class="form-control" value="" placeholder="">
						</div>
						<div class="col-6 form-group">
							<label>Tempat Lahir:</label><br>
							<input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control required" value="" placeholder="">
						</div>
						<div class="col-6 form-group">
							<label>Tanggal Lahir:</label>
							<input type="text" value="" class="form-control required text-start component-datepicker format" name="tanggal_lahir" id="tanggal_lahir" placeholder="DD-MM-YYYY">
						</div>
						<div class="col-6 form-group">
							<label>NIK / No. KTP:</label><br>
							<input type="text" name="nik" id="nik" class="form-control required" value="" placeholder="">
						</div>
						<div class="col-6 form-group">
							<label>Tanggal Dikeluarkannya KTP:</label><br>
							<input type="text" value="" class="form-control required text-start component-datepicker format" name="tempat_output" id="tempat_output" placeholder="DD-MM-YYYY">
						</div>
						<div class="col-12 form-group">
							<label>Alamat:</label>
							<input type="text" name="alamat" id="alamat" class="form-control required" value="">
						</div>
						<div class="col-12 form-group">
							<label>No HP:</label>
							<input type="text" name="no_hp" id="no_hp" class="form-control required" value="">
						</div>
						<div class="col-6 form-group">
							<label>Nama Ibu:</label><br>
							<input type="text" name="nama_ibu" id="nama_ibu" class="form-control required" value="" placeholder="">
						</div>
						<div class="col-6 form-group">
							<label>Nama Ayah:</label><br>
							<input type="text" name="nama_ayah" id="nama_ayah" class="form-control required" value="" placeholder="">
						</div>
						<div class="col-6 form-group">
							<label>Tujuan Pengajuan Paspor:</label>
							<select class="form-select tujuan required" name="tujuan" id="tujuan">
								<option>-Pilih Tujuan Anda-</option>
								<option value="Wisata">Wisata</option>
								<option value="Kunjungan">Kunjungan</option>
								<option value="Belajar">Belajar</option>
								<option value="Umroh">Umroh</option>
								<option value="Bekerja Formal">Bekerja Formal</option>
							</select>
						</div>
						<div class="col-6 hidden form-group" id="endorse_nama">
							<label>Nama Kakek:</label><br>
							<input type="text" name="nama_kakek" id="nama_kakek" class="form-control" value="" placeholder="">
						</div>
						<div class="col-12 form-group">
							<label>Status Sipil:</label>
							<select class="form-select tujuan required" name="status_sipil" id="status_sipil">
								<option>-Pilih Status Sipil Anda-</option>
								<option value="Kawin">Kawin</option>
								<option value="Belum Kawin">Belum Kawin</option>
								<option value="Cerai Hidup">Cerai Hidup</option>
								<option value="Cerai Mati">Cerai Mati</option>
							</select>
						</div>
						<div class="col-12 form-group">
							<label>Pekerjaan:</label>
							<input type="text" name="pekerjaan" id="pekerjaan" class="form-control required" value="">
						</div>
					</div>
				</div>
				<div class="col-12 center">
					<button class="btn btn-secondary btn-lg" type="submit">Submit</button>
					<!-- <a class="btn btn-secondary btn-lg"></a> -->
					<!-- <input type="hidden" name="prefix" value="checkout-form-"> -->
				</div>
			</form>
		</div>
	</div>
</section>
<!-- #content end -->

<?= $this->endSection(); ?>