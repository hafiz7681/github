<?php 
  // cek apakah tombol submit sudah tekan atau belum
  if( isset($_POST["submit"]) ) {
    // cek username dan password
    if( $_POST["username"] == "hafiz" && $_POST["password"] == "7681" ) {
    // jika benar redirect ke halaman admin
      header("Location: admin.php");
      exit;
    } else {
     // jika salah tampilkan kesalahan
      $error = true;
    }
  }
?>
<!doctype html>
<html>
  <head>
    <title>Halaman Login!</title>
  </head>
  <body>
    <h1>Login Admin</h1>
    
    <?php if( isset($error) ) : ?>
    <p style="color: red; font-style: italic;">username / password salah!</p>
    <?php endif; ?>
    
    <ul>
    <form method="post">
      <li>
        <label for="username">Username : </label>
        <input type="text" name="username" id="username">
      </li>
      <br>
      <li>
        <label for="password">Password : </label>
        <input type="password" name="password" id="password">
      </li>
      <br>
      <li>
        <button type="submit" name="submit">Login</button>
      </li>
      
    </form>
    </ul>
    
  </body>
</html>