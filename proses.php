<?php
include 'model.php';

// tabel dosen
if (isset($_POST['submit_simpan_tbldosen'])) {
    $iddosen = $_POST['iddosen'];
    $nidn = $_POST['nidn'];
    $nip = $_POST['nip'];
    $namadosen = $_POST['namadosen'];
    $idprodi = $_POST['idprodi'];
    $model = new Model();
    $model->insert_tbldosen($iddosen, $nidn, $nipy, $namadosen, $idprodi);
    header('location:index.php');
   }
{
if (isset($_POST['submit_edit_tbldosen'])) 
    $iddosen = $_POST['iddosen'];
    $nidn = $_POST['nidn'];
    $nip = $_POST['nip'];
    $namadosen = $_POST['namadosen'];
    $idprodi = $_POST['idprodi'];
    $model = new Model();
    $model->insert_tbldosen($iddosen, $nidn, $nipy, $namadosen, $idprodi);
    header('location:index.php');
}
if (isset($_GET['iddosen'])) {
 $id = $_GET['iddosen'];
 $model = new Model();
 $model->delete($iddosen);
 header('location:index.php');
}
// tabel absen
if (isset($_POST['submit_simpan_tblabsen'])) {
    $idabsen = $_POST['idabsen'];
    $tglabsen = $_POST['tglabsen'];
    $absenmasuk = $_POST['absenmasuk'];
    $keluar= $_POST['absenkeluar'];
    $iddosen= $_POST['iddosen'];
    $sesi= $_POST['sesi'];
    $kelassesi= $_POST['kelassesi'];
    $status = $_POST['status'];
    $model = new Model();
    $model->insert_tblabsen($idabsen, $tglabsen, $absenmasuk, $absenkeluar, $iddosen, $sesi, $kelassesi, $status);
 header('location:absen.php');
}   
if (isset($_POST['submit_edit_tblabsen'])) {
    $idabsen = $_POST['idabsen'];
    $tglabsen = $_POST['tglabsen'];
    $absenmasuk = $_POST['absenmasuk'];
    $keluar= $_POST['absenkeluar'];
    $iddosen= $_POST['iddosen'];
    $sesi= $_POST['sesi'];
    $kelassesi= $_POST['kelassesi'];
    $status = $_POST['status'];
 $model = new Model();
 $model->update_tblabsen($idabsen, $tglabsen, $absenmasuk, $absenkeluar, $iddosen, $sesi, $kelassesi, $status);
 header('location:absen.php');
}
if (isset($_GET['idabsen'])) {
 $idabsen = $_GET['idabsen'];
 $model = new Model();
 $model->delete_tblabsen($idabsen);
 header('location:absen.php');
}
// tabel jadwal
if (isset($_POST['submit_simpan_tbljadwal'])) {
    $id = $_POST['id'];
    $iddosen= $_POST['iddosen'];
    $hari= $_POST['hari'];
    $thnakademik= $_POST['thnakademik'];
    $semester= $_POST['semester'];
    $idmk= $_POST['idmk'];
    $sesi = $_POST['sesi'];
    $jammasuk = $_POST['jammasuk'];
    $jamkeluar = $_POST['jamkeluar'];
    $kelas= $_POST['kelas'];
    $ruang= $_POST['ruang'];
    $iddosen= $_POST['iddosen'];
    $status = $_POST['status'];
    $kelassesi= $_POST['kelassesi'];
    $model = new Model();
    $model->insert_absen($id, $iddosen, $hari, $thnakademik, $semester, $idmk, $sesi, $jammasuk, $jamkeluar, $kelas, $ruang, $status, $kelassesi);
 header('location:jadwal.php');
}   
if (isset($_POST['submit_edit_tblabsen'])) {
    $id = $_POST['id'];
    $iddosen= $_POST['iddosen'];
    $hari= $_POST['hari'];
    $thnakademik= $_POST['thnakademik'];
    $semester= $_POST['semester'];
    $idmk= $_POST['idmk'];
    $sesi = $_POST['sesi'];
    $jammasuk = $_POST['jammasuk'];
    $jamkeluar = $_POST['jamkeluar'];
    $kelas= $_POST['kelas'];
    $ruang= $_POST['ruang'];
    $iddosen= $_POST['iddosen'];
    $status = $_POST['status'];
    $kelassesi= $_POST['kelassesi'];
    $model = new Model();
    $model->update_absen($id, $iddosen, $hari, $thnakademik, $semester, $idmk, $sesi, $jammasuk, $jamkeluar, $kelas, $ruang, $status, $kelassesi);
    header('location:jadwal.php');
}
if (isset($_GET['id'])) {
 $id = $_GET['id'];
 $model = new Model();
 $model->delete_tblabsen($id);
 header('location:jadwal.php');
}
// tabel mata kuliah
if (isset($_POST['submit_simpan'])) {
    $idmk = $_POST['idmk'];
    $namamk = $_POST['namamk'];
    $sks = $_POST['sks'];
    $semester = $_POST['semester'];
    $idprodi = $_POST['idprodi'];
    $model = new Model();
    $model->insert_tblmkkuliah($idmk, $namamk, $sks, $semester, $idprodi, );
    header ('location : matakuliah.php');
    }
    if (isset($_POST['submit_edit'])) {
    $kodemk = $_POST['kodemk'];
    $namamk = $_POST['namamk'];
    $sks = $_POST['sks'];
    $semester = $_POST['semester'];
    $kodeprodi = $_POST['kodeprodi'];
    $model = new Model();
    $model->update_tblmkkuliah($idmk, $namamk, $sks, $semester, $idprodi, );
    header('location:matakuliah.php');
    }
    if (isset($_GET['idmk'])) {
     $kodemk = $_GET['idmk'];
     $model = new Model();
     $model->delete_tblmkkuliah($kodemk);
     header('location:matakuliah.php');
    }
// tabel prodi
if (isset($_POST['submit_simpan_tblprodi'])) {
 $idprodi = $_POST['idprodi'];
 $namaprodi = $_POST['namaprodi'];
 $model = new Model();
 $model->insert_tblprodi($idprodi, $namaprodi);
 header('location:prodi.php');
}
if (isset($_POST['submit_edit_tblprodi'])) {
    $idprodi = $_POST['idprodi'];
    $namaprodi = $_POST['namaprodi'];
    $model = new Model();
 $model->update_tblprodi($idprodi, $namaprodi);
 header('location:prodi.php');
}
if (isset($_GET['id'])) {
 $idprodi = $_GET['idprodi'];
 $namaprodi=$_get['namaprodi'];
 $model = new Model();
 $model->delete_tblprodi($idprodi);
 header('location:prodi.php');
}