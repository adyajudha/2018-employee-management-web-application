<?php
    if(!defined('INDEX')) die("");
    // Memutuskan Akses Foto Pegawai dari Penyimpanan Foto yang akan Dihapus
    if(file_exists("images/$_GET[foto]")) unlink("images/$_GET[foto]");
    // Menghapus Data Pegawai
    $query = mysqli_query($con, "DELETE FROM pegawai WHERE id_pegawai='$_GET[id]'");
    // Pesan
    if($query) {
        echo "Data berhasil Dihapus";
        echo "<meta http-equiv='refresh' content='1;url=?hal=pegawai'>";
    } else {
        echo "Tidak dapat menyimpan data!<br>";
        echo mysqli_error();
    }
?>