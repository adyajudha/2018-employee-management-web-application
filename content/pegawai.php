<?php
    if(!defined('INDEX')) die("");
?>
<h2 class="judul">Data Pegawai</h2>
<!-- Tombol Tambahkan Data Pegawai -->
<a href="?hal=pegawai_tambah" class="tombol">Tambah</a>
<table class="tabel">
    <!-- Judul Kolom -->
    <thead>
        <tr>
            <th>No</th>
            <th>Foto</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Tanggal</th>
            <th>Jabatan</th>
            <th>Keterangan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <!-- Isi Data Kolom -->
    <tbody>
        <?php
            $query = mysqli_query($con, "SELECT * FROM pegawai LEFT JOIN jabatan ON pegawai.id_jabatan=jabatan.id_jabatan ORDER BY pegawai.id_pegawai DESC");
            $no = 0;
            while ($data = mysqli_fetch_array($query)) {
                $no++;
        ?>
        <tr>
            <td><?=$no ?></td>
            <td><img src="images/<?= $data['foto']?>" alt="Foto Pegawai" width="100"></td>
            <td><?= $data['nama_pegawai']?></td>
            <td><center><?= $data['jenis_kelamin']?></center></td>
            <td><?= $data['tgl_lahir']?></td>
            <td><?= $data['nama_jabatan']?></td>
            <td><center><?= $data['keterangan']?></center></td>
            <!-- Tombol Edit dan Hapus -->
            <td>
                <a href="?hal=pegawai_edit&id=<?=$data['id_pegawai']?>" class="tombol edit">Edit</a>
                <a href="?hal=pegawai_hapus&id=<?=$data['id_pegawai']?>&foto=<>=$data['foto']?>" class="tombol hapus">Hapus</a>
            </td>
        </tr>
        <?php
            }
        ?>
    </tbody>
</table>