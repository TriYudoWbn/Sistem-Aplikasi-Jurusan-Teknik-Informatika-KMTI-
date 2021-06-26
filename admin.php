<html>

  <head>
  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
	<link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

	<!------ Include the above in your HEAD tag ---------->
	<link href="assets/style.css" rel="stylesheet">
	<?php include_once ('template_atas_login.php'); ?>
	</br></br></br></br></br></br>
  </head>
		<body id="LoginForm">
		<div class="container">
		<h1 class="form-heading">Login Admin</h1>
		<div class="login-form">
		<div class="main-div">
			<div class="panel">
		   </div>
			<form id="Login">

				<div class="form-group">
					<input type="text" class="form-control"  placeholder="Username" name="username">

				</div>	

				<div class="form-group">
					<input type="password" class="form-control" name="inputPassword" placeholder="Password Akun">
				</div>

				<button type="submit" class="btn btn-primary">Login</button>

			</form>
			</div>
		</div></div></div>


</body>
<?php include_once ('template_bawah.php'); ?>
</html>