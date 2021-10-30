<?php
include "koneksi.php";
$id = $_POST["id"];
$nim = $_POST["nim"];
$nama = $_POST["nama"];
$prodi = $_POST["prodi"];
$angkatan = $_POST["angkata"];

$sql = "UPDATE mahasiswa set nama='".$nama."', nim='".$nim."', angkatan='".$angkatan."', prodi='".$prodi."' where id = '".$id."' ";
$hasil = mysqli_query($con,$sql);
?>