<?php
    session_start();
    include "library/config.php";

    if(empty($_SESSION['username'])or empty($_SESSION['password'])){
        echo "<p align='center'>Anda harus login terlebih dahulu</p>";
        echo "<meta http-equiv='refresh' content='2;url=login.php'>";
    } else {
        define('INDEX', true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        Aplikasi Manajemen Pegawai
    </header>
    <div class="container">
        <aside>
            <ul class="menu">
                <li><a href="?hal=dashboard" class="aktif">Dashboard</a></li>
                <li><a href="?hal=pegawai">Data Pegawai</a></li>
                <li><a href="?hal=jabatan">Data Jabatan</a></li>
                <li><a href="logout.php">Keluar</a></li>
            </ul>
        </aside>
        <section class="main">
            <?php include "konten.php"; ?>
            <!-- <h1>Selamat Datang di Aplikasi Manajemen Pegawai</h1>
            <h3>Anda login sebagai administrator</h3> -->
        </section>
    </div>
    <footer>
        Copyright &copy; Aditya Yudha Pratama
    </footer>
</body>
</html>
<?php 
    }
?>