<?php
    if(!defined('INDEX')) die("");
    // Hubungkan ke Basis Data
    $query = mysqli_query($con, "SELECT * FROM jabatan WHERE id_jabatan='$_GET[id]'");
    $data = mysqli_fetch_array($query);
?>
<!-- HTML -->
<h2 class="judul">Edit Jabatan</h2>
<!-- Tampilan Edit Jabatan -->
<form action="?hal=jabatan_update" method="post">
    <!-- ID Jabatan -->
    <input type="hidden" name="id" value="<?= $data['id_jabatan']?>">
    <!-- Nama Jabatan -->
    <div class="form-group">
        <input type="text" id="nama" name="nama" value="<?=$data['nama_jabatan']?>">
    </div>
    <!-- Tombol Simpan dan Batal -->
    <div class="form-group">
        <input type="submit" value="Simpan" class="tombol simpan">
        <input type="reset" value="Batal" class="tombol reset">
    </div>
</form>