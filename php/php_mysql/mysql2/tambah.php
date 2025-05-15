<?php
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
}

?>
<html>
  <head>
    <title>tambah mahasiswa</title>
  </head>
  <body>
    <h1>Tambah Data Mahasiswa</h1>
    <ul>
    <form action="" method="post">
      <li>
        <label for="gambar">Gambar :</label>
        <input type="text" name="gambar" id="gambar">
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
      </li>
    </form>
    </ul>
  </body>
</html>