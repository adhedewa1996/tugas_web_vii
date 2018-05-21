<pre>
<?php 

	var_dump($_FILES);
	$nama_file = $_FILES['gambar']['name']; 
	$asal_file = $_FILES['gambar']['tmp_name'];
	$tujuan_file = 'upload/'.$nama_file;
	
	$upload = move_uploaded_file($asal_file,$tujuan_file);
	
	echo '<br>';

	if($upload) {

		include 'koneksi.php';
	
		$id = $_POST['id'];
		$nama_barang = $_POST['nama'];
		$gambar = $tujuan_file;
		$deskripsi = $_POST['deskripsi'];
		$nama_pelapor = $_POST['nama_pelapor'];
		$no_hp = $_POST['no_hp'];	

		$query = "update laporan_barang_hilang set nama_barang='".$nama_barang."', gambar='".$gambar."', deskripsi='".$deskripsi."', nama_pelapor='".$nama_pelapor."', no_hp_pelapor='".$no_hp."' where id='".$id."'";

		$update = mysqli_query($koneksih,$query);
	
		if ($update) {
			header('location:index.php');
		} else {
			echo "Gommenne, insert wa Fail dest ! :(";
		}

		echo "Upload ".$nama_file." sukses E>-(/*w*)/->"; echo '<br>';
		echo '<img src="'.$tujuan_file.'" width="100px" heigth="100px">';
	} else {
		echo "Mission wa Sipai des :(";
	}
?>
</pre>