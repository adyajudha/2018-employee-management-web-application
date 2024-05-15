<?php
    if(!defined('INDEX')) die("");
    // Hapus Data Jabatan di Basis Data
    $query = mysqli_query($con, "DELETE FROM jabatan WHERE id_jabatan='$_GET[id]'");
    // Pesan
    if($query) {
        echo "Data berhasil dihapus";
        echo "<meta http-equiv='refresh' content='1;url=?hal=jabatan'>";
    } else {
        echo "Tidak dapat menghapus data!<br>";
        echo mysqli_error();
    }
?>