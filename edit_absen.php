<?php
$id = $_GET['id'];
include 'model.php';
$model = new Model();
$data = $model->edit_absen($id);
?>

<!doctype html>
<html lang="en">

<head>
	<title>Edit Absen Mahasiswa</title>
</head>

<body>
	<h1>Edit Absen Mahasiswa</h1>
	<a href="absen.php">Kembali</a>
	<br><br>
	<form action="proses.php" method="post">
		<label>ID Absen</label>
		<br>
		<input type="text" name="idabsen" value="<?php echo $data->idabsen ?>">
		<br>
		<label>Tanggal absen</label>
		<br>
		<input type="date" name="tglabsen" value="<?php echo $data->tglabsen ?>">
		<br>
		<label>Absen Masuk</label>
		<br>
		<input type="time" name="absenmasuk" value="<?php echo $data->absenmasuk ?>">
		<br>
		<label>Absen Keluar</label>
		<br>
		<input type="time" name="absenkeluar" value="<?php echo $data->absenkeluar ?>">
		<br>
		<label>ID Dosen</label>
		<br>
		<input type="number" name="iddosen"> value="<?php echo $data->iddosen ?>">
		<br>
		<label>Sesi</label>
		<br>
		<input type="number" name="sesi" value="<?php echo $data->sesi ?>">
		<br>
		<label>kelas sesi</label>
		<br>
		<input type="textr" name="kelassesi" value="<?php echo $data->kelassesi ?>">
		<br>
		<br><br>
		<button type="submit" name="submit_edit_absen">Submit</button>
	</form>
</body>
</html>