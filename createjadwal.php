<!doctype html>
<html lang="en">
<head>
	<title>Tambah Data Jadwal</title>
</head>

<body>
	<h1>Tambah</h1>
	<a href="jadwal.php">Kembali</a>
	<br><br>
	<form action="proses.php" method="post">
		<label>ID></label>
		<br>
		<input type="number" name="id">
		<br>
		<label>ID Dosen</label>
		<br>
		<input type="number" name="iddosen">
		<br>
		<label>Hari</label>
		<br>
		<input type="text" name="hari">
		<br>
		<label>Tahun Akademik</label>
		<br>
		<input type="number" name="thnakademik">
		<br>
		<label>Semester</label>
		<br>
		<input type="number" name="semester">
		<br>
		<label>ID Matakuliah</label>
		<br>
		<input type="number" name="idmk">
		<br>
		<label>Sesi</label>
		<br>
		<input type="number" name="sesi">
		<br>
		<label>Jam Masuk</label>
		<br>
		<input type="time" name="jammasuki">
		<br>
		<label>Jam Keluar</label>
		<br>
		<input type="time" name="jamkeluar">
		<br>
		<label>Kelas</label>
		<br>
		<input type="text" name="kelas">
		<br>
		<label>Ruang</label>
		<br>
		<input type="text" name="ruangi">
		<br>
		<label>Kelas Sesi</label>
		<br>
		<input type="text" name="kelassesi">
		<br>
		<br><br>
		<button type="submit" name="submit_simpan">Submit</button>
		<button type="reset">Reset</button>
	</form>
</body>
</html>