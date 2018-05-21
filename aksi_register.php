<?php
	include 'koneksi.php';
	$username = $_POST['username'];
	$password = $_POST['password'];
	$re_password = $_POST['ulangi_password'];

	//cek password & ulangi password
	if ($password == $re_password && !$username=="" && !password=="") {
		//enkripsi
		//1.hash MD5
		$hash_md5 = md5($password);
		//2.hash bcrypt
		$bcrypt = password_hash($hash_md5,PASSWORD_DEFAULT);
		//insert ke database
		$query = "INSERT INTO akun (username, password) values ('".$username."','".$bcrypt."')";
		$insert = mysqli_query($koneksih,$query);
		//cek
		if($insert) {
			header('location:login.php');
		} else {
			echo "Gagal Daftar ..";
			echo '<a href="register.php"> Kembali </a>';
		}
	} else {
		echo "password dan ulangi password tidak sama <br>";
		echo '<a href="register.php" > kembali </a>';
	}
?>