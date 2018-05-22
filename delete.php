<<<<<<< HEAD
<?php
	include 'koneksi.php';
=======
<?php 
	include 'koneksi.php';	
>>>>>>> 5b4dd54384783312d11b31ad381fdff05079a1d3

	$id = $_GET['id'];

	$query = "delete from laporan_barang_hilang where id='".$id."'" ;

	$delete = mysqli_query($koneksih,$query);
<<<<<<< HEAD

	if ($delete) {
		header('location:admin.php');
	} else {
		echo "Gommenne, delete wa Fail dest ! :(";
	}
?>
=======
	
	if ($delete) {
		header('location:index.php');
	} else {
		echo "Gommenne, delete wa Fail dest ! :(";
	}
?>
>>>>>>> 5b4dd54384783312d11b31ad381fdff05079a1d3
