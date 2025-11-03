<?php
include "koneksi.php";

$nama = "ContohUser";

$query = "INSERT INTO users (nama) VALUES ('$nama')";

if(mysqli_query($conn, $query)){
    echo "Data berhasil ditambahkan!";
} else {
    echo "Gagal: " . mysqli_error($conn);
}
?>
