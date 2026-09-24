<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>INPUT MAHASISWA</h2>
    <form action="input-proses.php" method="post">
        <table>
            <tr>
                <td>Nim Mahasiswa : </td>
                <td><input type="text" name="nim"></td>
            </tr>
            <tr>
                <td>Nama Mahasiswa : </td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Alamat : </td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td></td>
                <td><button type="submit" name="simpan">SIMPAN</button></td>
            </tr>
        </table>
    </form>
</body>
</html>