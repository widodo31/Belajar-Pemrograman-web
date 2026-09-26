<?php
session_start();
include 'koneksi.php';

$email = $_POST['email'];
$pass = $_POST['password'];

$query = "SELECT * FROM users WHERE email = ?";
$data = mysqli_prepare($conn, $query);
// 1. bind
mysqli_stmt_bind_param($data, "s", $email);

// 3. Execute
mysqli_stmt_execute($data);
$result = mysqli_stmt_get_result($data);
$ambilData = mysqli_fetch_assoc($result);

//Cek jika ada data di database
if(empty($email) or empty($pass)){
    echo "Email dan password tidal boleh kosong";
    
}else{
    if (mysqli_num_rows($result) > 0) {
        # code...        
        if(password_verify($pass, $ambilData['password'])){
            echo "<h1> Login berhasil </h1><br>";
            echo "Nama : " .$ambilData['firstname']. " " .$ambilData['lastname'];
            exit;
        }else{
            echo "<h1> Password yang anda masukkan salah </h1>";
            exit;
        }
    }else{
        echo "<h1> Email yang anda masukkan salah </h1>";
    }
}
