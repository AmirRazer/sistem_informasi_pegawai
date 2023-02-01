<?php 
//ciptakan objek dari class Jabatan dan Divisi
$obj_jabatan = new Jabatan();
$obj_divisi = new Divisi();
//pangil fungsi untuk menampilkan data jabatan dan divisi
$data_jabatan = $obj_jabatan->datajabatan();
$data_divisi = $obj_divisi->dataDivisi();

?>

<section class="page-title bg-title overlay-dark">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<div class="title">
					<h3>Input Pegawai</h3>
				</div>
				<ol class="breadcrumb justify-content-center p-0 m-0">
				  <li class="breadcrumb-item"><a href="index.php?hal=home">Home</a></li>
				  <li class="breadcrumb-item active">Input Pegawai</li>
				</ol>
			</div>
		</div>
	</div>
</section>

<!--====  End of Page Title  ====-->


<section class="section contact-form">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section-title">
					<h3>Input  <span class="alternate">Pegawai</span></h3>
				</div>
			</div>
		</div>
		<form action="pegawai_controler.php" method="POST"class="row">
			<div class="col-md-6">
				<input type="text" class="form-control main" name="nip" id="nip" placeholder="Nip">
			</div>
			<div class="col-md-6">
				<input type="text" class="form-control main" name="nama" id="nama" placeholder="Nama">
            </div>
            <div class="col-md-6"><div class="form-check">
                <input class="form-check-input" type="radio" name="gender" value="L">
                <label class="form-check-label">
                    Laki Laki
                </label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" value="P">
                <label class="form-check-label" >
                    Perempuan
                </label>
                </div>
            </div>
            <div class="col-md-6">
				<input type="text" class="form-control main" name="foto" id="foto" placeholder="Foto">
			</div>
			<div class="col-md-6">
				<input type="text" class="form-control main" name="tmp_lahir"  placeholder="Tempat Lahir">
            </div>
			<div class="col-md-6">
				<input type="date" class="form-control main" name="tgl_lahir" >
			</div>
			<div class="col-md-6">
				<div clas="form-group">
			<select class="form-control main" name="jabatan" >
					<option selected>-- Pilih Jabatan --</option>
					<?php
					foreach($data_jabatan as $jab){

					
					?>
					<option value="<?=$jab['id']?>"><?=$jab['nama'] ?></option>
					<?php } ?>
					</select>	
					</div>		
			</div>
			<div class="col-md-6">
			<div clas="form-group">
			<select class="form-control main" name="divisi" >
					<option selected>-- Pilih Divisi --</option>
					<?php
					foreach($data_divisi as $div){

					
					?>
					<option value="<?=$div['id']?>"><?=$div['nama'] ?></option>
					<?php } ?>
					</select>	
					</div>            </div>
			<div class="col-md-12">
				<textarea name="alamat" id="alamat" class="form-control main" rows="10" placeholder="Alamat"></textarea>
			</div>
			<div class="col-12 text-center">
				<button type="submit" name="proses" value="simpan"class="btn btn-main-md">Simpan</button>
			</div>
			<div class="col-12 text-center">
				<button type="submit" name="proses" value="batal"class="btn btn-info-md">Batal</button>
			</div>
		</form>
	</div>
</section>