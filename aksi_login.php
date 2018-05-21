<?php
	include 'koneksi.php';
	$username = $_POST['username'];
	$password = $_POST['password'];

	$query = "SELECT * FROM akun where username = '".$username."'";
	$select = mysqli_query($koneksih,$query);

	if($akun = mysqli_fetch_assoc($select)) {
		//ambil pass dari database
		$password_db = $akun['password'];
		//cek enkripsi hashing multi layer
		//1. hash md5
		$hash_md5 = md5($password);
		//2. hash bcrypt
		$cek_bcrypt = password_verify($hash_md5,$password_db);

		if ($cek_bcrypt) {
			//simpan data ke session
			session_start();
			$_SESSION['id'] = $akun['id'];
			$_SESSION['username'] = $akun['username'];
			//arahkan ke index
			header('location:index.php');
		} else {
			echo "Maaf, password tidak cocok untuk akun ".$username."<br>";
			echo '<a href="login.php" > Kembali </a>';
		}		
	} else {
		echo "Maaf, kami tidak menemukan username ".$username."dala database <br>";
		echo '<a href="login.php"> Kembali </a>';
	}
?>