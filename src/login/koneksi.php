<?php
$conn = mysqli_connect("db", "root", "root", "belajar-web-db");
// Cek koneksi
if (mysqli_connect_error()) {
    echo "koneksi database gagal" .mysqli_connect_error();
}