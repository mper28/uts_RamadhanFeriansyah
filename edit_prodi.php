<?php
$kodeprodi = $_GET['kodeprodi'];
include 'model.php';
$model = new Model();
$data = $model->edit_tblprodi($id);
?>

<!doctype html>
<html lang="en">

<head>
	<title>Edit Data Prodi</title>
</head>

<body>
	<h1>Edit Data Prodi</h1>
	<a href="prodi.php">Kembali</a>
	<br><br>
	<form action="proses.php" method="post">
		<label>ID Prodi</label>
		<br>
		<input type="number" name="idprodi" value="<?php echo $data->idprodii ?>">
		<br>
		<label>Nama Prodi</label>
		<br>
		<input type="text" name="namaprodi" value="<?php echo $data->namaprodi ?>">
		<br>
		<br><br>
		<button type="submit" name="submit_edit_mhs">Submit</button>
	</form>
</body>
</html>