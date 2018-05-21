<h1> Upload File </h1>
<form action="upload.php" method="post" enctype="multipart/form-data">
	Nama : <input type="text" name="nama" value=""> <br>
	Gambar : <input type="file" name="gambar" value=""> <br>
	Deskripsi : <textarea name="deskripsi" rows="8" cols="20"></textarea> <br>
	Nama Pelapor : <input type="text" name="nama_pelapor"> <br>
	No HP Pelapor : <input type="text" name="no_hp"> <br>
	<button type="submit"> Upload ! </button>
</form>