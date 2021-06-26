<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$dbName = "register";
	
	$kon = mysqli_connect($host, $user, $pass);
	if (!$kon)
		die("Gagal Koneksi...");
	
	$hasil = mysqli_select_db($kon, $dbName);
	if (!$hasil) {
		$hasil = mysqli_query($kon, "CREATE DATABASE $dbName");
		if (!$hasil)
			die("Gagal Buat Database");
		else
			$hasil = mysqli_select_db($kon, $dbName);
			if (!$hasil) die ("Gagal konek Database");
	}
	
	
$sqlTabelRegister = "CREATE TABLE IF NOT EXISTS Register(
					   nim int auto_increment NOT NULL PRIMARY KEY,
					   nama varchar(40) NOT NULL,
					   alamat varchar(40) NOT NULL,
					   jurusan varchar(20) NOT NULL,
					   minat varchar(20) NOT NULL,
					   tanggal varchar(10) NOT NULL,
					   bulan varchar(10) NOT NULL,
					   tahun varchar(10) NOT NULL,
					   jekel enum('L','P'),
					   alasan varchar(40) NOT NULL,
					   email varchar(40) NOT NULL,
					   nomor varchar(20) NOT NULL,
					   nilai int(5) NOT NULL,
					   keterangan varchar(20) NOT NULL,
					   KEY(nama)
					   )";
	
	mysqli_query($kon, $sqlTabelRegister) OR die("Gagal buat tabel Register");
	
	
	

$sql = "select * from Register";
$hasil = mysqli_query($kon,$sql);
$jumlah = mysqli_num_rows($hasil);
	
if($jumlah==0){
$sql = "insert into login (user,password,status)
	   values ('admin',md5('202'),'aktif')";
	   mysqli_query($kon,$sql);
}		
	?>