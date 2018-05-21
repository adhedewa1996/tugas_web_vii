<a href="logout.php" align="left"> Logout </a>
<h1 align="center"> KATALOG BARANG HILANG (wkwkwk >:v ) </h1>

<?php 
	include 'koneksi.php';

	//cek user udah login belom
	session_start();
	if(!isset($_SESSION['id'])) {
		//arahkan ke login	
		header('location:login.php'); 
	}	

	$query = 'SELECT * FROM laporan_barang_hilang';
	$hasil = mysqli_query($koneksih,$query);		
	$no = 1;
?>

<table border="0" align="center">
	<tr align="center"> 
		<?php while($data = mysqli_fetch_assoc($hasil)) { ?>
		<td> 
			<br>
			<img src="<?php echo $data['gambar'] ?>" height="200px" width="200px" >
			<h4>
				<?php echo $data['nama_barang'] ?>
			</h4> 
			<a href="detail.php?id=<?php echo $data['id'] ?>"> 
				<button type="button"> Detail ~> </button> 
			</a>
		</td>
		<?php if (($no%2)==0) { ?>
			</tr>
			<tr align="center">
		<?php } ?>
		<?php $no++ ?>
		<?php } ?>
	</tr>
</table>