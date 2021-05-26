<?php
include 'model.php';
$model = new Model();
$index = 1;
?>
<!doctype html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

	
<title>Data Mahasiswa</title>
</head>
<body>
</head>
<body>
<div class="container">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="#"><b>UTS Ramadhan FeriAnsyah</b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav mr-auto">
  <liclass="nav-item">
  <a class="nav-link" href="index.php">Dosen</a>
  <li class="nav-item active">
  <a class="nav-link" href="jadwal.php">Jadwal</a>
  </li>
  <li class="nav-item active">
  <a class="nav-link" href="absen.php">Absen</a>
  </li>
  <li class="nav-item">
  <a class="nav-link" href="prodi.php">Prodi</a>
  <li class="nav-item">
  <a class="nav-link" href="matakuliah.php">Mata Kuliah</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<h1>Data Absen </h1>
<a href="create_absen.php">Tambah Data Absen</a>
<br>
<a href="print_absen.php" target="_blank">Cetak Data</a>
<br><br>
<table border="1">
  <thead>
    <tr>
    th>No.</th>
				<th>ID Absen</th>
				<th>Tanggal Absen</th>
				<th>Absen Masuk</th>
				<th>Absen Keluar</th>
				<th>ID Dosen</th>
				<th>Sesi</th>
				<th>Kelas Sesi</th>
    </tr>
  </thead>
<tbody>

<?php
$result = $model->tampil_tblabsen();
if ( !empty($result) ) {
  foreach ($result as $data): ?>
    <tr>
            <td><?=$index++ ?></td>
						<td><?=$data->idabsen ?></td>
						<td><?=$data-tglabsen ?></td>
						<td><?=$data->absenmasuk ?></td>
						<td><?=$data->absenkeluar ?></td>
						<td><?=$data->iddosen ?></td>
						<td><?=$data->sesi?></td>
						<td><?=$data->kelassesi?></td>
      <td>
        <a name="edit" id="edit" href="edit_absen.php?id=<?=$data->idabsen ?>">Edit</a>
        <a name="hapus_absen" id="hapus_absen" href="proses.php?id=<?=$data->idabsen ?>">Delete</a>
      </td>
    </tr>
  <?php endforeach;
} else{ ?>
<tr>
<td colspan="9">Belum ada data pada tabel Absen.</td>
</tr>
<?php } ?>
</tbody>
</table>
</div>
</body>
</html>