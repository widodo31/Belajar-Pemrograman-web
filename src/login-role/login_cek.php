<?php
session_start();
include 'koneksi.php';

$user = $_POST['username'];
$pass = $_POST['password'];

$query = "SELECT * FROM user WHERE username = '$user' AND password = '$pass'";
$data = mysqli_query($conn, $query);
$ambilData = mysqli_fetch_assoc($data);

//Cek jika ada data di database
if (mysqli_num_rows($data) > 0) {
    # code...
    $_SESSION['nama'] = $ambilData['nama'];
    $_SESSION['role'] = $ambilData['level'];

    //alihkan ke index
    header("location:index.php");
    exit;
}else{
    header("location:login.php?pesan=gagal");
}