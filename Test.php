<?php

$host = "localhost";
$user = "root";
$pass = "";
$database = "tugas";

$koneksi = mysqli_connect($host,$user,$pass,$database);

if (mysqli_connect_error($koneksi)) {
    echo "gagal koneksi ke database" .mysqli_connect_error();
}
?>