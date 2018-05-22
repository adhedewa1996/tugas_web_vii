<<<<<<< HEAD
<?php
=======
<a href="logout.php" align="left"> Logout </a>
<h1 align="center"> KATALOG BARANG HILANG (wkwkwk >:v ) </h1>

<?php 
>>>>>>> 5b4dd54384783312d11b31ad381fdff05079a1d3
	include 'koneksi.php';

	//cek user udah login belom
	session_start();
	if(!isset($_SESSION['id'])) {
<<<<<<< HEAD
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

<div class="p-3 mb-2 bg-primary text-black">
	<!-- Navigation -->
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

	<!-- Page Content -->

	<br> <br>
	<div class="p-3 mb-2 bg-primary text-black">
	<div class="row">
			<div class="col-lg-6">
						<h1 align="center"> <a class="text-white"> BARANG HILANG TERBARU </a> </h1> <br>
						<div id="carouselExampleIndicators" class="carousel slide my-10" data-ride="carousel">
							<ol class="carousel-indicators" >
								<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
								<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
								<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
							</ol>
							<div class="carousel-inner" role="listbox">
								<div class="carousel-item active">
									<img class="d-block img-fluid" src="upload/logo.jpg" alt="First slide" height="900px" width="373px" align="center">
								</div>
								<div class="carousel-item">
									<img class="d-block img-fluid" src="upload/meong.jpg" alt="Second slide" height="900px" width="350px" align="center">
								</div>
								<div class="carousel-item">
									<img class="d-block img-fluid" src="upload/jane.jpg" alt="Second slide" height="900px" width="500px" align="center">
								</div>
							</div>
							<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
					</div>
			</div>
			<div class="p-3 mb-3 bg-info text-black">
					<iframe src="artikel1.html" border="0" framspacing="0" marginheight="0" marginwidth="0" vspace="0" hspace="0" frameborder="0" height="900px" scrolling="no" width="900px"></iframe>
			</div>
		</div>
	</div>
</div>

	<!-- End of Page Content -->

	<footer class="py-3 footer-dark bg-dark footer fixed-bottom">
		<div class="container">
			<p class="m-0 text-center text-white">Copyright &copy; Ezekiel </p>
		</div>
		<!-- /.container -->
	</footer>
</div>


<script src="js/jquery-3.3.1.min.js" charset="utf-8"></script>
<script src="js/bootstrap.js" charset="utf-8"></script>
</body>
</html>
=======
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
>>>>>>> 5b4dd54384783312d11b31ad381fdff05079a1d3
