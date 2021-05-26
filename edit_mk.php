<?php
$id = $_GET['nim'];
include 'model.php';
$model = new Model();
$data = $model->edit($id);
?>
<!doctype html>
<html lang="en">
<head>
<title>Edit Matakuliah</title>
</head>
<body>
<h1>Edit Matakuliah</h1>
<a href="matakuliah.php">Kembali</a><br><br>
<form action="proses.php" method="post">
<label>ID MK</label>
<br>
<input type="number" name="idmk" value="<?php echo $data->idmk ?>">
<br>
<label>Nama MK</label>
<br>
<input type="text" name="namamk" value="<?php echo $data->namamk ?>">
<br>
<label>SKS</label>
<br>
<input type="number" name="sks" value="<?php echo $data->sks ?>">
<br>
<label>Semester</label>
<br>
<input type="number" name="semester" value="<?php echo $data->semester ?>">
<br>
<label>ID Prodi</label>
<br>
<input type="number" name="idprodi" value="<?php echo $data->kodeprodi ?>">
<br>
<br><br>
<button type="submit" name="submit_edit">Submit</button>
</form>
</body>
</html>