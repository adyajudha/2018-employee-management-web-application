<?php
    if(!defined('INDEX')) die("");
?>
<!-- HTML -->
<h4 class="mt-2">Tambah Pegawai</h4>
<hr>
<form action="?hal=pegawai_insert" method="post" enctype="multipart/form-data" class="mb-5">
    <!-- Foto Pegawai -->
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Foto</label>
        <div class="col-sm-4">
            <div class="custom-file">
                <label for="foto" class="custom-file-label"></label>
                <input type="file" name="foto" id="foto" class="custom-file-input">
            </div>
        </div>
    </div>
    <!-- Nama Pegawai -->
    <div class="form-group row">
        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-4">
            <input type="text" name="nama" id="nama" class="form-control">
        </div>
    </div>
    <!-- Jenis Kelamin Pegawai -->
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
        <div class="col-sm-4">
            <!-- Laki-Laki -->
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" name="jk" id="jkl" value="L" class="custom-control-input">        
                <label for="jkl" class="custom-control-label"> Laki-laki</label>
            </div>
            <!-- Perempuan -->
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" name="jk" id="jkp" value="P" class="custom-control-input align">
                <label for="jkp" class="custom-control-label">Perempuan</label>
            </div>
        </div>
    </div>
    <!-- Tanggal Lahir Pegawai -->
    <div class="form-group row">
        <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>       
        <div class="col-sm-2">
            <input type="text" name="tanggal" id="tanggal" class="form-control">
        </div>
    </div>
    <!-- Jabatan Pegawai -->
    <div class="form-group row">
        <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
        <div class="col-sm-4">
            <select name="jabatan" id="jabatan" class="custom-select">
                <option value="">-Pilih Jabatan-</option>
                    <?php
                        $queryjabatan = mysqli_query($con, "SELECT * FROM jabatan");
                        while($j=mysqli_fetch_array($queryjabatan)) {
                            echo "<option value='$j[id_jabatan]'>$j[nama_jabatan]</option>";
                        }
                    ?>
            </select>
        </div>
    </div>
    <!-- Keterangan Pegawai -->
    <div class="form-group row">
        <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
        <div class="col-sm-8">
            <textarea name="keterangan" id="keterangan" class="form-control"></textarea>
        </div>
    </div>
    <!-- Tombol Simpan dan Batal -->
    <button type="submit" class="btn btn-info"><i class="oi oi-task"></i> Simpan</button>
    <button type="reset" class="btn btn-warning"><i class="oi oi-circle-x"></i> Batal</button>
</form>