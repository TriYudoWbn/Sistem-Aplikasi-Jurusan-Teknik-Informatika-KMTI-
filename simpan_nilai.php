<?php
  
    $nim=$_POST['nim'];
    $nilai=$_POST['nilai'];
	
	if($nilai >= 70){
		$keterangan = "Lulus";
	}else{
	    $keterangan = "Tidak Lulus";
	}
	
	include "koneksi.php";
  
	$sql = "UPDATE register SET
				nilai = '$nilai',
				keterangan = '$keterangan'
				WHERE nim = $nim";
				
				
	$hasil = mysqli_query($kon, $sql);

	if(!$hasil){
		echo "<center>Gagal simpan, silakan diulangi!</center><br/>";
		echo "mysqli_error($kon)";
		echo "<center><br/><input type='button' value='Kembali' onClick='self.history.back()'/></center>";
		exit;
	}
	else{
		echo "<center><h2>Simpan data berhasil</h2></center>";
		echo "<center><input type='button' value='Kembali' onClick='self.history.back()'/></center>";
	}
	
?>