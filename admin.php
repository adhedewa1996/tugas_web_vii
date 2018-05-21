<a href="unggah.php"> (+) Klik Here to Upload (admin) </a>

<?php 
	include 'koneksi.php';

	//session_start();
	//if(!isset($_SESSION['id'])) {
		//arahkan ke login
	//	header('location:login.php');
	//}

	$query = 'SELECT * FROM laporan_barang_hilang';
	$hasil = mysqli_query($koneksih,$query);
?>

<table border="1">
	<tr align="center" >
		<td> No </td>
		<td> Nama </td>
		<td> Gambar </td>
		<td> Deskripsi </td>
		<td> Nama Pelapor </td>
		<td> No HP Pelapor </td>
		<td> Aksi </td> 
	</tr>
	<?php while($data = mysqli_fetch_assoc($hasil)) { ?>
	<tr align="center"> 
		<td>
			<?php echo $data['id'] ?> 
		</td>
		<td> 
			<?php echo $data['nama_barang'] ?>
		</td>
		<td> 
			<img src="<?php echo $data['gambar'] ?>" height="80" weight="80" >
		</td>
		<td> 
			<?php echo $data['deskripsi'] ?>
		</td>
		<td>
			<?php echo $data['nama_pelapor'] ?>
		</td>
		<td>
			<?php echo $data['no_hp_pelapor'] ?>
		</td>
		<td>
			<a href="ubah.php?id=<?php echo $data['id'] ?>"> Ubah </a>
			&ensp;
			<a onclick="return(confirm('Hountou Des Ka ??? (/!_!)~ '))" href="delete.php?id=<?php echo $data['id'] ?>"> Hapus </a>
		</td>
	</tr>
	<?php } ?>
</table>