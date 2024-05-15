<?php
    if(!defined('INDEX')) die("");
    // Mengubah Data Jabatan ke Basis Data
    $query = mysqli_query($con, "UPDATE jabatan SET nama_jabatan='$_POST[nama]' WHERE id_jabatan='$_POST[id]'");
    // Pesan
    if($query) {
        echo "Data berhasil Disimpan";
        echo "<meta http-equiv='refresh' content='1;url=?hal=jabatan'>";
    } else {
        echo "Tidak dapat menyimpan data!<br>";
        echo mysqli_error();
    }
?>