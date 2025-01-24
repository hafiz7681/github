<?php
session_start();

if(!isset($_SESSION['login'])) {
  header('location: login.php');
}

require 'functions.php';
if(isset($_POST['submit'])) {
  
  $id = $_GET['id'];
  
  if(ubah($id) > 0) {
    echo "<script>
      alert('Data diubah!');
      document.location.href = 'index.php';
    </script>";
  } else {
    echo "<script>
      alert('Data tidak diubah!');
      document.location.href = 'index.php';
    </script>";
  }
} else if(isset($_POST['batal'])) {
  header('location: index.php');
}
  
  $id = $_GET['id'];
  $mhs = query("select * from mahasiswa where id = $id")[0];

?>
<!DOCTYPE html>
<html>
  <head>
    <title>ubah data</title>
  </head>
  <body>
    <h1>Ubah Data Mahasiswa</h1>
    <ul>
    <form action="" method="post" enctype="multipart/form-data">
      <li>
        <label for="gambar">Gambar :</label>
        <input type="file" name="gambar" id="gambar">
        <input type="hidden" name="namaGambar" value="<?= $mhs['gambar']; ?>">
      </li>
      <li>
        <label for="nama">Nama :</label>
        <input type="text" name="nama" id="nama" value="<?= $mhs['nama']; ?>">
      </li>
      <li>
        <label for="nrp">NRP :</label>
        <input type="text" name="nrp" id="nrp" value="<?= $mhs['nrp']; ?>">
      </li>
      <li>
        <label for="email">Email :</label>
        <input type="text" name="email" id="email" value="<?= $mhs['email']; ?>">
      </li>
      <li>
        <label for="jurusan">Jurusan :</label>
        <input type="text" name="jurusan" id="jurusan" value="<?=
        $mhs['jurusan']; ?>">
      </li>
      <li>
        <button type="submit" name="submit" autofocus>Ubah Data</button>
        <button style="margin-left:5px;" type="submit" name="batal">batal</button>
      </li>
    </form>
    </ul>
  </body>
</html>