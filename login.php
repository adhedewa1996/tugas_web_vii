<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Login Form </title>
		<link rel="stylesheet" href="css/bootstrap.css">

  </head>
<body class="text-center">

	<h1 align="center"> LOGIN </h1>
	<form action="aksi_login.php" method="POST" class="form-signin">
	<table align="center">
	<tr>
		<td class="sr-only"> Username </td>
		<td> <input type="text" name="username" value="" class="form-control" placeholder="username" required autofocus> </td>
	</tr>
	<tr>
		<td class="sr-only"> Password </td>
		<td> <input type="password" name="password" value="" class="form-control" placeholder="Password" required> </td>
	</tr>
	<tr>
		<td colspan="2" align="center">
			<button type="submit" class="btn btn-lg btn-primary btn-block"> Login </button>
		</td>
	</tr>
	<tr>
		<td colspan="2" align="center">
			<a href="register.php">  Belum punya akun? Klik disini  </a>
		</td>
	</tr>
	</table>
	</form>

	<script src="js/jquery-3.3.1.min.js" charset="utf-8"></script>
	<script src="js/bootstrap.js" charset="utf-8"></script>

</body>
</html>
