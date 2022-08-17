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
							<h3>Data Pemohon Anak</h3>
						</div>
						<div class="col-12 form-group">
							<label>Nama Lengkap Anak: <span class="text-danger">*</span></label>
							<input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control <?= ($validation->hasError('nama_lengkap')) ? 'is-invalid' : '' ?> required" value="<?= old('nama_lengkap');?>" placeholder="e.g: DEA ANANDA">
						</div>
						<div class="col-12 form-group">
							<label>Jenis Kelamin Anak: <span class="text-danger">*</span></label>
							<select class="form-select <?= ($validation->hasError('jenis_kelamin')) ? 'is-invalid' : '' ?> required" name="jenis_kelamin" id="jenis_kelamin">
								<option>-PILIH JENIS KELAMIN-</option>
								<option value="Laki-Laki">Laki-Laki</option>
								<option value="Perempuan">Perempuan</option>
							</select>
						</div>
						<div class="col-12 form-group">
							<label>Jenis Permohonan Paspor: <span class="text-danger">*</span></label>
							<select class="form-select jenis_permohonan <?= ($validation->hasError('jenis_permohonan')) ? 'is-invalid' : '' ?> required" name="jenis_permohonan" id="jenis_permohonan">
								<option>-PILIH JENIS PERMOHONAN PASPOR ANDA-</option>
								<option value="Baru">Baru</option>
								<option value="Penggantian">Penggantian</option>
							</select>
						</div>
						<div class="col-12 hidden form-group" id="alasan">
							<label>Alasan Penggantian:</label>
							<select class="form-select alasan_penggantian required" name="alasan_penggantian" id="alasan_penggantian">
								<option value="">-PILIH ALASAN PENGGANTIAN PASPOR ANDA-</option>
								<option value="Habis Masa Berlaku">Habis Masa Berlaku</option>
								<option value="Halaman Penuh">Halaman Penuh</option>
							</select>
						</div>
						<div class="col-6 hidden form-group" id="seri_paspor">
							<label>No Seri Paspor Anak:</label><br>
							<input type="text" name="no_seri" id="no_seri" class="form-control" value="<?= old('no_seri');?>" placeholder="">
						</div>
						<div class="col-6 hidden form-group" id="reg_paspor">
							<label>No Reg Paspor Anak:</label><br>
							<input type="text" name="no_reg" id="no_reg" class="form-control" value="<?= old('no_reg');?>" placeholder="">
						</div>
						<div class="col-6 form-group">
							<label>Tempat Lahir Anak: <span class="text-danger">*</span></label><br>
							<input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control required <?= ($validation->hasError('tempat_lahir')) ? 'is-invalid' : '' ?>" value="<?= old('tempat_lahir');?>" placeholder="e.g: KEDIRI">
						</div>
						<div class="col-6 form-group">
							<label>Tanggal Lahir Anak: <span class="text-danger">*</span></label>
							<input type="text" value="<?= old('tanggal_lahir');?>" class="form-control required <?= ($validation->hasError('tanggal_lahir')) ? 'is-invalid' : '' ?> text-start component-datepicker format" name="tanggal_lahir" id="tanggal_lahir" placeholder="DD-MM-YYYY">
						</div>
						<div class="col-4 form-group">
							<label>NIK / No. KIA: <span class="text-danger">*</span></label><br>
							<input type="text" name="nik" id="nik" class="form-control required <?= ($validation->hasError('nik')) ? 'is-invalid' : '' ?>" value="<?= old('nik');?>" placeholder="Masukkan 16 digit NIK anak">
							<div class="invalid-feedback">
								NIK harus terdiri dari 16 digit.
							</div>
						</div>
						<div class="col-4 form-group">
							<label>Tgl Diberikan:</label><br>
							<input type="text" name="tempat_output" id="tempat_output" class="form-control text-start component-datepicker format" value="<?= old('tempat_output');?>" placeholder="e.g: 01-12-2012">
						</div>
						<div class="col-4 form-group">
							<label>berlaku s/d:</label><br>
							<input type="text" name="rentang_tgl_kia" id="rentang_tgl_kia" class="form-control" value="<?= old('rentang_tgl_kia');?>" placeholder="">
						</div>
						<div class="col-6 form-group form-anak">
							<label>Alamat Anak: <span class="text-danger">*</span></label>
							<input type="text" name="alamat" id="alamat" class="form-control required <?= ($validation->hasError('alamat')) ? 'is-invalid' : '' ?>" value="<?= old('alamat');?>" placeholder="e.g: GRINGGING KEDIRI">
						</div>
						<div class="col-6 form-group">
							<label>Alamat Anak Sama Dengan Alamat Orang Tua: <span class="text-danger">*</span></label>
							<select class="form-select address_ortu required" name="address_ortu" id="address_ortu">
								<option value="Ya">Ya, sama</option>
								<option value="Tidak">Tidak sama</option>
							</select>
						</div>
						<div class="col-6 hidden form-group form-ortu" id="address_ibu">
							<label>Alamat Ibu:</label>
							<input type="text" name="alamat_ibu" id="alamat_ibu" class="form-control required" value="<?= old('alamat_ibu');?>" placeholder="e.g: GRINGGING KEDIRI">
						</div>
						<div class="col-6 hidden form-group form-ortu" id="address_ayah">
							<label>Alamat Ayah:</label>
							<input type="text" name="alamat_ayah" id="alamat_ayah" class="form-control required" value="<?= old('alamat_ayah');?>" placeholder="e.g: GRINGGING KEDIRI">
						</div>
						<div class="col-12 form-group">
							<label>No HP Ortu: <small>(salah satu)</small> <span class="text-danger">*</span></label>
							<input type="text" name="no_hp" id="no_hp" class="form-control required <?= ($validation->hasError('no_hp')) ? 'is-invalid' : '' ?>" placeholder="Max 13 digit" value="<?= old('no_hp');?>">
						</div>
						<div class="col-6 form-group">
							<label>Nama Ibu:</label><br>
							<input type="text" name="nama_ibu" id="nama_ibu" class="form-control" value="<?= old('nama_ibu');?>" placeholder="e.g: DEWI SARI">
						</div>
						<div class="col-6 form-group">
							<label>Tempat/Tanggal Lahir Ibu:</label><br>
							<input type="text" name="ttl_ibu" id="ttl_ibu" class="form-control" value="<?= old('ttl_ibu');?>" placeholder="KEDIRI, 03-12-1986">
						</div>
						
						<div class="col-4 form-group">
							<label>No. KTP Ibu:</label><br>
							<input type="text" name="no_ktp_ibu" id="no_ktp_ibu" class="form-control" value="<?= old('no_ktp_ibu');?>" placeholder="16 DIGIT NO KTP">
						</div>
						<div class="col-4 form-group">
							<label>Tgl Diberikan KTP Ibu:</label><br>
							<input type="text" name="tgl_ktp_ibu" id="tgl_ktp_ibu" class="form-control text-start component-datepicker format" value="<?= old('tgl_ktp_ibu');?>" placeholder="DD-MM-YYYY">
						</div>
						<div class="col-4 form-group">
							<label>Berlaku s/d:</label><br>
							<input type="text" name="rentang_ktp_ibu" id="rentang_ktp_ibu" class="form-control" value="<?= old('rentang_ktp_ibu');?>" placeholder="">
						</div>
						<div class="col-4 form-group">
							<label>No. Paspor Ibu:</label><br>
							<input type="text" name="no_paspor_ibu" id="no_paspor_ibu" class="form-control" value="<?= old('no_paspor_ibu');?>" placeholder="">
						</div>
						<div class="col-4 form-group">
							<label>Tgl Diberikan Paspor Ibu:</label><br>
							<input type="text" name="tgl_paspor_ibu" id="tgl_paspor_ibu" class="form-control text-start component-datepicker format" value="<?= old('tgl_paspor_ibu');?>" placeholder="DD-MM-YYYY">
						</div>
						<div class="col-4 form-group">
							<label>Berlaku s/d:</label><br>
							<input type="text" name="rentang_paspor_ibu" id="rentang_paspor_ibu" class="form-control text-start component-datepicker format" value="<?= old('rentang_paspor_ibu');?>" placeholder="DD-MM-YYYY">
						</div>
						<div class="col-6 form-group">
							<label>Nama Ayah:</label><br>
							<input type="text" name="nama_ayah" id="nama_ayah" class="form-control" value="<?= old('nama_ayah');?>" placeholder="e.g: MURSIDI">
						</div>
						<div class="col-6 form-group">
							<label>Tempat/Tanggal Lahir Ayah:</label><br>
							<input type="text" name="ttl_ayah" id="ttl_ayah" class="form-control" value="<?= old('ttl_ayah');?>" placeholder="KEDIRI, 02-02-1985">
						</div>
						
						<div class="col-4 form-group">
							<label>No. KTP Ayah:</label><br>
							<input type="text" name="no_ktp_ayah" id="no_ktp_ayah" class="form-control" value="<?= old('no_ktp_ayah');?>" placeholder="16 DIGIT NO KTP">
						</div>
						<div class="col-4 form-group">
							<label>Tgl Diberikan KTP Ayah:</label><br>
							<input type="text" name="tgl_ktp_ayah" id="tgl_ktp_ayah" class="form-control text-start component-datepicker format" value="<?= old('tgl_ktp_ayah');?>" placeholder="DD-MM-YYYY">
						</div>
						<div class="col-4 form-group">
							<label>Berlaku s/d:</label><br>
							<input type="text" name="rentang_ktp_ayah" id="rentang_ktp_ayah" class="form-control" value="<?= old('rentang_ktp_ayah');?>" placeholder="">
						</div>
						<div class="col-4 form-group">
							<label>No. Paspor Ayah:</label><br>
							<input type="text" name="no_paspor_ayah" id="no_paspor_ayah" class="form-control" value="<?= old('no_paspor_ayah');?>" placeholder="">
						</div>
						<div class="col-4 form-group">
							<label>Tgl Diberikan Paspor Ayah:</label><br>
							<input type="text" name="tgl_paspor_ayah" id="tgl_paspor_ayah" class="form-control text-start component-datepicker format" value="<?= old('tgl_paspor_ayah');?>" placeholder="DD-MM-YYYY">
						</div>
						<div class="col-4 form-group">
							<label>Berlaku s/d:</label><br>
							<input type="text" name="rentang_paspor_ayah" id="rentang_paspor_ayah" class="form-control text-start component-datepicker format" value="<?= old('rentang_paspor_ayah');?>" placeholder="DD-MM-YYYY">
						</div>
						<div class="col-4 form-group">
							<label>Tujuan Pengajuan Paspor: <span class="text-danger">*</span></label>
							<select class="form-select tujuan required <?= ($validation->hasError('tujuan')) ? 'is-invalid' : '' ?>" name="tujuan" id="tujuan">
								<option>-PILIH TUJUAN PENGAJUAN ANDA-</option>
								<option value="Wisata" >Wisata</option>
								<option value="Kunjungan">Kunjungan</option>
								<option value="Belajar">Belajar</option>
								<option value="Umroh">Umroh</option>
								<option value="Umroh">Haji</option>
								<option value="Bekerja Formal">Bekerja Formal</option>
							</select>
						</div>
						<div class="col-4 form-group">
							<label>Ingin Tambah (Endorse) Nama? <span class="text-danger">*</span></label>
							<select class="form-select endorse required" name="endorse" id="endorse">
								<option>-PILIHAN ANDA-</option>
								<option value="Ya">Ya</option>
								<option value="Tidak">Tidak</option>
							</select>
						</div>
						<div class="col-4 hidden form-group" id="endorse_nama">
							<label>Nama Kakek:</label><br>
							<input type="text" name="nama_kakek" id="nama_kakek" class="form-control" value="<?= old('nama_kakek');?>" placeholder="">
						</div>
						<div class="col-6 form-group">
							<label>Negara Tujuan: <span class="text-danger">*</span></label><br>
							<input type="text" name="negara" id="negara" class="form-control required <?= ($validation->hasError('negara')) ? 'is-invalid' : '' ?>" value="<?= old('negara');?>" placeholder="e.g: TURKI">
						</div>
						<div class="col-6 form-group">
							<label>Pekerjaan: <span class="text-danger">*</span></label>
							<input type="text" name="pekerjaan" id="pekerjaan" class="form-control required <?= ($validation->hasError('pekerjaan')) ? 'is-invalid' : '' ?>" value="<?= old('pekerjaan');?>" placeholder="e.g: PELAJAR">
						</div>
					</div>
				</div>
				
				<div class="col-12 center">
					<button class="btn btn-secondary btn-lg" href="/cetak-perdim-anak/" type="submit">Submit</button>
				</div>
				
			</form>
		</div>
	</div>
</section>
<!-- #content end -->

<?= $this->endSection(); ?>