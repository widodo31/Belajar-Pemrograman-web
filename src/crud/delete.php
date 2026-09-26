<?php
include 'config.php';
$id = $_GET['id'];

    $stmt = mysqli_prepare($conn, "UPDATE mahasiswa SET Deleted_at = CURRENT_TIMESTAMP WHERE id = ?");

    //bind
    mysqli_stmt_bind_param($stmt, "i", $id);

    //execute
    mysqli_stmt_execute($stmt);
    mysqli_stmt_get_result($stmt);
    header("location:index.php");

