<?php
    if(!defined('INDEX')) die("");
?>
<!-- HTML -->
<h4 class="mt-2">Data Jabatan</h4>
<!-- Tombol Tambah Jabatan -->
<a href="?hal=jabatan_tambah" class="btn btn-success"><i class="oi oi-plus"></i> Tambah</a>
<!-- Buat Tabel Data Jabatan -->
<div class="table-responsive mt-3">
    <table class="table table-striped table-hover table-bordered">
        <!-- Judul Kolom Jabatan -->
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Jabatan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <!-- Isi Data Kolom Jabatan -->
        <tbody>
            <?php
                // Hubungkan Data Jabatan dari Basis Data
                $query = mysqli_query($con, "SELECT * FROM jabatan ORDER BY id_jabatan DESC");
                $no = 0;
                while ($data = mysqli_fetch_array($query)) {
                    $no++;
            ?>
                <tr>
                    <!-- ID Jabatan -->
                    <td><?= $no ?></td>
                    <!-- Nama Jabatan -->
                    <td><?= $data['nama_jabatan'] ?></td>
                    <!-- Tombol Edit dan Hapus -->
                    <td>
                        <a href="?hal=jabatan_edit&id=<?=$data['id_jabatan']?>" class="btn btn-sm btn-info"><i class="oi oi-pencil"></i> Edit</a>
                        <a href="?hal=jabatan_hapus&id=<?=$data['id_jabatan']?>" class="btn btn-sm btn-danger"><i class="oi oi-trash"></i> Hapus</a>
                    </td>
                </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
</div>