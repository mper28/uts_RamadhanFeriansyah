<!doctype html>
<html lang="en">
<head>
<title>Tambah Data Matakuliah</title>
</head>
<body>
<h1>Tambah</h1>
<a href="matakuliah.php">Kembali</a><br><br>
<form action="proses.php" method="post">
<label>ID MK</label>
<br>
<input type="number" name="iddemk">
<br>
<label>Nama MK</label>
<br>
<input type="text" name="namamk">
<br>
<label>SKS</label>
<br>
<input type="number" name="sks">
<br>
<label>Semester</label>
<br>
<input type="number" name="semester">
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
