<?php
include 'connection.php';
class Model extends Connection
{
public function __construct()
 {
 $this->conn = $this->get_connection();
 }
 // tabel dosen
 public function insert_tbldosen($iddosen, $nidn, $nip, $namadosen, $idprodi)
 { $sql = "INSERT INTO tbldosen(iddosen, nidn, nip, namadosen, idprodi) 
	 VALUES ('$iddosen', '$nidn','$nip', '$namadosen', '$idprodi')";
	 $this->conn->query($sql);
 }
public function tampil_tbldosen()
{
	 $sql = "SELECT * FROM tbldosen";
	 $bind = $this->conn->query($sql);
	 while ($obj = $bind->fetch_object()) { 
	 	$baris[] = $obj;
	 }
	 if(!empty($baris)){
	 	return $baris;
	 }
}
public function edit_tbldosen($iddosen)
{
	 $sql = "SELECT * FROM tbldosen WHERE idosen='$iddosen'";
	 $bind = $this->conn->query($sql);
	 while ($obj = $bind->fetch_object()) {
		 $baris = $obj;
	 }
	 return $baris;
}
public function update_tbldosen($iddosen, $nidn, $nipy, $namadosen, $idprodi )
{
	 $sql = "UPDATE tbldosen SET kodedosen='$kodedosen', nidn='$nidn', nip='$nip',namadosen='$namadosen', idprodi='$idprodi' WHERE iddosen='$iddosen'";
	 $this->conn->query($sql);
}
public function delete_tbldosen($kodedosen)
{ 
	$sql = "DELETE FROM tbldosen WHERE iddosen='$iddosen'";
	$this->conn->query($sql);
}
// tabel absen
public function insert_tblabsen($kdabsen, $tglabsen, $masuk, $keluar, $kodedosen, $sesi, $kelassesi, $status)
{
	$sql = "INSERT INTO tblabsen (kdabsen, tglabsen, masuk, keluar, kodedosen, sesi, kelassesi, status) 
	VALUES ('$kdabsen', '$tglabsen' ,'$masuk', '$keluar', '$kodedosen', '$sesi', '$kelassesi', '$status')";
	$this->conn->query($sql);
}
public function tampil_tblabsen()
{
	 $sql = "SELECT * FROM tblabsen";
	 $bind = $this->conn->query($sql);
	 while ($obj = $bind->fetch_object()) { $baris[] = $obj;
 }
 if(!empty($baris)){
 	return $baris;
 }
}
public function edit_tblabsen($id)
{
	 $sql = "SELECT * FROM tblabsen WHERE kdabsen='$kdabsen'";
	 $bind = $this->conn->query($sql);
	 while ($obj = $bind->fetch_object()) {
	 	$baris = $obj;
 }
	 return $baris;
}
public function update_tblabsen($kdabsen, $tglabsen, $masuk, $keluar, $kodedosen, $sesi, $kelassesi, $status)
{
	 $sql = "UPDATE tblabsen SET kdabsen='$kdabsen', tglabsen='$tglabsen',  masuk='$masuk', keluar='$keluar', kodedosen='$kodedosen', sesi='$sesi',kelassesi='$kelassesi', status='$status' WHERE id='$id'";
	 $this->conn->query($sql);
}
public function delete_absen($id)
{ 
	$sql = "DELETE FROM tblabsen WHERE kdabsen='$kdabsen'";
	$this->conn->query($sql);
}
// tabel jadwal
public function insert_tbljadwal($id, $iddosen, $hari, $thnakademik, $semester, $idmk, $sesi, $jammasuk, $jamkeluar, $kelas, $ruang, $status, $kelassesi)
{
	$sql = "INSERT INTO tbljadwal (id, iddosen, hari, thnakademik, semester, idmk, sesi, jammasuk, jamkeluar, kelas, ruang, status, kelassesi) 
	VALUES ('$id', '$iddosen', '$hari', '$thnakademik', '$semester', '$idmk', '$ sesi','$jammasuk','$jamkeluar','kelas','$status','$kelassesi')";
	$this->conn->query($sql);
}
public function tampil_tbljadwal()
{
	 $sql = "SELECT * FROM tbljadwal";
	 $bind = $this->conn->query($sql);
	 while ($obj = $bind->fetch_object()) { $baris[] = $obj;
 }
 if(!empty($baris)){
 	return $baris;
 }
}
public function edit_tbljadwal($id)
{
	 $sql = "SELECT * FROM tbljadwal WHERE id='$id'";
	 $bind = $this->conn->query($sql);
	 while ($obj = $bind->fetch_object()) {
	 	$baris = $obj;
 }
	 return $baris;
}
public function update_tbljadwal($id, $iddosen, $hari, $thnakademik, $semester, $idmk, $sesi, $jammasuk, $jamkeluar, $kelas, $ruang, $status, $kelassesi)
{
	 $sql = "UPDATE tblabsen SET id='$id', iddosen='$$iddosen', hari='$hari', thnakademik='$thnakademik', semester='$semester',idmk='$idmk', sesi='$sesi', jammasuk='$jammasuk', jamkeluar='$jamkeluar', kelas='$kelas', ruang='$ruang',status='$status' kelassesi='$kelassesi', WHERE id='$id'";
	 $this->conn->query($sql);
}
public function delete_tbljadwal($id)
{ 
	$sql = "DELETE FROM tbljadwal WHERE id='$id'";
	$this->conn->query($sql);
}
// tabel mata kuliah
public function insert_tblmkkuliah($idmk, $namamk, $sks, $semester, $idprodi )
{
 $sql = "INSERT INTO tblmkkuliah (idmk, namamk, sks, semester, idprodi) VALUES
('$idmk', '$namamk', '$sks','$semester','$idprodi',)";
$this->conn->query($sql);
}

public function tampil_tblmkkuliah()
{
 $sql = "SELECT * FROM tblmkkuliah";
 $bind = $this->conn->query($sql);
 while  ($obj = $bind->fetch_object()) {
 $baris[] = $obj;
 }
 if(!empty($baris)){
 return $baris;
 }
}
public function edit_tblmkkuliah($id)
{
 $sql = "SELECT * FROM tblmkkuliah WHERE idmk='$idmk'";
 $bind = $this->conn->query($sql);
 while ($obj = $bind->fetch_object()) {
 $baris = $obj;
 }
 return $baris;
}
public function update_data_tblmkkuliah($idmk, $namamk, $sks, $semester, $idprodi )
{
 $sql = "UPDATE tblmkkuliah SET idmk='$idmk', namamk='$namamk', sks='$sks', semester='$semester', idprodi='$idprodi',
WHERE idmk='idmk'";
 $this->conn->query($sql);
} 
public function delete_data_tblmkkuliah($kodemk)
{
 $sql = "DELETE FROM tblmkkuliah WHERE idmk='$idmk'";
 $this->conn->query($sql);
}
 // tabel prodi

 public function insert_data_tblprodi ($idprodi, $namaprodi) 
{
 $sql = "INSERT INTO tblprodi (idprodi, namaprodi) VALUES
('$idprodi', '$namaprodi')";
$this->conn->query($sql);
}

public function tampil_data_tblprodi()
{
 $sql = "SELECT * FROM tblprodi";
 $bind = $this->conn->query($sql);
 while  ($obj = $bind->fetch_object()) {
 $baris[] = $obj;
 }
 if(!empty($baris)){
 return $baris;
 }
}
public function edit_data_tblprodi($id)
{
 $sql = "SELECT * FROM tblprodiWHERE idprodi='$idprodi'";
 $bind = $this->conn->query($sql);
 while ($obj = $bind->fetch_object()) {
 $baris = $obj;
 }
 return $baris;
}
public function update_data_tblprodi($kidprodi, $namaprodi)
{
 $sql = "UPDATE tblprodi SET idprodi='$idprodi', namaprodi='$namaprodi'
WHERE idprodi='$idprodi'";
 $this->conn->query($sql);
} 
public function delete_data_tblprodi($kodeprodi)
{
 $sql = "DELETE FROM tblprodi WHERE idprodi='$kodeprodi'";
 $this->conn->query($sql);
}
}