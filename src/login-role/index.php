<?php
    session_start();
    if(!isset($_SESSION['role'])){
        header("location:login.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login dengan role</title>
</head>
<body>
    <?php
        $nama = $_SESSION['nama'];
        $role = $_SESSION['role'];
    ?>
    <p>
        Nama : <?php echo $nama; ?><br>Level : <?php echo $role; ?>
    </p>

    
    <?php
        //pemilihan menu berdasarkan level
        if($role == "admin"){
        ?>
            <nav class="nav">
                <a href="http://">Dashboard</a>
                <a href="http://">Pemasukan</a>
                <a href="http://">Pengeluaran</a>
                <a href="http://">Laporan</a>
            </nav>
        <?php
            
        }elseif($role == "pegawai"){
        ?>
            <nav class="nav">
                <a href="http://">Dashboard</a>
                <a href="http://">Pemasukan</a>
            </nav>
        <?php 
              
        }elseif($role == "pengurus"){
        ?>
            <nav class="nav">
                <a href="http://">Pengeluaran</a>
                <a href="http://">Laporan</a>
            </nav>
        <?php 
            
        }else{
            header("location:login.php");
        }
    ?>

    <br><br>
    <a href="logout.php">LOGOUT</a>
</body>
</html>