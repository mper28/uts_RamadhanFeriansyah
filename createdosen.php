<!doctype html>
<html lang="en">
<head>
	<title>Tambah Data Dosen</title>
</head>

<body>
	<h1>Tambah</h1>
	<a href="index.php">Kembali</a>
	<br><br>
	<form action="proses.php" method="post">
	<label>ID Dosen</label>
		<br>
		<input type="number" name="iddosen">
		<br>
		<label>NIDN</label>
		<br>
		<input type="number" name="nidn">
		<br>
		<label>NIP</label>
		<br>
		<input type="number" name="nip">
		<br>
		<label>Nama Dosen</label>
		<br>
		<input type="text" name="namadosen">
		<br>
		<label>ID Prodi</label>
		<br>
		<input type="number" name="idprodi">
		<br>
		<br><br>
		<button type="submit" name="submit_simpan">Submit</button>
		<button type="reset">Reset</button>
	</form>
</body>
</html>