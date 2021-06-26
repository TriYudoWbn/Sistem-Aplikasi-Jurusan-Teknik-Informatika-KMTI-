<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Kumpulan Mahasiswa Teknik Informatika</title>
		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,700" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
		<!-- Loading main css file -->
		<link rel="stylesheet" href="css/animate.min.css">
		<link rel="stylesheet" href="css/style.css">
		
		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

	</head>

	<body class="slider-collapse">
		
		<div id="site-content">
			
			<header class="site-header wow fadeInDown">
				<div class="container">
					<div class="header-content">
						<div class="branding">
							<img src="image/TI.png" width="150lm" height="70lm" alt="Company Name" class="logo">
							<h1 class="site-title"><a href="index.html">The Real Engginers</a></h1>
							<small class="site-description">TEKNIK INFORMATIKA</small>
						</div>
						
						<nav class="main-navigation">
							<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
							<ul class="menu">
								<li class="menu-item"><a href="index.html">Home</a></li>
							</ul>
						</nav>

					</div>
				</div>
			</header> <!-- .site-header -->


<br/><br/><br/><br/><br/><br/><br/>
<div class="container">
		<div class="login-form">
		<div class="main-div">
			<div class="panel">
		   <h2>Data Calon Anggota</h2>

		   </div>
			<form id="Login">

			
				<?php
	                 $register = "";
					 if(isset($_POST["register"])){
					 $register = $_POST["register"];
					 }

					 include "koneksi.php";

					 $sql = "SELECT * FROM register
						   ORDER BY nim ASC";
					 $hasil = mysqli_query($kon, $sql);
					 if(!$hasil){
						die("Gagal query..".mysqli_error($kon));
					 }
					 
				?>
				<table class="table" border="1">
					<tr style="background-color: #00FFFF;">
					<th>Nim</th>
					<th>Nama</th>
					<th>Alamat</th>
					<th>Jurusan</th>
					<th>Minat</th>
					<th>Tanggal</th>
					<th>Jenis Kelamin</th>
					<th>Alasan</th>
					<th>Email</th>
					<th>Nomor Telp</th>
					<th>Nilai</th>
					<th>Keterangan</th>
				</tr>
				<?php
				   								
					$no = 0;
					while($row = mysqli_fetch_assoc($hasil)){
						echo "<tr>";
						echo "<td>".$row['nim']."</td>";				  
						echo "<td>".$row['nama']."</td>";
						echo "<td>".$row['alamat']."</td>";	
						echo "<td>".$row['jurusan']."</td>";
						echo "<td>".$row['minat']."</td>";	
						echo "<td>".$row['tanggal']."</td>";	
						echo "<td>".$row['jekel']."</td>";	
						echo "<td>".$row['alasan']."</td>";	
						echo "<td>".$row['email']."</td>";	
						echo "<td>".$row['nomor']."</td>";	
						echo "<td>".$row['nilai']."</td>";
						echo "<td>".$row['keterangan']."</td>";
						echo "</tr>";
					}
				?>
				</table>


			</form>
			</div>
		</div></div></div>
		<br/><br/>
		
		
		
		<footer class="site-footer wow fadeInUp">
				<div class="footer-bottom ">
					<div class="container">
						<div class="branding pull-left">
							<img src="image/TI.png" width="300lm" height="140lm%" alt="Company Name" class="logo">
							<h1 class="site-title"><a href="index.html">KUMPULAN MAHASISWA TEKNIK INFORMATIKA</a></h1>
							<small class="site-description">The real Engginers</small>
						</div>

						<div class="contact-links pull-right">
							<a href="https://goo.gl/maps/oQKxg"><i class="fa fa-map-marker"></i> STMIK AKAKOM Yogyakarta</a>
							<a href="tel:+134453455345"><i class="fa fa-phone"></i> +1 344 5345 5345</a>
							<a href="https://www.akakom.ac.id"><i class="fa fa-envelope"></i>info@akakom.ac.id</a>
						</div>
					</div>
				</div>
				<div class="colophon">
					<div class="container">
						<p class="copy">Copyright 2018 KMTI, All right reserved.</p>
					</div>
				</div>
			</footer> <!-- .site-footer -->

		</div> <!-- #site-content -->
		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/min/plugins-min.js"></script>
		<script src="js/min/app-min.js"></script>
		<script src="js/alertify.min.js"></script>
	</body>

</html>