<pre>
<<<<<<< HEAD
<?php
	var_dump($_FILES);
	$nama_file = $_FILES['gambar']['name'];
	$asal_file = $_FILES['gambar']['tmp_name'];
	$tujuan_file = 'upload/'.$nama_file;

	$upload = move_uploaded_file($asal_file,$tujuan_file);

=======
<?php 
	var_dump($_FILES);
	$nama_file = $_FILES['gambar']['name']; 
	$asal_file = $_FILES['gambar']['tmp_name'];
	$tujuan_file = 'upload/'.$nama_file;
	
	$upload = move_uploaded_file($asal_file,$tujuan_file);
	
>>>>>>> 5b4dd54384783312d11b31ad381fdff05079a1d3
	echo '<br>';

	if($upload) {

		include 'koneksi.php';

		$nama_barang = $_POST['nama'];
		$gambar = $tujuan_file;
		$deskripsi = $_POST['deskripsi'];
		$nama_pelapor = $_POST['nama_pelapor'];
<<<<<<< HEAD
		$no_hp = $_POST['no_hp'];
=======
		$no_hp = $_POST['no_hp'];	
>>>>>>> 5b4dd54384783312d11b31ad381fdff05079a1d3

		$query = "insert into laporan_barang_hilang (nama_barang,gambar,deskripsi,nama_pelapor,no_hp_pelapor) values ('".$nama_barang."','".$gambar."','".$deskripsi."','".$nama_pelapor."','".$no_hp."')";

		$insert = mysqli_query($koneksih,$query);
<<<<<<< HEAD

		if ($insert) {
			header('location:admin.php');
=======
	
		if ($insert) {
			header('location:index.php');
>>>>>>> 5b4dd54384783312d11b31ad381fdff05079a1d3
		} else {
			echo "Gommenne, insert wa Fail dest ! :(";
		}

		echo "Upload ".$nama_file." sukses E>-(/*w*)/->"; echo '<br>';
		echo '<img src="'.$tujuan_file.'" width="100px" heigth="100px">';
	} else {
		echo "Mission wa Sipai des :(";
	}
?>
<<<<<<< HEAD
</pre>
=======
</pre>
>>>>>>> 5b4dd54384783312d11b31ad381fdff05079a1d3
