<?php
require 'functions.php';

$mahasiswa = query("select * from mahasiswa");

if(isset($_POST['submit'])) {
  
  $text = $_POST['text'];
  
  $mahasiswa = query("select * from mahasiswa where nama like '%$text%' or nrp
  like '%$text%' or email like '$text' or jurusan like '$text'");
  
}

?>
<!DOCTYPE html>
<html>
  <head>
    <title>halaman admin</title>
  </head>
  <body>
    <h1>Daftar Mahasiswa</h1>
    <a href="tambah.php">Tambah Data Mahasiswa</a>
    <form action="" method="post">
      <input type="text" name="text" placeholder="Cari...">
      <button type="submit" name="submit">cari</button>
    </form>
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
          <a href="ubah.php?id=<?= $mhs['id']; ?>">Ubah</a> |
          <a onclick="return confirm('Hapus?')" href="hapus.php?id=<?= $mhs['id']; ?>">Hapus</a>
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