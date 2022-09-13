<?= $this->extend('pemohon/layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Page Title -->
<section id="page-title">
	<div class="container clearfix">
		<div class="row">
			<div class="col">
				<h1>FORMULIR PEMOHON</h1>
			</div>
		</div>
	</div>
</section>
<!-- #page-title end -->

<!-- Content -->
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
							<label>Nama Lengkap: <small>(tanpa simbol)</small>  <span class="text-danger">*</span></label>
							<input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control <?= ($validation->hasError('nama_lengkap')) ? 'is-invalid' : '' ?>" value="<?= old('nama_lengkap');?>" placeholder="cth: AHMAD JAMAL">
						</div>
						<div class="col-12 form-group">
							<label>Jenis Kelamin: <span class="text-danger">*</span></label>
							<select class="form-select <?= ($validation->hasError('jenis_kelamin')) ? 'is-invalid' : '' ?>" name="jenis_kelamin" id="jenis_kelamin">
								<option>-Pilih Jenis Kelamin-</option>
								<option value="Laki-Laki" <?= old('jenis_kelamin') == 'Laki-Laki'? 'selected':''?>>Laki-Laki</option>
								<option value="Perempuan" <?= old('jenis_kelamin') == 'Perempuan'? 'selected':''?>>Perempuan</option>
							</select>
						</div>
						<div class="col-12 form-group">
							<label>Jenis Permohonan Paspor: <span class="text-danger">*</span></label>
							<select class="form-select jenis_permohonan <?= ($validation->hasError('jenis_permohonan')) ? 'is-invalid' : '' ?>" name="jenis_permohonan" id="jenis_permohonan">
								<option>-Pilih Jenis Permohonan Paspor Anda-</option>
								<option value="Baru" <?= old('jenis_permohonan') == 'Baru'? 'selected':''?>>Baru</option>
								<option value="Penggantian" <?= old('jenis_permohonan') == 'Penggantian'? 'selected':''?>>Penggantian</option>
							</select>
						</div>
						<div class="col-12 hidden form-group" id="alasan">
							<label>Alasan Penggantian:</label>
							<select class="form-select alasan_penggantian required" name="alasan_penggantian" id="alasan_penggantian">
								<option value="">-Pilih Alasan Penggantian Paspor Anda-</option>
								<option value="Habis Masa Berlaku" <?= old('alasan_penggantian') == 'Habis Masa Berlaku'? 'selected':''?>>Habis Masa Berlaku</option>
								<option value="Halaman Penuh" <?= old('alasan_penggantian') == 'Halaman Penuh'? 'selected':''?>>Halaman Penuh</option>
								<option value="Rusak" <?= old('alasan_penggantian') == 'Rusak'? 'selected':''?>>Rusak</option>
								<option value="Hilang" <?= old('alasan_penggantian') == 'Hilang'? 'selected':''?>>Hilang</option>
								<option value="Ubah Data" <?= old('alasan_penggantian') == 'Ubah Data'? 'selected':''?>>Ubah Data</option>
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
							<input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control <?= ($validation->hasError('tempat_lahir')) ? 'is-invalid' : '' ?>" value="<?= old('tempat_lahir');?>" placeholder="cth: KEDIRI">
						</div>
						<div class="col-6 form-group">
							<label>Tanggal Lahir: <span class="text-danger">*</span></label>
							<input type="text" value="<?= old('tanggal_lahir');?>" class="form-control <?= ($validation->hasError('tanggal_lahir')) ? 'is-invalid' : '' ?> text-start component-datepicker format" name="tanggal_lahir" id="tanggal_lahir" placeholder="DD-MM-YYYY">
						</div>
						<div class="col-4 form-group">
							<label>NIK / No. KTP: <span class="text-danger">*</span></label><br>
							<input type="text" name="nik" id="nik" class="form-control <?= ($validation->hasError('nik')) ? 'is-invalid' : '' ?>" pattern="[0-9]{16}" value="<?= old('nik');?>" placeholder="Masukkan 16 digit NIK anda">
						</div>
						<div class="col-4 form-group">
							<label>Tanggal Dikeluarkan KTP: <span class="text-danger">*</span></label><br>
							<input type="text" value="<?= old('tgl_output');?>" class="form-control <?= ($validation->hasError('tgl_output')) ? 'is-invalid' : '' ?> text-start component-datepicker format" name="tgl_output" id="tgl_output" placeholder="cth: 10-12-2009">
						</div>
						<div class="col-4 form-group">
							<label>Tempat Dikeluarkan KTP: <span class="text-danger">*</span></label><br>
							<input type="text" value="<?= old('tempat_output');?>" class="form-control <?= ($validation->hasError('tempat_output')) ? 'is-invalid' : '' ?>" name="tempat_output" id="tempat_output" placeholder="cth: KEDIRI">
						</div>
						<div class="col-12 form-group">
							<label>Alamat: <span class="text-danger">*</span></label>
							<input type="text" name="alamat" id="alamat" class="form-control <?= ($validation->hasError('alamat')) ? 'is-invalid' : '' ?>" value="<?= old('alamat');?>" placeholder="cth: GRINGGING KEDIRI">
						</div>
						<div class="col-6 form-group">
							<label>No HP: <span class="text-danger">*</span></label>
							<input type="text" name="no_hp" id="no_hp" class="form-control <?= ($validation->hasError('no_hp')) ? 'is-invalid' : '' ?>" value="<?= old('no_hp');?>">
						</div>
						<div class="col-6 form-group">
							<label>EMAIL: </label>
							<input type="text" name="email" id="email" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : '' ?>" placeholder="cth: abc@gmail.com" value="<?= old('email');?>">
						</div>
						<div class="col-6 form-group">
							<label>Nama Ibu: <span class="text-danger">*</span></label><br>
							<input type="text" name="nama_ibu" id="nama_ibu" class="form-control <?= ($validation->hasError('nama_ibu')) ? 'is-invalid' : '' ?>" value="<?= old('nama_ibu');?>" placeholder="cth: ANISA">
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
							<label>Nama Ayah: <span class="text-danger">*</span></label><br>
							<input type="text" name="nama_ayah" id="nama_ayah" class="form-control <?= ($validation->hasError('nama_ayah')) ? 'is-invalid' : '' ?>" value="<?= old('nama_ayah');?>" placeholder="cth: MUHAMMAD">
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
						<div class="col-12 form-group">
							<label>Alamat ORANG TUA: <small>(salah satu)</small></label>
							<input type="text" name="alamat_ortu" id="alamat_ortu" class="form-control <?= ($validation->hasError('alamat_ortu')) ? 'is-invalid' : '' ?>" value="<?= old('alamat_ortu');?>" placeholder="cth: GRINGGING KEDIRI">
						</div>
						<div class="col-6 form-group">
							<label>Nama Suami/Istri: </label><br>
							<input type="text" name="nama_pasangan" id="nama_pasangan" class="form-control" value="<?= old('nama_pasangan');?>">
						</div>
						<div class="col-6 form-group">
							<label>Kewarganegaraan Suami/Istri: </label><br>
							<input type="text" name="kewarganegaraan_pasangan" id="kewarganegaraan_pasangan" class="form-control" value="<?= old('kewarganegaraan_pasangan');?>">
						</div>
						<div class="col-6 form-group">
							<label>Tempat Lahir Suami/Istri: </label><br>
							<input type="text" name="tempat_lhr_pasangan" id="tempat_lhr_pasangan" class="form-control" value="<?= old('tempat_lhr_pasangan');?>">
						</div>
						<div class="col-6 form-group">
							<label>Tanggal Lahir Suami/Istri: </label>
							<input type="text" value="<?= old('tgl_lhr_pasangan');?>" class="form-control <?= ($validation->hasError('tgl_lhr_pasangan')) ? 'is-invalid' : '' ?> text-start component-datepicker format" name="tgl_lhr_pasangan" id="tgl_lhr_pasangan">
						</div>
						<div class="col-4 form-group">
							<label>Tujuan Pengajuan Paspor: <span class="text-danger">*</span></label>
							<select class="form-select tujuan <?= ($validation->hasError('tujuan')) ? 'is-invalid' : '' ?>" name="tujuan" id="tujuan">
								<option>-Pilih Tujuan Anda-</option>
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
							<select class="form-select endorse" name="endorse" id="endorse">
								<option>-Pilihan Anda-</option>
								<option value="Ya" <?= old('endorse') == 'Ya'? 'selected':''?>>Ya</option>
								<option value="Tidak" <?= old('endorse') == 'Tidak'? 'selected':''?>>Tidak</option>
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
								<option value="Kawin" <?= old('status_sipil') == 'Kawin'? 'selected':''?>>Kawin</option>
								<option value="Belum Kawin" <?= old('status_sipil') == 'Belum Kawin'? 'selected':''?>>Belum Kawin</option>
								<option value="Cerai Hidup" <?= old('status_sipil') == 'Cerai Hidup'? 'selected':''?>>Cerai Hidup</option>
								<option value="Cerai Mati" <?= old('status_sipil') == 'Cerai Mati'? 'selected':''?>>Cerai Mati</option>
							</select>
						</div>
						<div class="col-12 form-group">
							<label>Pekerjaan: <span class="text-danger">*</span></label>
							<input type="text" name="pekerjaan" id="pekerjaan" class="form-control <?= ($validation->hasError('pekerjaan')) ? 'is-invalid' : '' ?>" value="<?= old('pekerjaan');?>" placeholder="cth: PNS">
						</div>
					</div>
				</div>
				<div class="col-12 center">
					<br>
					<button type="submit" class="button button-rounded button-reveal button-large button-blue" href="/sicepot-cetak-perdim-dewasa" type="submit"><i class="icon-print2"></i><span>print perdim</span></button>
				</div>
			</form>
		</div>
	</div>
</section>
<!-- #content end -->

<?= $this->endSection(); ?>