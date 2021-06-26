<?php
    if(empty($_POST['cekkon']))
	  {
		$nim = $_POST['nim'];
		$simpan = "BARU" ;
      }
    else
	  {
		$simpan = "EDIT" ;
	  }
	  
	  
    $nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$jurusan = $_POST['jurusan'];
	$minat = $_POST['minat'];
	$tanggal = $_POST['tanggal'];
	$bulan = $_POST['bulan'];
	$tahun = $_POST['tahun'];
	$jekel = $_POST['jekel'];
	$alasan = $_POST['alasan'];
	$email = $_POST['email'];
	$nomor = $_POST['nomor'];

    $dataValid="YA";

    if(strlen(trim($nim)) == 0){
		echo "<center>Nim harus diisi!</center>";
		$dataValid = "TIDAK";
	}
	if(strlen(trim($nama)) == 0){
		echo "<center>Nama harus diisi!</center>";
		$dataValid = "TIDAK";
	}
	if(strlen(trim($alamat)) == 0){
		echo "<center>Alamat harus diisi!</center>";
		$dataValid = "TIDAK";
	}
	if(strlen(trim($jurusan)) == 0){
		echo "<center>Jurusan harus diisi!</center>";
		$dataValid = "TIDAK";
	}
	if(strlen(trim($minat)) == 0){
		echo "<center>Keminatan harus diisi!</center>";
		$dataValid = "TIDAK";
	}
	if(strlen(trim($tanggal)) == 0){
		echo "<center>Tanggal harus diisi!</center>";
		$dataValid = "TIDAK";
	}
	if(strlen(trim($bulan)) == 0){
		echo "<center>Bulan harus diisi!</center>";
		$dataValid = "TIDAK";
	}
	if(strlen(trim($tahun)) == 0){
		echo "<center>Tahun harus diisi!</center>";
		$dataValid = "TIDAK";
	}
	if(strlen(trim($jekel)) == 0){
		echo "<center>Jenis Kelamin harus diisi!</center>";
		$dataValid = "TIDAK";
	}
	if(strlen(trim($alasan)) == 0){
		echo "<center>Alasan harus diisi!</center>";
		$dataValid = "TIDAK";
	}
	if(strlen(trim($email)) == 0){
		echo "<center>Email harus diisi!</center>";
		$dataValid = "TIDAK";
	}
	if(strlen(trim($nomor)) == 0){
		echo "<center>Nomor Telepon harus diisi!</center>";
		$dataValid = "TIDAK";
	}
	if($dataValid == "TIDAK"){
		echo "<center>Masih ada kesalahan, silakan perbaiki!</center><br/>";
		echo "<center><input type='button' value='Kembali' onClick='self.history.back()'/></center>";
		exit;
	}

    include "koneksi.php";
	
    if ($simpan == "EDIT"){
	$sql = "update register SET
		nama = '$nama',
		alamat = '$alamat',
		jurusan = '$jurusan',
		minat = '$minat',
		tahun = '$tahun',
		bulan = '$bulan',
		tanggal = '$tanggal',
		jekel = '$jekel',
		alasan = '$alasan',
		email = '$email',
		nomor = $nomor
		where nim = $nim ";
	
	}else{
    $sql = "INSERT INTO register(nim,nama,alamat,jurusan,minat,tanggal,bulan,tahun,jekel,alasan,email,nomor)
				VALUES ('$nim','$nama','$alamat','$jurusan','$minat','$tanggal','$bulan','$tahun','$jekel','$alasan','$email','$nomor')";

	}			

$hasil = mysqli_query ($kon, $sql);

if (!$hasil){
	echo "Gagal Simpan, Silahkan ulangi!<br/>";
	echo "<center>mysqli_error($kon);</center>";
	echo "<br/><input type='button' value='kembali' onClick='self.history.back()'>";
	exit;
} else {
	echo "Simpan data berhasil </br>";
	echo "<br/><input type='button' value='kembali' onClick='self.history.back()'>";
}

?>

