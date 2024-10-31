<?php
$koneksi = mysqli_connect("localhost", "root", "", "gaji");

$nama= $_POST['nama'];
$jabatan = $_POST['jabatan'];
$masaKerja = $_POST['masaKerja'];
$gajiPokok = $_POST['gajiPokok'];


$query = "INSERT INTO karyawan (nama,jabatan,masaKerja,gajiPokok) values('$nama', '$jabatan', '$masaKerja', '$gajiPokok')";

mysqli_query($koneksi, $query);
?>