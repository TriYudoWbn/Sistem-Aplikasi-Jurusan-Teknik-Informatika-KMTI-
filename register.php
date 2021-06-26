<html>
  <head>
  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>

	<link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

	<!------ Include the above in your HEAD tag ---------->
	<link href="assets/style.css" rel="stylesheet">
	<?php include_once ('template_atas.php'); ?>
	</br></br></br></br></br></br>
  </head>
  
<form action="simpan.php" method="post" enctype="multipart/form-data">
		<body id="LoginForm">
		<div class="container">
		<h1 class="form-heading">Masukan Biodata</h1>
		<div class="login-form">
		<div class="main-div">
			<div class="panel">
		   <h2>Silahkan Isi Biodata Lengkap</h2>
			<input type="hidden" name="cekkon" value=""/>
		   </div>

				<div class="form-group">
					<input type="text" class="form-control"  placeholder="Nim Mahasiswa" name="nim">

				</div>	
				<div class="form-group">
				<input type="text" class="form-control"  placeholder="Nama Mahasiswa" name="nama">

				</div>	
				<div class="form-group" align="left" >

				<select name="jurusan" >
					      <option>Jurusan</option>
					      <option value="Teknik Informatika">Teknik Informatika</option>
					      <option value="Sistem Informasi">Sistem Informasi</option>
					      <option value="Manajemen Informatika">Manajemen Informatika</option>
					      <option value="Komputerisasi Akutansi">Komputerisasi Akutansi</option>
					      <option value="Teknik Komputer">Teknik Komputer</option>
					      </select>

				</div>	
				
				<div class="form-group" align="left">
				<select name="minat">
			    	<option>Perminatan</option>
			    	<option value="Pemrograman">Pemrograman</option>
			    	<option value="Multimedia">Multimedia</option>
			    	<option value="Jaringan">Jaringan</option>
			    </select>
				</div>

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
				<div class="form-group" align="left">
					<p>Jenis Kelamin</p>
						<input type="radio" name="jekel" value="L"/>Laki-Laki
						<input type="radio" name="jekel" value="P"/>Perempuan
				</div>
				
				<div class="form-group" align="left">
					<td><textarea style="resize:none;width:100% ;height:15%;" name="alamat" placeholder="Alamat" ></textarea></td>
				</div>
				
				
				<div class="form-group" align="left">
					<td><textarea style="resize:none;width:100% ;height:15%;" name="alasan" placeholder="Alasan" ></textarea></td>
				</div>


				<div class="form-group">	
					<input type="email" class="form-control" name="email" placeholder="Email Address">

				</div>

				<div class="form-group">
				    <input type="text" class="form-control" name="nomor" placeholder="Nomor Telephone/WA">
				</div>

				<button type="submit" class="btn btn-primary">Simpan</button>

			</div>
		</div></div></div>


</body>
</form>
<?php include_once ('template_bawah.php'); ?>
</html>
