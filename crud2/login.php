<?php
	session_start();

	include 'koneksi.php';
	
	$user = $_POST['username'];
	$password = $_POST['password'];
	
	$data = mysqli_query($koneksi, "SELECT * FROM login WHERE username='$user' AND password='$password'");
	$cek = mysqli_num_rows($data);
	
	if ($cek > 0) {
		$row = mysqli_fetch_assoc($data);
		$_SESSION['username'] = $user;
		
		if ($row['level'] == '1') {
			$_SESSION['level'] = '1';
			header("location:homepage.php");
		} else {
			$_SESSION['role'] = 'user';
			header("location:homepage_user.php");
		}
	} else {
		echo
		'<script>alert("Username atau password salah, silahkan login kembali");
		   document.location="index.php";
		</script>';
	}
	
?>