<!doctype html>
<html lang="en">
<head>
	<title>Tambah Data Prodi</title>
</head>

<body>
	<h1>Tambah Data Prodi</h1>
	<a href="prodi.php">Kembali</a>
	<br><br>
	<form action="proses.php" method="post">
		<label>Id Prodi</label>
		<br>
		<input type="number" name="idprodi">
		<br>
		<label>Nama Prodi</label>
		<br>
		<input type="text" name="namaprodi">
		<br><br>
		<button type="submit" name="submit_simpan_tblprodi">Submit</button>
		<button type="reset">Reset</button>
	</form>
</body>
</html>