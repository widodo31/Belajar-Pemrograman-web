<?php
 include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>DAFTAR MAHASISWA TAHUN 2026</h2>
    <a href="input-mahasiswa.php">Tambah mahasiswa</a><br><br>
    <table border="1px">
        <tr>
            <td>No</td>
            <td>NIM</td>
            <td>NAMA</td>
            <td>Alamat</td>
            <td>Aksi</td>
        </tr>
        <?php
            $no = 1;
            $query = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE Deleted_at IS NULL");
            while($data = mysqli_fetch_assoc($query)){
        ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $data['nim']; ?></td>
                    <td><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['alamat']; ?></td>
                    <td>
                        <a href="update.php?id=<?php echo $data['id']; ?>">Update</a> |
                        <a href="delete.php?id=<?php echo $data['id']; ?>">Delete</a>
                    </td>
                </tr>
        <?php
            }
        ?>
        
    </table>
</body>
</html>