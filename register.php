<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Login Form </title>
		<link rel="stylesheet" href="css/bootstrap.css">

  </head>
<body class="text-center">

	<h1 align="center"> DAFTAR </h1>
	<form action="aksi_register.php" method="POST">
	<table align="center">
	<tr>
		<td class="sr-only"> Username </td>
		<td> <input type="text" name="username" value="" class="form-control" placeholder="Username" required autofocus> </td>
	</tr>
	<tr>
		<td class="sr-only"> Password </td>
		<td> <input type="password" name="password" value="" class="form-control" placeholder="Password" required> </td>
	</tr>
	<tr>
		<td class="sr-only"> Ulangi Pssword </td>
		<td> <input type="password" name="ulangi_password" value="" class="form-control" placeholder="Ulangi Password" required> </td>
	</tr>
	<tr>
		<td> </td>
		<td>
			<a href="login.php"> <button type="button" class="btn btn-lg btn-danger btn-block"> Kembali </button> </a>
			<button type="submit" class="btn btn-lg btn-primary btn-block"> Simpan </button>
		</td>
	</tr>
	</table>
	</form>

	<script src="js/jquery-3.3.1.min.js" charset="utf-8"></script>
	<script src="js/bootstrap.js" charset="utf-8"></script>

	</body>
	</html>
