<?php
//mengaktifkan session
session_start();

// koneksi dengan database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];

// membuat query
$query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
$login = mysqli_query($conn, $query);
 
//cek jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
if ($cek > 0) {
    $data = mysqli_fetch_assoc($login);
    // cek jika level admin
    if($data['level'] == "admin"){
        // buat session login
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "admin";

        //alihkan ke dashboard admin
        header("location:halaman_admin.php");
    } elseif($data['level'] == "pegawai"){
        //buat session
        $_SESSION['username'] = $data['nama'];
        $_SESSION['level'] = "pegawai";

        //alihkan ke dashboard pegawai
        header("location:halaman_pegawai.php");
    } elseif($data['level'] == "pengurus"){
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "pengurus";

        // alihkan ke dashboard pengurus
        header("location:halaman_pengurus");
    }else{
        header("location:index.php?pesan=gagal");
    }
} else{
    header("location:index.php?pesan=gagal");
}