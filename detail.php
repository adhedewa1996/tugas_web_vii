<<<<<<< HEAD
<?php
	include 'koneksi.php';

	session_start();
	if(!isset($_SESSION['id'])) {
		//arahkan ke login
		header('location:login.php');
	}
=======
<h1 align="center"> Detail Barang </h1>

<?php 
	include 'koneksi.php';

	//session_start();
	//if(!isset($_SESSION['id'])) {
	//	//arahkan ke login
	//	header('location:login.php');
	//}
>>>>>>> 5b4dd54384783312d11b31ad381fdff05079a1d3

	$id = $_GET['id'];
	$query = "SELECT * FROM laporan_barang_hilang WHERE id='".$id."'";
	$hasil = mysqli_query($koneksih,$query);
?>

<<<<<<< HEAD
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title> BarangKuHilang.com </title>
		<link rel="stylesheet" href="css/bootstrap.css">
	</head>
<body>
<br>
	<!-- Navigation -->
	<div class="p-3 mb-2 bg-primary text-white">
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
			<div class="container">
				<a class="navbar-brand" href="#">BarangkuHilang.com</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="index.php">Beranda <span class="sr-only">(current)</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="katalog.php" style="color:lime">Katalog</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Tentang</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Kontak</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="logout.php" align="left" style="color:red">Logout</a>
					</li>
				</ul>
				</div>
			</div>
		</nav>
<br> <br> <br>

<!--div class="container"-->

	<h1 align="center" style="color:white"> DETAIL BARANG HILANG </h1> <br>
	<div class="row">
		<?php if ($data = mysqli_fetch_assoc($hasil)) { ?>
			<div class="col-lg-3">
				<div class="bg-warning">  <br><br><br>
					<img class="d-block img-fluid " src="<?php echo $data['gambar'] ?>" height="400px" width="400px" style="border-radius:50%" align="center">
				 <br><br><br></div>
			</div>
			<div class="col-lg-8">
				<table class="table table-active" style="font-family:Times; font-size:30px; color:white" >
					<tr>
						<td> NAMA BARANG HILANG </td> <td></td>
						<td> <?php echo $data['nama_barang'] ?> </td>
					</tr>
					<tr>
						<td> DESKRIPSI </td> <td></td>
						<td> <?php echo $data['deskripsi'] ?> <br> </td>
					</tr>
					<tr>
						<td> NAMA PELAPOR </td> <td></td>
						<td> <?php echo $data['nama_pelapor'] ?> <br> </td>
					</tr>
					<tr>
						<td> NO HP PELAPOR </td> <td></td>
						<td> <?php echo $data['no_hp_pelapor'] ?> <br> </td>
					</tr>
				<table>
				</div>
		</div>
		<?php } ?>
<!--/div-->

<div class="row">
	<div class="col-lg-4">
	</div>
	<div class="col-lg-4" align="center">
		<br><br><br><br><br>
			<a href="katalog.php">
				<button type="button" class="btn btn-lg btn-primary btn-block"> <~ Kembali </button>
			</a>
			<br>
			<a href="#">
				<button type="button" class="btn btn-lg btn-primary btn-block"> Ambil ~> </button>
			</a>
</div>
</div>



<footer class="py-3 footer-dark bg-dark footer fixed-bottom">
	<div class="container">
		<p class="m-0 text-center text-white">Copyright &copy; Ezekiel </p>
	</div>
	<!-- /.container -->
</footer> <br><br><br><br><br><br><br><br><br><br><br><br>
</div>



<script src="js/jquery-3.3.1.min.js" charset="utf-8"></script>
<script src="js/bootstrap.js" charset="utf-8"></script>
=======
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
>>>>>>> 5b4dd54384783312d11b31ad381fdff05079a1d3
