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
	<h1>Laporan Data Dosen</h1>
	<table>
		<thead>
			<tr>
				<th>ID Dosen</th>
				<th>NIDN</th>
				<th>NIP</th>
				<th>Nama Dosen</th>
				<th>ID Prodi</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$result = $model->tampil_tbldosen();
			if ( !empty($result) ) {
				foreach ($result as $data): ?>
					<tr>
						<td><?=$index++ ?></td>
						<td><?=$data->iddosen ?></td>
						<td><?=$data->nidn ?></td>
						<td><?=$data->nip?></td>
						<td><?=$data->namadosen ?></td>
						<td><?=$data->idprodi ?><td>
					</tr>
				<?php endforeach;
			} else{ ?>
		<tr>
			<td colspan="9">Belum ada data pada tabel Dosen.</td>
		</tr>
		<?php } ?>
		</tbody>
	</table>
	<script>
	window.print();
	</script>
</body>
</html>