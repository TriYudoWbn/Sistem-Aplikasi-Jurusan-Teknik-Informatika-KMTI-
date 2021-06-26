<?php
	session_start();
	include ("koneksi.php");
	
	if (isset($_POST['login'])) {
		$username = $_POST['user'];
		$password = md5($_POST['password']);

		$cek = mysqli_query($kon,"SELECT * from login where user='$username' and password='$password'");
		if (mysqli_num_rows($cek) == 0) {
		?>
			<script type="text/javascript">
				alert('Login Gagal! Silahkan ulangi kembali proses login.');
				window.location.href='login.php';
  			</script>
		<?php
		} else {
			$_SESSION['login'] = 1;
			$_SESSION['user'] = $username;
		?>
		<script type="text/javascript">
			alert('Login Sukses! ');
			window.location.href='home_admin.html';
			</script>
		<?php } }
 ?>