<h1 align="center"> Detail Barang </h1>

<?php 
	include 'koneksi.php';

	//session_start();
	//if(!isset($_SESSION['id'])) {
	//	//arahkan ke login
	//	header('location:login.php');
	//}

	$id = $_GET['id'];
	$query = "SELECT * FROM laporan_barang_hilang WHERE id='".$id."'";
	$hasil = mysqli_query($koneksih,$query);
?>

<table border="0" align="center">
	<tr align="center"> 
		<?php if ($data = mysqli_fetch_assoc($hasil)) { ?>
		<td> 
			<br>
			<img src="<?php echo $data['gambar'] ?>" height="200px" width="200px" >
			<h4>
				<?php echo $data['nama_barang'] ?>
			</h4> 
			<a href="index.php"> 
				<button type="button"> <~ Kembali </button> 
			</a>
			<a href="#"> 
				<button type="button"> Ambil ~> </button> 
			</a>
		</td>
		<td align="left"> 
			<?php echo "Deskripsi     : ".$data['deskripsi'] ?> <br>
			<?php echo "Nama Pelapor  : ".$data['nama_pelapor'] ?> <br>
			<?php echo "No HP Pelapor : ".$data['no_hp_pelapor'] ?> <br>
		</td>
		<?php } ?>
	</tr>
</table>