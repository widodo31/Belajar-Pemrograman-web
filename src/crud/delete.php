<?php
include 'config.php';
$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
header("location:index.php");