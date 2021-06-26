<?php
	$nim = $_GET["nim"];
	include "koneksi.php";
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
	$jekel = $data["jekel"];
	$alasan = $data["alasan"];
	$email = $data["email"];
	$nomor = $data["nomor"];
	$nilai = $data["nilai"];
	$keterangan = $data["keterangan"];

	echo "<h2>Konfirmasi Hapus</h2>";
	echo "Nama : ".$nama."<br/>";
	echo "Alamat : ".$alamat."<br/>";
	echo "Jurusan : ".$jurusan."<br/>";
	echo "Minat : ".$minat."<br/>";
	echo "Tanggal : ".$tanggal."<br/>";
	echo "Jenis Kelamin : ".$jekel."<br/>";
	echo "Alasan : ".$alasan."<br/>";
	echo "Email : ".$email."<br/>";
	echo "Nomor : ".$nomor."<br/>";
	echo "Nilai : ".$nilai."<br/>";
	echo "Keterangan : ".$keterangan."<br/>";

	
	echo "APAKAH DATA INI AKAN DIHAPUS?<br/>";
	echo "<a href='hapus.php?nim=$nim&hapus=1'>YA</a> &nbsp;&nbsp;";
	echo "<a href='Data_CA.php'>TIDAK</a><br/><br/>";

	if(isset($_GET['hapus'])){
		$sql = "DELETE FROM register WHERE nim = '$nim'";
		
		$hasil = mysqli_query($kon,$sql);
		if(!$hasil){
			echo "Gagal hapus Data : $nama<br/>";
			echo "<a href='Data_CA.php'>Kembali ke Daftar CA</a>";
	}else{
		header("location:Data_CA.php");
		
		}
	}
?>
