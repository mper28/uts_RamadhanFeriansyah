<?php
$id = $_GET['nim'];
include 'model.php';
$model = new Model();
$data = $model->edit($id);?>
<!doctype html>
<html lang="en">
<head>
	<title>Edit Tabel Dosen/title>
</head>

<!doctype html>
<html lang="en">

<head>
	<title>Edit Dosen/title>
</head>

<body>
	<h1>Edit Dosen</h1>
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
		<button type="submit" name="submit_edit">Submit</button>
	</form>
</body>
</html>