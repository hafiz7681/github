<?php
require 'functions.php';

if(isset($_POST['submit'])) {
  
  if(register($_POST) === 1) {
    echo "<script>
      alert('user berhasil ditambah');
      document.location.href = 'register.php';
    </script>";
  } else {
    echo "<script>
      alert('user berhasil ditambah');
      document.location.href = 'register.php';
    </script>";
  }
  
}

?>
<!doctype html>
<html>
  <head>
    <title>Halaman Registrasi</title>
    <style>
      input {
        display: block;
        margin-bottom: 10px;
      }
    </style>
  </head>
  <body>
    <h1>Halaman Registrasi</h1>
    <form action="" method="post">
      
      <label for="username">Username :</label>
      <input type="text" name="username" id="username">
      
      <label for="password">Password :</label>
      <input type="password" name="password" id="password">
      
      <label for="password2">Confirm Password :</label>
      <input type="password" name="password2" id="password2">
      
      <button type="submit" name="submit">Registrasi</button>
      
    </form>
  </body>
</html>