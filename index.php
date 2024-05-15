<?php
    session_start();
    ob_start();
    include "library/config.php";
    if(empty($_SESSION['username'])or empty($_SESSION['password'])){
        echo "<p align='center'>Anda harus login terlebih dahulu</p>";
        echo "<meta http-equiv='refresh' content='0;url=login.php'>";
    } else {
        define('INDEX', true);
?>

<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="bootstrap-4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="open-iconic-master/font/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="DataTables/datatables.min.css">
    <link rel="stylesheet" href="bootstrap-datepicker-master/dist/css/bootstrap-datepicker3.min.css">
    <link rel="stylesheet" href="summernote-0.8.18-dist/summernote-bs4.css">
</head>
<body class="h-100">
    <nav class="navbar navbar-expand-sm navbar-dark sticky-top-bg-info bg-primary">
        <a href="#" class="navbar-brand">Manajemen Pegawai</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidebar" aria-control="sidebar" aria-expanded="false" aria-label="Toggle Navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <nav class="collapse navbar-collapse" id="sidebar">
            <ul class="navbar-nav d-sm-none">
                <li class="nav-items">
                    <a href="?hal=dashboard" class="nav-link text-white">
                        <i class="oi oi-dashboard"></i> Dashboard
                    </a>
                </li>
                <li class="nav-items">
                    <a href="?hal=pegawai" class="nav-link text-white">
                        <i class="oi oi-person"></i> Data Pegawai
                    </a>
                </li>
                <li class="nav-items">
                    <a href="?hal=jabatan" class="nav-link text-white">
                        <i class="oi oi-sort-descending"></i> Data Jabatan
                    </a>
                </li>
                <li class="nav-items">
                    <a href="logout.php" class="nav-link text-white">
                        <i class="oi oi-account-logout"></i> Keluar
                    </a>
                </li>
            </ul>
        </nav>
    </nav>

    <div class="container-fluid h-100">
        <div class="row h-100">
            <nav class="col-md-2 col-sm-3 bg-dark h-100 p-0 position-fixed d-none d-sm-block">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item bg-dark">
                        <a href="?hal-dashboard" class="nav-link text-white">
                            <i class="oi oi-dashboard"></i> Dashboard
                        </a>
                    </li>
                    <li class="list-group-item bg-dark">
                        <a href="?hal=pegawai" class="nav-link text-white">
                            <i class="oi oi-person"></i> Data Pegawai
                        </a>
                    </li>
                    <li class="list-group-item bg-dark">
                        <a href="?hal=jabatan" class="nav-link text-white">
                            <i class="oi oi-sort-descending"></i> Data Jabatan
                        </a>
                    </li>
                    <li class="list-group-item bg-dark">
                        <a href="logout.php" class="nav-link text-white">
                            <i class="oi oi-account-logout"></i> Keluar
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="col-md-10 col-sm-9 offset-md-2 offset-sm-3 mb-3">
                <section class="main">
                    <?php include "konten.php"; ?>
                </section>
            </div>
        </div>
    </div>
    <div class="bg-secondary fixed-bottom">
        <p class="m-2 text-center text-light">
            <b>Copyright &copy; Aditya Yudha Pratama</b>
        </p>
    </div>

    <script src="js/jQuery-3.3.1.min.js"></script>
    <script src="bootstrap-4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="bootstrap-datepicker-master/dist/js/bootstrap-datepicker.min.js"></script>
    <script src="DataTables/datatables.min.js"></script>
    <script>
        $(function() {
            $('.table').DataTable();
            $('#tanggal').datepicker();
            $('#keterangan').summernote();
        });
    </script>
</body>
</html>
<?php 
    }
?>