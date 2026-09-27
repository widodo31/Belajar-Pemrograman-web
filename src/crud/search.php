<?php
include 'config.php';

//mengambil parameter search
$keyword = $_GET['keyword'];
$search = "%".$keyword."%";

// Prepared Statement
$stmt = mysqli_prepare($conn, "SELECT * FROM mahasiswa WHERE (nim LIKE ? OR nama LIKE ?) AND Deleted_at IS NULL");

//Bind
mysqli_stmt_bind_param($stmt, "ss", $search, $search);

//Execute
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

while($data = mysqli_fetch_assoc($result)){
    echo $data['nama']."<br>";
}
