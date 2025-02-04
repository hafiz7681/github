<?php
require 'functions.php';

if(isset($_POST['submit'])) {
  
  if(register($_POST) > 0) {
    echo "<script>
      alert('User didaftarkan!');
      document.location.href = 'index.php';
    </script>";
  } else {
    echo "<script>
      alert('User gagal didaftarkan!');
      document.location.href = 'index.php';
    </script>";
  }
  
}

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Halaman Regristrasi</title>
    <style>
      label {
        display: block;
      }
      #submit {
        margin-top: 10px;
      }
    </style>
  </head>
  <body>
    <h1>Regristrasi Mahasiswa</h1>
    <form action="" method="post">
      <ul>
        <li>
          <label for="username">Username :</label>
          <input type="text" name="username" id="username">
        </li>
        <li>
          <label for="password">Password :</label>
          <input type="password" name="password" id="password">
        </li>
        <li>
          <label for="password2">Confirm Password :</label>
          <input type="password" name="password2" id="password2">
        </li>
        <li>
          <button type="submit" name="submit" id="submit">Regristrasi</button>
        </li>
      </ul>
    </form>
  </body>
</html>