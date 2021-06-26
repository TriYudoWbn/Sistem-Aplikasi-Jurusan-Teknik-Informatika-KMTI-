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

	<form action="simpan_nilai.php" method="post" enctype="multipart/form-data">
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
								<li class="menu-item"><a href="input.php">Input Nilai</a></li>
								<li class="menu-item"><a href="Data_CA.php">Tampil Data CA</a></li>
								<li class="menu-item"><a href="admin.php">Tampil Data Lulus</a></li>
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
		   <h2>Silahkan Isi Biodata Lengkap</h2>

		   </div>
			<form id="Login">

				<div class="form-group">
					<input type="text" class="form-control"  placeholder="Nim Mahasiswa" name="nim">
				</div>	
				<br/>
				
				
				<div class="form-group">
				<input type="text" class="form-control"  placeholder="Nilai Mahasiswa" name="nilai">
				</div>	
				<br/>

				<button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
				<button type="reset" class="btn btn-primary">Reset</button>

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