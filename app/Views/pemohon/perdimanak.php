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
				<h1>FORMULIR PEMOHON ANAK</h1>
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

			<?php if(session()->getFlashdata('error')) : ?>
				<div class="style-msg errormsg">
					<div class="sb-msg"><i class="icon-remove"></i>
						<strong>Data anda tidak valid!</strong>
						<?= session()->getFlashdata('error'); ?>
					</div>
				</div>
			<?php endif; ?>

			<form class="row" id="checkout-form" action="/createperdimanak" method="post" enctype="multipart/form-data">
				<?= csrf_field(); ?>
				<div class="form-process">
					<div class="css3-spinner">
						<div class="css3-spinner-scaler"></div>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="row checkout-form-billing">
						<div class="col-12 justify-content-center text-center text-uppercase">
							<h3>Data Pemohon</h3>
						</div>
						<div class="col-12 form-group">
							<label>Nama Lengkap Anak:</label>
							<input type="text" name="nama_anak" id="nama_anak" class="form-control <?= ($validation->hasError('nama_anak')) ? 'is-invalid' : '' ?>" value="" placeholder="">
						</div>
						<div class="col-12 form-group">
							<label>Jenis Kelamin Anak:</label>
							<select class="form-select <?= ($validation->hasError('jenis_kelamin')) ? 'is-invalid' : '' ?>" name="jenis_kelamin" id="jenis_kelamin">
								<option>-Pilih Jenis Kelamin-</option>
								<option value="Laki-Laki">Laki-Laki</option>
								<option value="Perempuan">Perempuan</option>
							</select>
						</div>
						<div class="col-12 form-group">
							<label>Jenis Permohonan Paspor:</label>
							<select class="form-select jenis_permohonan <?= ($validation->hasError('jenis_permohonan')) ? 'is-invalid' : '' ?>" name="jenis_permohonan" id="jenis_permohonan">
								<option>-Pilih Jenis Permohonan Paspor Anda-</option>
								<option value="Baru">Baru</option>
								<option value="Penggantian">Penggantian</option>
							</select>
						</div>
						<div class="col-12 hidden form-group" id="alasan">
							<label>Alasan Penggantian:</label>
							<select class="form-select alasan_penggantian required" name="alasan_penggantian" id="alasan_penggantian">
								<option>-Pilih Alasan Penggantian Paspor Anda-</option>
								<option value="Habis Masa Berlaku">Habis Masa Berlaku</option>
								<option value="Halaman Penuh">Halaman Penuh</option>
							</select>
						</div>
						<div class="col-6 hidden form-group" id="seri_paspor">
							<label>No Seri Paspor Anak:</label><br>
							<input type="text" name="no_paspor_anak" id="no_paspor_anak" class="form-control" value="" placeholder="">
						</div>
						<div class="col-6 hidden form-group" id="reg_paspor">
							<label>No Reg Paspor Anak:</label><br>
							<input type="text" name="no_reg_anak" id="no_reg_anak" class="form-control" value="" placeholder="">
						</div>
						<div class="col-12 form-group">
							<label>Tempat/Tanggal Lahir Anak:</label><br>
							<input type="text" name="ttl_anak" id="ttl_anak" class="form-control <?= ($validation->hasError('ttl_anak')) ? 'is-invalid' : '' ?>" value="" placeholder="Kediri, 01-01-2010">
						</div>
						<div class="col-4 form-group">
							<label>NIK / No. KIA:</label><br>
							<input type="text" name="nik" id="nik" class="form-control <?= ($validation->hasError('nik')) ? 'is-invalid' : '' ?>" value="" placeholder="">
							<div class="invalid-feedback">
								NIK harus terdiri dari 16 digit.
							</div>
						</div>
						<div class="col-4 form-group">
							<label>Tgl Diberikan:</label><br>
							<input type="text" name="tgl_berlaku_kia" id="tgl_berlaku_kia" class="form-control" value="" placeholder="01-12-2015">
						</div>
						<div class="col-4 form-group">
							<label>berlaku s/d:</label><br>
							<input type="text" name="rentang_tgl_kia" id="rentang_tgl_kia" class="form-control" value="" placeholder="">
						</div>
						<div class="col-6 form-group form-anak">
							<label>Alamat Anak:</label>
							<input type="text" name="alamat_anak" id="alamat_anak" class="form-control <?= ($validation->hasError('alamat_anak')) ? 'is-invalid' : '' ?>" value="">
							<!-- <label for="" id="anak-same-as-ortu" class="text-danger">
								<input type="checkbox" class="me-2" value="1"> 
								Alamat Anak Sama Dengan Alamat Orang Tua
							</label> -->
						</div>
						<div class="col-6 form-group">
							<label>Alamat Anak Sama Dengan Alamat Orang Tua:</label>
							<select class="form-select address_ortu required" name="address_ortu" id="address_ortu">
								<option value="Ya">Ya, sama</option>
								<option value="Tidak">Tidak sama</option>
							</select>
						</div>
						<div class="col-6 hidden form-group form-ortu" id="address_ibu">
							<label>Alamat Ibu:</label>
							<input type="text" name="alamat_ibu" id="alamat_ibu" class="form-control required" value="">
						</div>
						<div class="col-6 hidden form-group form-ortu" id="address_ayah">
							<label>Alamat Ayah:</label>
							<input type="text" name="alamat_ayah" id="alamat_ayah" class="form-control required" value="">
						</div>
						<div class="col-12 form-group">
							<label>No HP Ortu:</label>
							<input type="text" name="no_hp" id="no_hp" class="form-control <?= ($validation->hasError('no_hp')) ? 'is-invalid' : '' ?>" value="">
						</div>
						<div class="col-6 form-group">
							<label>Nama Ibu:</label><br>
							<input type="text" name="nama_ibu" id="nama_ibu" class="form-control" value="" placeholder="">
						</div>
						<div class="col-6 form-group">
							<label>Tempat/Tanggal Lahir Ibu:</label><br>
							<input type="text" name="ttl_ibu" id="ttl_ibu" class="form-control" value="" placeholder="Kediri, 03-03-1986">
						</div>
						
						<div class="col-4 form-group">
							<label>No. KTP Ibu:</label><br>
							<input type="text" name="no_ktp_ibu" id="no_ktp_ibu" class="form-control" value="" placeholder="">
						</div>
						<div class="col-4 form-group">
							<label>Tgl Diberikan KTP Ibu:</label><br>
							<input type="text" name="tgl_ktp_ibu" id="no_ktp_ibu" class="form-control" value="" placeholder="">
						</div>
						<div class="col-4 form-group">
							<label>Berlaku s/d:</label><br>
							<input type="text" name="rentang_ktp_ibu" id="rentang_ktp_ibu" class="form-control" value="" placeholder="">
						</div>
						<div class="col-12 form-group">
							<label>No. Paspor Ibu:</label><br>
							<input type="text" name="no_paspor_ibu" id="no_paspor_ibu" class="form-control" value="" placeholder="">
						</div>
						<div class="col-6 form-group">
							<label>Nama Ayah:</label><br>
							<input type="text" name="nama_ayah" id="nama_ayah" class="form-control" value="" placeholder="">
						</div>
						<div class="col-6 form-group">
							<label>Tempat/Tanggal Lahir Ayah:</label><br>
							<input type="text" name="ttl_ayah" id="ttl_ayah" class="form-control" value="" placeholder="Kediri, 02-02-1985">
						</div>
						
						<div class="col-4 form-group">
							<label>No. KTP Ayah:</label><br>
							<input type="text" name="no_ktp_ayah" id="no_ktp_ayah" class="form-control" value="" placeholder="">
						</div>
						<div class="col-4 form-group">
							<label>Tgl Diberikan KTP Ayah:</label><br>
							<input type="text" name="tgl_ktp_ayah" id="tgl_ktp_ayah" class="form-control required" value="" placeholder="">
						</div>
						<div class="col-4 form-group">
							<label>Berlaku s/d:</label><br>
							<input type="text" name="rentang_ktp_ayah" id="rentang_ktp_ayah" class="form-control" value="" placeholder="">
						</div>
						<div class="col-4 form-group">
							<label>No. Paspor Ayah:</label><br>
							<input type="text" name="no_paspor_ayah" id="no_paspor_ayah" class="form-control" value="" placeholder="">
						</div>
						<div class="col-4 form-group">
							<label>Tujuan Pengajuan Paspor:</label>
							<select class="form-select tujuan <?= ($validation->hasError('tujuan')) ? 'is-invalid' : '' ?>" name="tujuan" id="tujuan">
								<option>-Pilih Tujuan Anda-</option>
								<option value="Wisata">Wisata</option>
								<option value="Kunjungan">Kunjungan</option>
								<option value="Belajar">Belajar</option>
								<option value="Umroh">Umroh</option>
								<option value="Bekerja Formal">Bekerja Formal</option>
							</select>
						</div>
						<div class="col-4 hidden form-group" id="endorse_nama">
							<label>Nama Kakek:</label><br>
							<input type="text" name="nama_kakek" id="nama_kakek" class="form-control" value="" placeholder="">
						</div>
						<div class="col-6 form-group">
							<label>Negara Tujuan:</label><br>
							<input type="text" name="negara" id="negara" class="form-control <?= ($validation->hasError('negara')) ? 'is-invalid' : '' ?>" value="" placeholder="">
						</div>
						<div class="col-6 form-group">
							<label>Status Sipil:</label>
							<select class="form-select tujuan <?= ($validation->hasError('status_sipil')) ? 'is-invalid' : '' ?>" name="status_sipil" id="status_sipil">
								<option>-Pilih Status Sipil Anak-</option>
								<option value="Kawin">Kawin</option>
								<option value="Belum Kawin">Belum Kawin</option>
							</select>
						</div>
						<div class="col-12 form-group">
							<label>Pekerjaan:</label>
							<input type="text" name="pekerjaan" id="pekerjaan" class="form-control <?= ($validation->hasError('pekerjaan')) ? 'is-invalid' : '' ?>" value="">
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