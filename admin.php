<<<<<<< HEAD
<?php
=======
<a href="unggah.php"> (+) Klik Here to Upload (admin) </a>

<?php 
>>>>>>> 5b4dd54384783312d11b31ad381fdff05079a1d3
	include 'koneksi.php';

	//session_start();
	//if(!isset($_SESSION['id'])) {
		//arahkan ke login
	//	header('location:login.php');
	//}

	$query = 'SELECT * FROM laporan_barang_hilang';
	$hasil = mysqli_query($koneksih,$query);
?>

<<<<<<< HEAD
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title> BarangKuHilang.com </title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<script type="text/javascript" src="js/bootstrap.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/jquery-3.2.0.min.js"></script>
	</head>
<body>

<br>
<div class="container">
<a href="unggah.php" class="btn btn-primary btn-md"> (+) Klik Here to Upload (admin) </a> <br><br>
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 align ="center"> DATA BARANG HILANG </h3>
			</div>
			<table border="1" class="table table-striped table-hover align-middle" style="font-family:Times">
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
		</div>
</div>

<script src="js/jquery-3.3.1.min.js" charset="utf-8"></script>
<script src="js/bootstrap.js" charset="utf-8"></script>
</body>
</html>
=======
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
>>>>>>> 5b4dd54384783312d11b31ad381fdff05079a1d3
