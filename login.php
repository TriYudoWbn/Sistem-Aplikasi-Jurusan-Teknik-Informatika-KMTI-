<html lang="id" id="home">

  <head>
  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
	<link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

	<!------ Include the above in your HEAD tag ---------->
	<link href="assets/style.css" rel="stylesheet">
	<?php include_once ('template_atas_login.php'); ?>
	</br></br></br></br></br></br>
  </head>
		<body>
		<section class="login" id="login">
		<div class="container">
		<h1 class="form-heading">Login Admin</h1>
		<div class="login-form">
		<div class="main-div">
			<div class="panel">
		   </div>
			<form id="Login" method="post" action="proses_login.php">

				<div class="form-group">
					<input type="text" class="form-control" name="user" id="nama" placeholder="Masukan User">
    			</div>

				<div class="form-group">
					<input type="password" class="form-control" name="password" id="password" placeholder="Masukan Password">
    			</div>
				
    			<button center type="submit" class="btn btn-primary" name="login">Login</button>
	        </form>
			</div>
		</div></div></div>


</body>
<?php include_once ('template_bawah.php'); ?>
</html>