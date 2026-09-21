<?php
session_start();

if(isset($_SESSION['level'])){
    if($_SESSION['level'] == "admin"){
        header("location:halaman_admin.php");
        exit;
    }elseif($_SESSION['level'] == "pegawai"){
        header("location:halaman_pegawai.php");
        exit;
    }elseif($_SESSION['level'] == "pengurus"){
        header("location:halaman_pengurus.php");
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Membuat Login Multi User</h1>
    <?php
        if(isset($_GET['pesan'])){
            if($_GET['pesan'] == "gagal"){
                echo "<div class='alert'>Username dan Password tidak sesuai!!!</div>";
            }
        }

    ?>
    <div class="kotak_login">
        <p class="tulisan_login">Silakan Login Disini</p>

        <form action="cek_login.php" method="post">
            <label for="username"> Username</label>
            <input type="text" name="username" class="form_login" id="username" placeholder="Username.." required="required">

            <label for="password">Password</label>
            <input type="password" name="password" class="form_login" id="password" placeholder="Password.." required="required">

            <input type="submit" value="LOGIN" class="tombol_login">

            <br><br>

        </form>
    </div>
</body>
</html>