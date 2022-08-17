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
			<div class="style-msg alertmsg">
				<div class="sb-msg"><i class="icon-warning-sign"></i><strong>Perhatian!</strong> Mohon mengisi data dengan menggunakan huruf balok atau huruf besar! Klik <strong>Caps Lock</strong> pada keyboard untuk mengaktifkan huruf besar!</div>
			</div>
			
			<?php if(session()->getFlashdata('error')) : ?>
				<div class="style-msg errormsg">
					<div class="sb-msg"><i class="icon-remove"></i>
						<strong>Data anda tidak valid!</strong>
						<?= session()->getFlashdata('error'); ?>
					</div>
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
							<label>Nama Lengkap: <span class="text-danger">*</span></label>
							<input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control <?= ($validation->hasError('nama_lengkap')) ? 'is-invalid' : '' ?>" value="<?= old('nama_lengkap');?>" placeholder="e.g: AHMAD JAMAL">
						</div>
						<div class="col-12 form-group">
							<label>Jenis Kelamin: <span class="text-danger">*</span></label>
							<select class="form-select <?= ($validation->hasError('jenis_kelamin')) ? 'is-invalid' : '' ?>" name="jenis_kelamin" id="jenis_kelamin">
								<option>-Pilih Jenis Kelamin-</option>
								<option value="Laki-Laki">Laki-Laki</option>
								<option value="Perempuan">Perempuan</option>
							</select>
						</div>
						<div class="col-12 form-group">
							<label>Jenis Permohonan Paspor: <span class="text-danger">*</span></label>
							<select class="form-select jenis_permohonan <?= ($validation->hasError('jenis_permohonan')) ? 'is-invalid' : '' ?>" name="jenis_permohonan" id="jenis_permohonan">
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
							<input type="text" name="no_seri" id="no_seri" class="form-control" value="<?= old('no_seri');?>" placeholder="">
						</div>
						<div class="col-6 hidden form-group" id="reg_paspor">
							<label>No Reg Paspor:</label><br>
							<input type="text" name="no_reg" id="no_reg" class="form-control" value="<?= old('no_reg');?>" placeholder="">
						</div>
						<div class="col-6 form-group">
							<label>Tempat Lahir: <span class="text-danger">*</span></label><br>
							<input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control <?= ($validation->hasError('tempat_lahir')) ? 'is-invalid' : '' ?>" value="<?= old('tempat_lahir');?>" placeholder="e.g: KEDIRI">
						</div>
						<div class="col-6 form-group">
							<label>Tanggal Lahir: <span class="text-danger">*</span></label>
							<input type="text" value="<?= old('tanggal_lahir');?>" class="form-control <?= ($validation->hasError('tanggal_lahir')) ? 'is-invalid' : '' ?> text-start component-datepicker format" name="tanggal_lahir" id="tanggal_lahir" placeholder="DD-MM-YYYY">
						</div>
						<div class="col-6 form-group">
							<label>NIK / No. KTP: <span class="text-danger">*</span></label><br>
							<input type="text" name="nik" id="nik" class="form-control <?= ($validation->hasError('nik')) ? 'is-invalid' : '' ?>" value="<?= old('nik');?>" placeholder="Masukkan 16 digit NIK anda">
						</div>
						<div class="col-6 form-group">
							<label>Tempat Dikeluarkan KTP: <span class="text-danger">*</span></label><br>
							<input type="text" value="<?= old('tempat_output');?>" class="form-control <?= ($validation->hasError('tempat_output')) ? 'is-invalid' : '' ?>" name="tempat_output" id="tempat_output" placeholder="e.g: KEDIRI">
						</div>
						<div class="col-12 form-group">
							<label>Alamat: <small>(tanpa koma)</small><span class="text-danger">*</span></label>
							<input type="text" name="alamat" id="alamat" class="form-control <?= ($validation->hasError('alamat')) ? 'is-invalid' : '' ?>" value="<?= old('alamat');?>" placeholder="e.g: GRINGGING KEDIRI">
						</div>
						<div class="col-12 form-group">
							<label>No HP: <span class="text-danger">*</span></label>
							<input type="text" name="no_hp" id="no_hp" class="form-control <?= ($validation->hasError('no_hp')) ? 'is-invalid' : '' ?>" placeholder="Max 13 digit" value="<?= old('no_hp');?>">
						</div>
						<div class="col-6 form-group">
							<label>Nama Ibu: <span class="text-danger">*</span></label><br>
							<input type="text" name="nama_ibu" id="nama_ibu" class="form-control" value="<?= old('nama_ibu');?>" placeholder="e.g: ANISA">
						</div>
						<div class="col-6 form-group">
							<label>Nama Ayah: <span class="text-danger">*</span></label><br>
							<input type="text" name="nama_ayah" id="nama_ayah" class="form-control" value="<?= old('nama_ayah');?>" placeholder="e.g: MUHAMMAD">
						</div>
						<div class="col-4 form-group">
							<label>Tujuan Pengajuan Paspor: <span class="text-danger">*</span></label>
							<select class="form-select tujuan <?= ($validation->hasError('tujuan')) ? 'is-invalid' : '' ?>" name="tujuan" id="tujuan">
								<option>-Pilih Tujuan Anda-</option>
								<option value="Bekerja">Bekerja</option>
								<option value="Belajar">Belajar</option>
								<option value="Berobat">Berobat</option>
								<option value="Haji">Haji</option>
								<option value="Kunjungan">Kunjungan</option>
								<option value="Umroh">Umroh</option>
								<option value="Wisata">Wisata</option>
							</select>
						</div>
						<div class="col-4 form-group">
							<label>Ingin Tambah (Endorse) Nama? <span class="text-danger">*</span></label>
							<select class="form-select endorse" name="endorse" id="endorse">
								<option>-Pilihan Anda-</option>
								<option value="Ya">Ya</option>
								<option value="Tidak">Tidak</option>
							</select>
						</div>
						<div class="col-4 hidden form-group" id="endorse_nama">
							<label>Nama Kakek:</label><br>
							<input type="text" name="nama_kakek" id="nama_kakek" class="form-control" value="<?= old('nama_kakek');?>" placeholder="">
						</div>
						<div class="col-12 form-group">
							<label>Status Sipil: <span class="text-danger">*</span></label>
							<select class="form-select tujuan <?= ($validation->hasError('status_sipil')) ? 'is-invalid' : '' ?>" name="status_sipil" id="status_sipil">
								<option>-Pilih Status Sipil Anda-</option>
								<option value="Kawin">Kawin</option>
								<option value="Belum Kawin">Belum Kawin</option>
								<option value="Cerai Hidup">Cerai Hidup</option>
								<option value="Cerai Mati">Cerai Mati</option>
							</select>
						</div>
						<div class="col-12 form-group">
							<label>Pekerjaan: <span class="text-danger">*</span></label>
							<input type="text" name="pekerjaan" id="pekerjaan" class="form-control <?= ($validation->hasError('pekerjaan')) ? 'is-invalid' : '' ?>" value="<?= old('pekerjaan');?>" placeholder="e.g: PNS">
						</div>
					</div>
				</div>
				<div class="col-12 center">
					<button class="btn btn-secondary btn-lg" href="/cetak-perdim-dewasa" type="submit">Submit</button>
					<!-- <a class="btn btn-secondary btn-lg"></a> -->
					<!-- <input type="hidden" name="prefix" value="checkout-form-"> -->
				</div>
			</form>
		</div>
	</div>
</section>
<!-- #content end -->

<?= $this->endSection(); ?>