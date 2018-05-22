<<<<<<< HEAD
<?php
=======
<h1> Update File </h1>
<?php 
>>>>>>> 5b4dd54384783312d11b31ad381fdff05079a1d3
	include 'koneksi.php';

	$query = "SELECT * FROM laporan_barang_hilang WHERE id='".$_GET['id']."'";

	$hasil = mysqli_query($koneksih,$query);

	//$data = mysqli_fetch_assoc($hasil);
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
<body class="text-center">

<div class="container">
	<div class="panel-heading">
		<h3 align ="center"> UPDATE FILE </h3>
	</div>

	<form action="update.php" method="post" enctype="multipart/form-data">
		<?php while($data = mysqli_fetch_assoc($hasil)) { ?>
		<input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
		<table align="center" border="0" class="table table-striped table-hover" style="font-family:Times">
		<tr>
			<td> Nama : </td>
			<td> <input type="text" name="nama" value="<?php echo $data['nama_barang'] ?>" style="width:100%"> </td>
		</tr>
		<tr>
			<td> Gambar : </td>
			<td> <input type="file" name="gambar" value="<?php echo $data['gambar'] ?>" style="width:100%"> </td>
		</tr>
		<tr>
			<td> Deskripsi : </td>
			<td> <textarea name="deskripsi" rows="8" cols="20" style="width:100%"> <?php echo $data['deskripsi'] ?></textarea> </td>
		</tr>
		</tr>
			<td> Nama Pelapor : </td>
			<td> <input type="text" name="nama_pelapor" value="<?php echo $data['nama_pelapor'] ?>" style="width:100%"> </td>
		</tr>
		<tr>
			<td> No HP Pelapor : </td>
			<td> <input type="text" name="no_hp" value="<?php echo $data['no_hp_pelapor'] ?>" style="width:100%"> </td>
		</tr>
		<tr>
			<td colspan="2" align="center"><button type="submit" class="btn btn-primary btn-md"> Upload ! </button></td>
		</tr>
		</table>
		<?php } ?>
	</form>
</div>

<script src="js/jquery-3.3.1.min.js" charset="utf-8"></script>
<script src="js/bootstrap.js" charset="utf-8"></script>

</body>
</html>
=======

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
>>>>>>> 5b4dd54384783312d11b31ad381fdff05079a1d3
