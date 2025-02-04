<?php
session_start();

if(!isset($_SESSION['login'])) {
  header('location: login.php');
}

require 'functions.php';
if(isset($_POST['submit'])) {
  
  if(tambah() > 0) {
    echo "<script>
      alert('Data ditambahkan!');
      document.location.href = 'index.php';
    </script>";
  } else {
    echo "<script>
      alert('Data gagal ditambahkan!');
      document.location.href = 'index.php';
    </script>";
  }
} else if(isset($_POST['batal'])) {
  header('location: index.php');
}

?>
<html>
  <head>
    <title>tambah mahasiswa</title>
  </head>
  <body>
    <h1>Tambah Data Mahasiswa</h1>
    <ul>
    <form action="" method="post" enctype="multipart/form-data">
      <li>
        <label for="gambar">Gambar :</label>
        <input type="file" name="gambar" id="gambar">
      </li>
      <li>
        <label for="nama">Nama :</label>
        <input type="text" name="nama" id="nama">
      </li>
      <li>
        <label for="nrp">NRP :</label>
        <input type="text" name="nrp" id="nrp">
      </li>
      <li>
        <label for="email">Email :</label>
        <input type="text" name="email" id="email">
      </li>
      <li>
        <label for="jurusan">Jurusan :</label>
        <input type="text" name="jurusan" id="jurusan">
      </li>
      <li>
        <button type="submit" name="submit" autofocus>Tambah Data</button>
        <button type="submit" name="batal" style="margin-left:5px;">Batal</button>
      </li>
    </form>
    </ul>
  </body>
</html>