<?php
session_start();
include 'koneksi.php';

$email = $_POST['email'];
$pass = $_POST['password'];

$query = "SELECT * FROM users WHERE email = '$email'";
$data = mysqli_query($conn, $query);
$ambilData = mysqli_fetch_assoc($data);

//Cek jika ada data di database
if (mysqli_num_rows($data) > 0) {
    # code...
    if(password_verify($pass, $ambilData['password'])){
        echo "<h1> Login berhasil </h1><br>";
        echo "Nama : " .$ambilData['firstname']. " " .$ambildata['lastname'];
        exit;
    }else{
        echo "<h1> Password yang anda masukkan salah </h1>";
        exit;
    }
}else{
    echo "<h1> Email yang anda masukkan salah </h1>";
}