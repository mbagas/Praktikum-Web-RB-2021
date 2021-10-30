<?php
include "koneksi.php";
$nim = $_POST["nim"];
$nama = $_POST["nama"];
$prodi = $_POST["prodi"];
$angkatan = $_POST["angkata"];

$sql = "insert into mahasiswa (nim,nama,prodi,angkatan) values('$nim','$nama','$prodi','$angkatan')";
$hasil = mysqli_query($con,$sql);
?>