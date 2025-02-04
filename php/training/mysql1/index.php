<?php
require 'functions.php';

$mahasiswa = query("select * from mahasiswa");

?>
<!DOCTYPE html>
<html>
  <head>
    <title>halaman admin</title>
  </head>
  <body>
    <h1>Daftar Mahasiswa</h1>
    <table border="1px" cellpadding="10px" cellspacing="0px">
      <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>Nama</th>
        <th>NRP</th>
        <th>Email</th>
        <th>Jurusan</th>
      </tr>
      <?php $i = 1; ?>
      <?php foreach($mahasiswa as $mhs) : ?>
      <tr>
        <td><?= $i; ?></td>
        <td>
          <a href="">Ubah</a> |
          <a href="">Hapus</a>
        </td>
        <td><img src="img/<?= $mhs['gambar']; ?>" alt=""></td>
        <td><?= $mhs['nama']; ?></td>
        <td><?= $mhs['nrp']; ?></td>
        <td><?= $mhs['email']; ?></td>
        <td><?= $mhs['jurusan']; ?></td>
      </tr>
      <?php $i++; ?>
      <?php endforeach; ?>
    </table>
  </body>
</html>