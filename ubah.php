<h1> Update File </h1>
<?php 
	include 'koneksi.php';

	$query = "SELECT * FROM laporan_barang_hilang WHERE id='".$_GET['id']."'";

	$hasil = mysqli_query($koneksih,$query);

	//$data = mysqli_fetch_assoc($hasil);
?>


<form action="update.php" method="post" enctype="multipart/form-data">
<?php while($data = mysqli_fetch_assoc($hasil)) { ?>
	<input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
	Nama : <input type="text" name="nama" value="<?php echo $data['nama_barang'] ?>"> <br>
	<img src="<?php echo $data['gambar'] ?>" height="80" weight="80" > <br>
	Gambar : <input type="file" name="gambar" value=""> <br>
	Deskripsi : <textarea name="deskripsi" rows="8" cols="20"></textarea> <br>
	Nama Pelapor : <input type="text" name="nama_pelapor" value="<?php echo $data['nama_pelapor'] ?>"> <br>
	No HP Pelapor : <input type="text" name="no_hp" value="<?php echo $data['no_hp_pelapor'] ?>"> <br>
	<button type="submit"> Upload ! </button>
<?php } ?>
</form>