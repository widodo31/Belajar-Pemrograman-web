<?php
// koneksi database
include 'config.php';

//mengambil variabel id dari index
$id = $_GET['id'];

// query update
//menggunakan prepared statement
// langkahnya adalah PBE (Prepare, Bind, Excute)
// 1. Prepare
$stmt = mysqli_prepare($conn, "SELECT * FROM mahasiswa WHERE id = ?");

// 2. Bind
mysqli_stmt_bind_param($stmt, "i", $id);

// 3. Excute
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$data = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>INPUT MAHASISWA</h2>
    <form action="update-proses.php" method="post">
        <table>
            <tr>
                <td>Nim Mahasiswa : </td>
                <td>
                    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                    <input type="text" name="nim" value="<?php echo $data['nim']; ?>">
                </td>
            </tr>
            <tr>
                <td>Nama Mahasiswa : </td>
                <td><input type="text" name="nama" value="<?php echo $data['nama']; ?>"></td>
            </tr>
            <tr>
                <td>Alamat : </td>
                <td><input type="text" name="alamat" value="<?php echo $data['alamat']; ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><button type="submit" name="simpan">Update</button></td>
            </tr>
        </table>
    </form>
</body>
</html>


