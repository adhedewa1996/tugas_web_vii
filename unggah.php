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
		<h3 align ="center"> UPLOAD FILE </h3>
	</div>
<form action="upload.php" method="post" enctype="multipart/form-data">
	<table align="center" border="0" class="table table-striped table-hover" style="font-family:Times">
	<tr>
		<td> Nama : </td>
		<td> <input type="text" name="nama" value="" style="width:100%"> </td>
	</tr>
	<tr>
		<td> Gambar : </td>
		<td> <input type="file" name="gambar" value="" style="width:100%"> </td>
	</tr>
	<tr>
		<td> Deskripsi : </td>
		<td> <textarea name="deskripsi" rows="8" cols="60" style="width:100%"></textarea> </td>
	</tr>
	</tr>
		<td> Nama Pelapor : </td>
		<td> <input type="text" name="nama_pelapor" style="width:100%"> </td>
	</tr>
	<tr>
		<td> No HP Pelapor : </td>
		<td> <input type="text" name="no_hp" style="width:100%"> </td>
	</tr>
	<tr>
		<td colspan="2" align="center"><button type="submit" class="btn btn-primary btn-md"> Upload ! </button></td>
	</tr>
	</table>
</form>
</div>

<script src="js/jquery-3.3.1.min.js" charset="utf-8"></script>
<script src="js/bootstrap.js" charset="utf-8"></script>

</body>
</html>
=======
<h1> Upload File </h1>
<form action="upload.php" method="post" enctype="multipart/form-data">
	Nama : <input type="text" name="nama" value=""> <br>
	Gambar : <input type="file" name="gambar" value=""> <br>
	Deskripsi : <textarea name="deskripsi" rows="8" cols="20"></textarea> <br>
	Nama Pelapor : <input type="text" name="nama_pelapor"> <br>
	No HP Pelapor : <input type="text" name="no_hp"> <br>
	<button type="submit"> Upload ! </button>
</form>
>>>>>>> 5b4dd54384783312d11b31ad381fdff05079a1d3
