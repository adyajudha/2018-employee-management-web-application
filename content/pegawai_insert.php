<?php
    if(!defined('INDEX')) die("");
    // Definisikan Variabel untuk Informasi Foto
    $foto = $_FILES['foto'] ['name'];
    $lokasi= $_FILES['foto'] ['tmp_name'];
    $tipefile = $_FILES['foto'] ['type'];
    $ukuranfile = $_FILES['foto'] ['size'];
    
    $error = "";
    // Menambahkan Informasi Pegawai Sesuai pada Kolom Basis Data
    if($foto == "") {
        $query = mysqli_query($con, "INSERT INTO pegawai SET
            nama_pegawai = '$_POST[nama]',
            jenis_kelamin = '$_POST[jk]',
            tgl_lahir = '$_POST[tanggal]',
            id_jabatan = '$_POST[jabatan]',
            keterangan = '$_POST[keterangan]'
        ");
    } else {
        // Cek Format Foto
        if($tipefile != "image/jpeg" and $tipefile != "image/jpg" and $tipefile != "image/png") {
            $error = "Tipe file tidak didukung!";
        } elseif($ukuranfile >= 1000000) {
            // Cek Ukuran Foto
            echo $ukuranfile;
            $error ="Ukuran file terlalu besar (lebih dari 1MB)!";
        } else {
            // Menambahkan Informasi Pegawai
            move_uploaded_file($lokasi, "images/".$foto);
            $query = mysqli_query($con, "INSERT INTO pegawai SET
            foto = '$foto',
                nama_pegawai = '$_POST[nama]',
                jenis_kelamin = '$_POST[jk]',
                tgl_lahir = '$_POST[tanggal]',
                id_jabatan = '$_POST[jabatan]',
                keterangan = '$_POST[keterangan]'
            ");
        }
    }
    // Pesan
    if($error != "") {
        echo $error;
        echo "<meta http-equiv='refresh' content='2;url=?hal=pegawai_tambah'>";
    } elseif ($query) {
        echo "Data berhasil disimpan!";
        echo "<meta http-equiv='refresh' content='1;url=?hal=pegawai'>";
    } else {
        echo "Tidak dapat menyimpan data!<br>";
        echo mysqli_error($con);
    }
?>