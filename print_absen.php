<?php
include 'model.php';
$model = new Model();
$index = 1;
?>
<!doctype html>
<html lang="en">

<head>
	<title>Cetak Data</title>
	<style>
		h1 {
		text-align: center;
		}
		table, 
		td, 
		th {
		border: 1px solid #ddd;
		text-align: left;
		}
		table {
		border-collapse: collapse;
		width: 100%;
		}
		th, 
		td {
		padding: 15px;
		}
	</style>
</head>

<body>
	<h1>Laporan Data Absen</h1>
	<table>
		<thead>
			<tr>
				<th>ID Absen</th>
				<th>Tanggal Absen</th>
				<th>Absen Masuk</th>
				<th>Absen Keluar</th>
				<th>Id Dosen</th>
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
					</tr>
				<?php endforeach;
			} else{ ?>
				<tr>
					<td colspan="9">Belum ada data pada tabel Absen</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
	<script>
	window.print();
	</script>
</body>
</html>