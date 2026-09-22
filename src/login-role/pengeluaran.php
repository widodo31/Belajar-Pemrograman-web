<?php
session_start();

if(!isset($_SESSION['role'])){
    header("location:login.php");
    exit;
}

if($_SESSION['role'] != "admin" && $_SESSION['role'] != "pengurus"){
    header("location:index.php");
    exit;
}

echo "<h1>Selamat datang ".$_SESSION['nama']."</h1> anda berada di halaman pengeluaran pada level ".$_SESSION['role'];
echo "<p>
    <a href='logout.php'>LOGOUT</a>
</p>";