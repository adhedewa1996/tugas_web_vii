<?php 
	include 'koneksi.php';	

	$id = $_GET['id'];

	$query = "delete from laporan_barang_hilang where id='".$id."'" ;

	$delete = mysqli_query($koneksih,$query);
	
	if ($delete) {
		header('location:index.php');
	} else {
		echo "Gommenne, delete wa Fail dest ! :(";
	}
?>