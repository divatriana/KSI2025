<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "ksi2025";

// Koneksi
$conn = mysqli_connect($host, $user, $pass, $db);

if(!$conn){
    die("Koneksi gagal: " . mysqli_connect_error());
}

echo "Koneksi Berhasil!";
?>
