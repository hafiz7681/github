<?php
session_start();

if(!isset($_SESSION['login'])) {
  header('location: login.php');
}

require 'functions.php';
$jumlahDataPerhalaman = 8;
$jumlahData = count(query("select * from mahasiswa"));
// round() : 1.4 = 1 or 1.5 = 2;
// floor() : 1.9 = 1;
// ceil() : 1.1 = 2;
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerhalaman);
var_dump($jumlahHalaman);

$mahasiswa = query("select * from mahasiswa limit 0, $jumlahDataPerhalaman");

if(isset($_POST['submit'])) {
  
  $text = $_POST['text'];
  
  $mahasiswa = query("select * from mahasiswa where nama like '%$text%' or nrp
  like '%$text%' or email like '$text' or jurusan like '$text'");
  
  if(count($mahasiswa) === 0) {
    $error = true;
  }
  
}

?>
<!DOCTYPE html>
<html>
  <head>
    <title>halaman admin</title>
    <style>
      #cari {
        margin-left: 15px;
      }
      .td {
        font-style: italic;
        color: red;
        font-size: 15px;
        text-align: center;
      }
    </style>
  </head>
  <body>
    <a href="logout.php" onclick="return confirm('Keluar?')">logout</a>
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
      <?php if(isset($error)) : ?>
      <tr>
        <td class="td" colspan="7"><?= $_POST['text'] . " tidak ada dalam
        database!"; ?></td>
      </tr>
      <?php endif; ?>
      <?php $i = 1; ?>
      <?php foreach($mahasiswa as $mhs) : ?>
      <tr>
        <td><?= $i; ?></td>
        <td>
          <a href="ubah.php?id=<?= $mhs['id']; ?>">Ubah</a> |
          <a onclick="return confirm('Hapus?')" href="hapus.php?id=<?= $mhs['id']; ?>">Hapus</a>
        </td>
        <td><img src="img/<?= $mhs['gambar']; ?>" width="75px" alt="<?= $mhs['gambar']; ?>"></td>
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