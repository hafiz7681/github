<?php
require 'functions.php';

if(isset($_POST['submit'])) {
  
  if(register($_POST) === 1) {
    header('location: login.php');
  } else {
    echo "<script>
      alert('user gagal ditambah');
      document.location.href = 'register.php';
    </script>";
  }
  
}

if(isset($_POST['cancel'])) {
  header('location: login.php');
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
      #cancel {
        margin-left: 15px;
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
      
      <button type="submit" name="cancel" id="cancel">cancel</button>
      
    </form>
  </body>
</html>