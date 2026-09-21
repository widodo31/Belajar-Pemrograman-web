<?php
    session_start();
    // Cek apakah sudah login dengan level admin
    if (!isset($_SESSION['level'])) {
        # code...
        header("location:index.php?pesan=belum_login");
    }
    
   ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    <h1>Halaman Admin</h1>
    <p>
        Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level'] ?></b>
    </p>
    <a href="logout.php">LOGOUT</a>

</body>
</html>