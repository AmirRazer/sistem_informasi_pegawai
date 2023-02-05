<?php 
//ciptakan objek dari class Jabatan dan Divisi
$obj_jabatan = new Jabatan();
$obj_divisi = new Divisi();
$obj_pegawai = new Pegawai();
//pangil fungsi untuk menampilkan data jabatan dan divisi
$data_jabatan = $obj_jabatan->datajabatan();
$data_divisi = $obj_divisi->dataDivisi();

//--------------------Proses edit data ------------------
//Tangkap requs=est edit di url (Setelah klik tombol edit/icon pencil)
$idedit =$_REQUEST['idedit'];

$peg = !empty($idedit) ?  $obj_pegawai->getPegawai($idedit) : array();
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
			<label  class="form-label"><b>Nip</b></label>
				<input type="text" class="form-control main" name="nip" id="nip" placeholder="Nip" value="<?= $peg['nip'] ?>">
			</div>
			<div class="col-md-6">
			<label  class="form-label"><b>Nama</b></label>
				<input type="text" class="form-control main" name="nama" id="nama" placeholder="Nama" value="<?= $peg['nama'] ?>">
            </div>
            <div class="col-md-6">
			<label  class="form-label"><b>Jenis Kelamin</b></label></br>
			<div class="form-check">
			
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
			<label  class="form-label"><b>Foto</b></label>
				<input type="text" class="form-control main" name="foto" id="foto" placeholder="Foto"  value="<?= $peg['foto'] ?>">
			</div>
			<div class="col-md-6">
			<label  class="form-label"><b>Tempat Lahir</b></label>
				<input type="text" class="form-control main" name="tmp_lahir"  placeholder="Tempat Lahir"  value="<?= $peg['tmp_lahir'] ?>">
            </div>
			
			<div class="col-md-6">
			<label  class="form-label"><b>Tanggal Lahir</b></label>
				<input type="date" class="form-control main" name="tgl_lahir"  value="<?= $peg['tgl_lahir'] ?>">
			</div>
			<div class="col-md-6">
			<label  class="form-label"><b>Jabatan</b></label>
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
			<label  class="form-label"><b>Divisi</b></label>
			<div clas="form-group">
			<select class="form-control main" name="divisi" >
					<option selected>-- Pilih Divisi --</option>
					<?php
					foreach($data_divisi as $div){

					
					?>
					<option value="<?=$div['id']?>"><?=$div['nama'] ?></option>
					<?php } ?>
					</select>	
					</div>
					</div>
			<div class="col-md-12">
			<label  class="form-label"><b>Alamat</b></label>
				<textarea name="alamat" id="alamat" class="form-control main" rows="10" placeholder="Alamat"><?= $peg['alamat'] ?></textarea>
			</div>
			<div class="col-12 text-center">
			<?php
			//=================modus entry data baru, form dlm keadaan kosoong==========
			if(empty($idedit)){
			?>
				<button type="submit" name="proses" value="simpan"class="btn btn-success btn-lg">Simpan</button>
			<?php } 
			//==========modus edit data lama, form terisi daata lama============
			else{
			?>
				<button type="submit" name="proses" value="ubah"class="btn btn-warning btn-lg">Ubah</button>
			<?php } ?>			
				<button type="submit" name="proses" value="batal"class="btn btn-info btn-lg">Batal</button>
			</div>
		</form>
	</div>
</section>