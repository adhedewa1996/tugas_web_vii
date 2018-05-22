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

<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title> BarangKuHilang.com </title>
		<link rel="stylesheet" href="css/bootstrap.css">
	</head>
<body>

<!-- Navigation -->
<div class="p-3 mb-2 bg-primary text-black">

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

<br><br><br>
<div class="row">
		<div class="col-lg-3">
			<div class="p-3 mb-3 bg-info text-white">
				<p class="text-justify">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
			</div>
		</div>
		<div class="col-lg-9">
					<h1> <a style="color:white"> KATALOG BARANG HILANG </a> </h1> <br>
					<div id="carouselExampleIndicators" class="carousel slide my-10" data-ride="carousel">
						<table border="0" align="center" >
						  <tr align="center">
						    <?php while($data = mysqli_fetch_assoc($hasil)) { ?>
						    <td>
						      <br>
						      <img src="<?php echo $data['gambar'] ?>" height="400px" width="400px" style="border-radius:50%" >
						      <h4 style="color:white" >
						        <?php echo $data['nama_barang'] ?>
						      </h4>
						      <a href="detail.php?id=<?php echo $data['id'] ?>">
						        <button type="button" class="btn btn-lg btn-primary btn-block"> Detail ~> </button>
						      </a>
						    </td>
						    <?php if (($no%3)==0) { ?>
						      </tr>
						      <tr align="center"> <br><br>
						    <?php } ?>
						    <?php $no++ ?>
								<?php } ?>
							</tr>
						</table>
						</div>
					</div>
				</div>

	<footer class="py-3 footer-dark bg-dark footer fixed-bottom">
		<div class="container">
			<p class="m-0 text-center text-white">Copyright &copy; Ezekiel </p>
		</div>
		<!-- /.container -->
	</footer> <br> <br> <br>
</div>

<script src="js/jquery-3.3.1.min.js" charset="utf-8"></script>
<script src="js/bootstrap.js" charset="utf-8"></script>
</body>
</html>
