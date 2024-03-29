<?= $this->extend('pemohon/layout/template'); ?>

<?= $this->section('content'); ?>
<!-- Page Title
		============================================= -->
<section id="page-title">

	<div class="container clearfix">
		<div class="row">
			<!-- <div class="col-3">
				<img src="HTML/images/login/logo_si_cepot.png" alt="Logo Redi Dinanti" width="200">
			</div> -->
			<div class="col">
				<h1>FORMULIR PEMOHON ANAK</h1>
				<!-- <span>Forms Widget</span> -->
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
				<div class="sb-msg"><i class="icon-warning-sign"></i><strong>Perhatian!</strong> Mohon mengisi data dengan menggunakan huruf balok atau huruf besar! Klik <strong>Caps Lock</strong> pada keyboard untuk mengaktifkan huruf besar! Kolom bertanda (<span class="text-danger">*</span>) wajib diisi!</div>
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
							<label>Nama Lengkap Anak: <small>(tanpa simbol)</small> <span class="text-danger">*</span></label>
							<input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control <?= ($validation->hasError('nama_lengkap')) ? 'is-invalid' : '' ?> required" value="<?= old('nama_lengkap');?>" placeholder="cth: DEA ANANDA">
						</div>
						<div class="col-12 form-group">
							<label>Jenis Kelamin Anak: <span class="text-danger">*</span></label>
							<select class="form-select <?= ($validation->hasError('jenis_kelamin')) ? 'is-invalid' : '' ?> required" name="jenis_kelamin" id="jenis_kelamin">
								<option>-PILIH JENIS KELAMIN-</option>
								<option value="Laki-Laki" <?= old('jenis_kelamin') == 'Laki-Laki'? 'selected':''?>>Laki-Laki</option>
								<option value="Perempuan" <?= old('jenis_kelamin') == 'Perempuan'? 'selected':''?>>Perempuan</option>
							</select>
						</div>
						<div class="col-12 form-group">
							<label>Jenis Permohonan Paspor: <span class="text-danger">*</span></label>
							<select class="form-select jenis_permohonan <?= ($validation->hasError('jenis_permohonan')) ? 'is-invalid' : '' ?> required" name="jenis_permohonan" id="jenis_permohonan">
								<option>-PILIH JENIS PERMOHONAN PASPOR ANDA-</option>
								<option value="Baru" <?= old('jenis_permohonan') == 'Baru'? 'selected':''?>>Baru</option>
								<option value="Penggantian"<?= old('jenis_permohonan') == 'Penggantian'? 'selected':''?>>Penggantian</option>
							</select>
						</div>
						<div class="col-12 hidden form-group" id="alasan">
							<label>Alasan Penggantian:</label>
							<select class="form-select alasan_penggantian required" name="alasan_penggantian" id="alasan_penggantian">
								<option value="">-PILIH ALASAN PENGGANTIAN PASPOR ANDA-</option>
								<option value="Habis Masa Berlaku" <?= old('alasan_penggantian') == 'Habis Masa Berlaku'? 'selected':''?>>Habis Masa Berlaku</option>
								<option value="Halaman Penuh" <?= old('alasan_penggantian') == 'Habis Masa Berlaku'? 'selected':''?>>Halaman Penuh</option>
								<option value="Rusak" <?= old('alasan_penggantian') == 'Rusak'? 'selected':''?>>Rusak</option>
								<option value="Hilang" <?= old('alasan_penggantian') == 'Hilang'? 'selected':''?>>Hilang</option>
								<option value="Ubah Data" <?= old('alasan_penggantian') == 'Ubah Data'? 'selected':''?>>Ubah Data</option>
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
							<input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control required <?= ($validation->hasError('tempat_lahir')) ? 'is-invalid' : '' ?>" value="<?= old('tempat_lahir');?>" placeholder="cth: KEDIRI">
						</div>
						<div class="col-6 form-group">
							<label>Tanggal Lahir Anak: <span class="text-danger">*</span></label>
							<input type="text" value="<?= old('tanggal_lahir');?>" class="form-control required <?= ($validation->hasError('tanggal_lahir')) ? 'is-invalid' : '' ?> text-start component-datepicker format" name="tanggal_lahir" id="tanggal_lahir" placeholder="DD-MM-YYYY">
						</div>
						<div class="col-12 form-group">
							<label>NIK / No. KIA: <span class="text-danger">*</span></label><br>
							<input type="text" name="nik" id="nik" class="form-control required <?= ($validation->hasError('nik')) ? 'is-invalid' : '' ?>" value="<?= old('nik');?>" placeholder="Masukkan 16 digit NIK anak">
							<div class="invalid-feedback">
								NIK harus terdiri dari 16 digit.
							</div>
						</div>
						<div class="col-6 form-group form-anak">
							<label>Alamat Anak: <span class="text-danger">*</span></label>
							<input type="text" name="alamat" id="alamat" class="form-control required <?= ($validation->hasError('alamat')) ? 'is-invalid' : '' ?>" value="<?= old('alamat');?>" placeholder="cth: GRINGGING KEDIRI">
						</div>
						<div class="col-6 form-group">
							<label>Alamat Anak Sama Dengan Alamat Orang Tua: <span class="text-danger">*</span></label>
							<select class="form-select address_ortu required" name="address_ortu" id="address_ortu">
								<option value="Ya" <?= old('address_ortu') == 'Ya'? 'selected':''?>>Ya, sama</option>
								<option value="Tidak" <?= old('address_ortu') == 'Tidak'? 'selected':''?>>Tidak sama</option>
							</select>
						</div>
						<div class="col-6 hidden form-group form-ortu" id="address_ibu">
							<label>Alamat Ibu:</label>
							<input type="text" name="alamat_ibu" id="alamat_ibu" class="form-control required" value="<?= old('alamat_ibu');?>" placeholder="cth: GRINGGING KEDIRI">
						</div>
						<div class="col-6 hidden form-group form-ortu" id="address_ayah">
							<label>Alamat Ayah:</label>
							<input type="text" name="alamat_ayah" id="alamat_ayah" class="form-control required" value="<?= old('alamat_ayah');?>" placeholder="cth: GRINGGING KEDIRI">
						</div>
						<div class="col-6 form-group">
							<label>No HP Ortu: <small>(salah satu)</small> <span class="text-danger">*</span></label>
							<input type="text" name="no_hp" id="no_hp" class="form-control required <?= ($validation->hasError('no_hp')) ? 'is-invalid' : '' ?>" placeholder="Max 13 digit" value="<?= old('no_hp');?>">
						</div>
						<div class="col-6 form-group">
							<label>EMAIL: </label>
							<input type="text" name="email" id="email" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : '' ?>" placeholder="cth: abc@gmail.com" value="<?= old('email');?>">
						</div>
						<div class="col-6 form-group">
							<label>Nama Ibu:<span class="text-danger">*</span></label><br>
							<input type="text" name="nama_ibu" id="nama_ibu" class="form-control <?= ($validation->hasError('nama_ibu')) ? 'is-invalid' : '' ?>" value="<?= old('nama_ibu');?>" placeholder="cth: DEWI SARI">
						</div>
						<div class="col-6 form-group">
							<label>Kewarganegaraan Ibu: <span class="text-danger">*</span></label><br>
							<input type="text" name="kewarganegaraan_ibu" id="kewarganegaraan_ibu" class="form-control <?= ($validation->hasError('kewarganegaraan_ibu')) ? 'is-invalid' : '' ?>" value="<?= old('kewarganegaraan_ibu');?>" placeholder="cth: INDONESIA">
						</div>
						<div class="col-6 form-group">
							<label>Tempat Lahir Ibu: </label><br>
							<input type="text" name="tempat_lhr_ibu" id="tempat_lhr_ibu" class="form-control" value="<?= old('tempat_lhr_ibu');?>" placeholder="cth: SURABAYA">
						</div>
						<div class="col-6 form-group">
							<label>Tanggal Lahir Ibu: </label>
							<input type="text" value="<?= old('tgl_lhr_ibu');?>" class="form-control <?= ($validation->hasError('tgl_lhr_ibu')) ? 'is-invalid' : '' ?> text-start component-datepicker format" name="tgl_lhr_ibu" id="tgl_lhr_ibu" placeholder="DD-MM-YYYY">
						</div>
						<div class="col-6 form-group">
							<label>No. KTP Ibu:<span class="text-danger">*</span></label><br>
							<input type="text" name="no_ktp_ibu" id="no_ktp_ibu" class="form-control <?= ($validation->hasError('no_ktp_ibu')) ? 'is-invalid' : '' ?>" value="<?= old('no_ktp_ibu');?>" placeholder="16 DIGIT NO KTP">
						</div>
						<div class="col-6 form-group">
							<label>Tgl Diberikan KTP Ibu:<span class="text-danger">*</span></label><br>
							<input type="text" name="tgl_ktp_ibu" id="tgl_ktp_ibu" class="form-control text-start component-datepicker format <?= ($validation->hasError('tgl_ktp_ibu')) ? 'is-invalid' : '' ?>" value="<?= old('tgl_ktp_ibu');?>" placeholder="DD-MM-YYYY">
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
							<label>Nama Ayah:<span class="text-danger">*</span></label><br>
							<input type="text" name="nama_ayah" id="nama_ayah" class="form-control <?= ($validation->hasError('nama_ayah')) ? 'is-invalid' : '' ?>" value="<?= old('nama_ayah');?>" placeholder="cth: YANTO">
						</div>
						<div class="col-6 form-group">
							<label>Kewarganegaraan Ayah: <span class="text-danger">*</span></label><br>
							<input type="text" name="kewarganegaraan_ayah" id="kewarganegaraan_ayah" class="form-control <?= ($validation->hasError('kewarganegaraan_ayah')) ? 'is-invalid' : '' ?> " value="<?= old('kewarganegaraan_ayah');?>" placeholder="cth: INDONESIA">
						</div>
						<div class="col-6 form-group">
							<label>Tempat Lahir Ayah: </label><br>
							<input type="text" name="tempat_lhr_ayah" id="tempat_lhr_ayah" class="form-control" value="<?= old('tempat_lhr_ayah');?>" placeholder="cth: BANDUNG">
						</div>
						<div class="col-6 form-group">
							<label>Tanggal Lahir Ayah: </label>
							<input type="text" value="<?= old('tgl_lhr_ayah');?>" class="form-control text-start component-datepicker format" name="tgl_lhr_ayah" id="tgl_lhr_ayah" placeholder="DD-MM-YYYY">
						</div>
						<div class="col-6 form-group">
							<label>No. KTP Ayah:<span class="text-danger">*</span></label><br>
							<input type="text" name="no_ktp_ayah" id="no_ktp_ayah" class="form-control <?= ($validation->hasError('no_ktp_ayah')) ? 'is-invalid' : '' ?>" value="<?= old('no_ktp_ayah');?>" placeholder="16 DIGIT NO KTP">
						</div>
						<div class="col-6 form-group">
							<label>Tgl Diberikan KTP Ayah:<span class="text-danger">*</span></label><br>
							<input type="text" name="tgl_ktp_ayah" id="tgl_ktp_ayah" class="form-control text-start component-datepicker format <?= ($validation->hasError('tgl_ktp_ayah')) ? 'is-invalid' : '' ?>" value="<?= old('tgl_ktp_ayah');?>" placeholder="DD-MM-YYYY">
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
								<option value="Bekerja" <?= old('tujuan') == 'Bekerja'? 'selected':''?>>Bekerja</option>
								<option value="Belajar" <?= old('tujuan') == 'Belajar'? 'selected':''?>>Belajar</option>
								<option value="Berobat" <?= old('tujuan') == 'Berobat'? 'selected':''?>>Berobat</option>
								<option value="Haji" <?= old('tujuan') == 'Haji'? 'selected':''?>>Haji</option>
								<option value="Kunjungan" <?= old('tujuan') == 'Kunjungan'? 'selected':''?>>Kunjungan</option>
								<option value="Umroh" <?= old('tujuan') == 'Umroh'? 'selected':''?>>Umroh</option>
								<option value="Wisata" <?= old('tujuan') == 'Wisata'? 'selected':''?>>Wisata</option>
							</select>
						</div>
						<div class="col-4 form-group">
							<label>Ingin Tambah (Endorse) Nama? <span class="text-danger">*</span></label>
							<select class="form-select endorse required" name="endorse" id="endorse">
								<option>-PILIHAN ANDA-</option>
								<option value="Ya" <?= old('endorse') == 'Ya'? 'selected':''?>>Ya</option>
								<option value="Tidak" <?= old('endorse') == 'Tidak'? 'selected':''?>>Tidak</option>
							</select>
						</div>
						<div class="col-4 hidden form-group" id="endorse_nama">
							<label>Nama Kakek:</label><br>
							<input type="text" name="nama_kakek" id="nama_kakek" class="form-control" value="<?= old('nama_kakek');?>" placeholder="">
						</div>
						<div class="col-12 form-group">
							<label>Negara Tujuan: <span class="text-danger">*</span></label><br>
							<input type="text" name="negara" id="negara" class="form-control required <?= ($validation->hasError('negara')) ? 'is-invalid' : '' ?>" value="<?= old('negara');?>" placeholder="cth: TURKI">
						</div>
					</div>
				</div>
				
				<div class="col-12 center">
					<br>
					<button class="button button-rounded button-reveal button-large button-blue" href="/sicepot-cetak-perdim-anak/" type="submit"><i class="icon-print2"></i><span>print perdim</span></button>
				</div>
				
			</form>
		</div>
	</div>
</section>
<!-- #content end -->

<?= $this->endSection(); ?>