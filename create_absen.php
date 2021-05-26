<!doctype html>
<html lang="en">
<head>
	<title>Tambah Absen Mahasiswa</title>
</head>

<body>
	<h1>Tambah Absen Mahasiswa</h1>
	<a href="absen.php">Kembali</a>
	<br><br>
	<form action="proses.php" method="post">
		<label>ID Absen</label>
		<br>
		<input type="text" name="idabsen">
		<br>
		<label>Tanggal absen</label>
		<br>
		<input type="date" name="tglabsen">
		<br>
		<label>Absen Masuk</label>
		<br>
		<input type="time" name="absenmasuk">
		<br>
		<label>Absen Keluar</label>
		<br>
		<input type="time" name="absenkeluar">
		<br>
		<label>ID Dosen</label>
		<br>
		<input type="number" name="iddosen">
		<br>
		<label>Sesi</label>
		<br>
		<input type="number" name="sesi">
		<br>
		<label>kelas sesi</label>
		<br>
		<input type="text" name="kelassesi">

		<br><br>
		<button type="submit" name="submit_simpan_tblabsen">Submit</button>
		<button type="reset">Reset</button>
	</form>
</body>
</html>