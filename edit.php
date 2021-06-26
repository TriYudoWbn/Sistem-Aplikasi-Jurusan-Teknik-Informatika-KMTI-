<?php

$nim = $_GET["nim"];
include_once('koneksi.php');
$sql = "SELECT * FROM register WHERE nim = '$nim'";
$hasil = mysqli_query($kon,$sql);
if(!$hasil){
	die("Gagal query");
}

$data = mysqli_fetch_array($hasil);
    $nama = $data["nama"];
	$alamat = $data["alamat"];
	$jurusan = $data["jurusan"];
	$minat = $data["minat"];
	$tanggal = $data["tanggal"];
	$bulan = $data["bulan"];
	$tahun = $data["tahun"];
	$jekel = $data["jekel"];
	$alasan = $data["alasan"];
	$email = $data["email"];
	$nomor = $data["nomor"];
	$nilai = $data["nilai"];
	$keterangan = $data["keterangan"];
?>


<!DOCTYPE html>
<html>
<head>
	<title>Edit Inputan Admin</title>
</head>
<body>
	<section class="tambah" id="tambah">
	<div class="row"> 
		<div class="col-sm-12">
				<h2 class="text-center">Edit Admin</h2>
				<hr>
			</div>
		</div>
	
<div class="row">
<div class="col-sm-6 col-sm-offset-3">

<form action="simpan.php" method="post" enctype="multipart/form-data">
	<div class="form-group">
        <input type="hidden" name="cekkon" value="adaisi"/>
		<div class="form-group">
			<label for="exampleInputEmail1">Nim </label>
			<input type="text" class="form-control" name="nim" id="nim" value="<?php echo $nim;?>" />
		</div>
		<br/>
  		<div class="form-group">
			<label for="exampleInputEmail1">Nama </label>
			<input type="text" class="form-control" name="nama" id="nama" value="<?php echo $nama;?>"/>
		</div>
		<br/>
		<div class="form-group">
			<label for="exampleInputEmail1">Alamat </label>
			<input type="text" class="form-control" name="alamat" id="alamat" value=C>
		</div>
		<br/>
		<div class="form-group">
			<label for="exampleInputEmail1">Jurusan </label>
			<select class="form-control" name="jurusan" >
			              <option><?php echo $jurusan;?></option>
			              <option value="Teknik Informatika">Teknik Informatika</option>
					      <option value="Sistem Informasi">Sistem Informasi</option>
					      <option value="Manajemen Informatika">Manajemen Informatika</option>
					      <option value="Komputerisasi Akutansi">Komputerisasi Akutansi</option>
					      <option value="Teknik Komputer">Teknik Komputer</option>
			</select>
		</div>
		<br/>
        <div class="form-group">
			<label for="exampleInputEmail1">Keminatan </label>
			<select class="form-control" name="minat">
			        <option><?php echo $minat;?></option>
			    	<option value="Pemrograman">Pemrograman</option>
			    	<option value="Multimedia">Multimedia</option>
			    	<option value="Jaringan">Jaringan</option>
			</select>
			<div class="form-group" align="left" >
								<p>Tempat Tanggal Lahir</p>
								<select name="tanggal">
								  <?php 
								  for ($h=1; $h<=30; $h++){
									  echo "<option value='$h'> $h </option>";
								  }
								  ?>
								  </select>
								 
								  <select name="bulan">
								  <?php 
								  for ($b=1; $b<=12; $b++){
									  echo "<option value='$b'> $b </option>";
								  }
								  ?>
								  </select>
								  
								 <select name="tahun">
								  <?php 
								  for ($t=2020; $t>=1980; $t--){
									  echo "<option value='$t'> $t </option>";
								  }
								  ?>
								  </select>

							</div>
		<br/>
		<div class="form-group" align="left">
					<p>Jenis Kelamin</p>
						<input type="radio" name="jekel" value="L"/>Laki-Laki
						<input type="radio" name="jekel" value="P"/>Perempuan
				</div>
		<br/>
		<div class="form-group">
			<label for="exampleInputEmail1">Alasan </label>
			<input type="text" class="form-control" name="alasan" id="alasan" value="<?php echo $alasan;?>"/>
		</div>
		<br/>
		<div class="form-group">
			<label for="exampleInputEmail1">Email </label>
			<input type="text" class="form-control" name="email" id="email" value="<?php echo $email;?>"/ >
		</div>
		<br/>
		<div class="form-group">
			<label for="exampleInputEmail1">Nomor </label>
			<input type="text" class="form-control" name="nomor" id="nomor" value="<?php echo $nomor?>"/>
		</div>
		<br/>
		<div class="form-group">
			<label for="exampleInputEmail1">Nilai </label>
			<input type="text" class="form-control" name="nilai" id="nilai" value="<?php echo $nilai;?>"/>
		</div>
		<br/>
		<div class="form-group">
			<label for="exampleInputEmail1">Keterangan </label>
			<input type="text" class="form-control" name="keterangan" id="keterangan" value="<?php echo $keterangan;?>"/>
		</div>
		<br/>
				<input type="submit" value="Simpan" name="proses"/>
				<input type="reset" value="Reset" name="reset"/>

</form>
