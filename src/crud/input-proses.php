<?php
include 'config.php';

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$simpan = $_POST['simpan'];

// query input mysql
$query = "INSERT INTO mahasiswa (nim, nama, alamat)  VALUES ('$nim', '$nama', '$alamat')";
if(isset($simpan)){
    if(!is_numeric($nim) or empty($nim)){
        echo "NIM harus berupa Angka dan tidak boleh kosong";
    }elseif(empty($nama)){
        echo "Nama tidak boleh kosong";
    }elseif(empty($alamat)){
        echo "Alamat tidka boleh kosong";
    }else{
        mysqli_query($conn, $query);
        header("location:index.php");
        exit;
    }    
}else{
    
    echo "<h2>Data gagal di input</h2>";
}