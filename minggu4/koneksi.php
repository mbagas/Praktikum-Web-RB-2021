<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "belajar_ajax";

$con = mysqli_connect($host,$user,$password,$db);
if(!$con){
    die("koneksi gagal : ". mysqli_connect_error());
}
?>