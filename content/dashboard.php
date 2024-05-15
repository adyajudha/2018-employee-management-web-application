<?php
    if(!defined('INDEX')) die("");
?>
<!-- HTML -->
<div class="jumbotron mt-3">
    <h1>Selamat Datang di </h1>
    <h1 class="display-4">Aplikasi Manajemen Pegawai</h1>
    <h3>Anda login sebagai Administrator</h3>
</div>
<!-- Hubungkan ke Basisdata -->
<?php
    $jml_pegawai = mysqli_num_rows(mysqli_query($con, "SELECT * FROM pegawai"));
    $jml_jabatan = mysqli_num_rows(mysqli_query($con, "SELECT * FROM jabatan"));
?>
<!-- Menghitung Jumlah Pegawai dan Jabatan -->
<div class="row mb-3 pb-3">
    <!-- Menghitung Jumlah Pegawai -->
    <div class="col-sm-6 mb-3">
        <ul class="list-group">
            <li class="list-group-item text-danger">
                <i class="oi oi-person display-3"></i>
                <span class="display-3 float-right">
                    <?= $jml_pegawai ?>
                </span>
            </li>
            <li class="list-group-item text- bg-secondary">
                <a href="?hal=jabatan" class="nav-link text-white">Data Pegawai</a>
            </li>
        </ul>
    </div>
    <!-- Menghitung Jumlah Jabatan -->
    <div class="col-sm-6 mb-3">
        <ul class="list-group">
            <li class="list-group-item text-success">
                <i class="oi oi-sort-descending display-3"></i>
                <span class="display-3 float-right">
                    <?= $jml_jabatan ?>
                </span>
            </li>
            <li class="list-group-item text-success bg-secondary">
                <a href="?hal=jabatan" class="nav-link text-white">Data Jabatan</a>
            </li>
        </ul>
    </div>   
</div>

