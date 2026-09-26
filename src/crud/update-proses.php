<?php
include 'config.php';

$id = $_POST['id'];
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$simpan = $_POST['simpan'];

if(isset($simpan)){
    // syntax update mysqli
    //menggunakan prepared statement
    // langkahnya adalah PBE (Prepare, Bind, Excute)
    // 1. Prepare
    $query = mysqli_prepare($conn, "UPDATE mahasiswa SET nim = ?, nama = ?, alamat = ? WHERE id = ?");

    //2. bind
    mysqli_stmt_bind_param($query, "sssi", $nim, $nama, $alamat, $id);

    //3. execute
    mysqli_stmt_execute($query);
    mysqli_stmt_get_result($query);

    //pindah dihalaman index
    header("location:index.php");  
}else{
    header("location:index.php");
}

