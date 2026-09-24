<?php
include 'config.php';

$id = $_POST['id'];
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];

// syntax update mysqli
$query = mysqli_query($conn, "UPDATE mahasiswa SET nim = '$nim', nama = '$nama', alamat = '$alamat' WHERE id = $id");

header("location:index.php");