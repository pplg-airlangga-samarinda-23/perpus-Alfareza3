<?php 
$hostname = "localhost";
$username = "root";
$password = "";
$database = "perpus_c2";
$koneksi = mysqli_connect($hostname, $username, $password, $database);
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>