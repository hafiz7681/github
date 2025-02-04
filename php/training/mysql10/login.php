<?php
session_start();
require 'functions.php';

// pengecekan COOKIE
if(isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
  $id = $_COOKIE['id'];
  $key = $_COOKIE['key'];
  
  // ambil username berdasarkan id
  $result = mysqli_query($conn, "select username from users where id = $id");
  $row = mysqli_fetch_assoc($result);
  
  // cek cookie dan username
  if(password_verify($row['username'], $key) === true) {
    $_SESSION['login'] = true;
  }
  // if($key === hash('sha256', $row['username'])) {echo 'valid';}
}

// pengecekan SESSION
if(isset($_SESSION['login'])) {
  header('location: index.php');
}

if(isset($_POST['login'])) {
  
  $username = $_POST['username'];
  $password = $_POST['password'];
  
  $result = mysqli_query($conn, "select * from users where username = '$username'");
  
  $row = mysqli_fetch_assoc($result);
  
  if(mysqli_num_rows($result) === 1 && password_verify($password,
  $row['password']) === true) {
      $_SESSION['login'] = true;
      if(isset($_POST['remember'])) {
        // acak password
        setcookie('id', $row['id'], time()+3600);
        setcookie('key', password_hash($row['username'], PASSWORD_DEFAULT),
        time()+3600);
        //$key = hash('sha256', $row['username']);
      }
      header('location: index.php');
      exit;
  } else {
    $error = true;
  }
  
  /* if(mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);
    if(password_verify($password, $row['password'])) {
      $_SESSION['login'] = true;
      header('location: index.php');
      exit;
    } else {
      $error = true;
    }
  } else {
    $error = true;
  } */
  
}

if(isset($_POST['signup'])) {
  header('location: register.php');
}

?>
<!doctype html>
<html>
  <head>
    <title>Halaman Login</title>
    <style>
      #username {
        display: block;
        margin-bottom: 10px;
      }
      #password {
        display: block;
        margin-bottom: 10px;
      }
      #signup {
        margin-left: 15px;
      }
      #error {
        color: red;
        font-style: italic;
      }
    </style>
  </head>
  <body>
    <h1>Halaman Login</h1>
    
    <?php if(isset($error)) : ?>
      <p id="error">username / password salah</p>
    <?php endif; ?>
    
    <form action="" method="post">
      <label for="username">Username :</label>
      <input type="text" name="username" id="username">
      
      <label for="password">Password :</label>
      <input type="password" name="password" id="password">
      
      <input type="checkbox" name="remember" id="remember">
      <label for="remember">Remember me</label><br><br>
      
      <button type="submit" name="login" id="button">Login</button>
      <button type="submit" name="signup" id="signup">Signup</button>
    </form>
  </body>
</html>