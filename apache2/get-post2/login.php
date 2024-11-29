<!doctype html>
<html>
  <head>
    <title>Post</title>
  </head>
  <body>
    
    <?php if(isset($_GET["nama"])) : ?>
      <h1>Selamat Datang, <?= $_GET["nama"]; ?>!</h1>
      <?php else : ?>
    
    <form>
    <!-- <form action="get.php" method="post"> -->
      Masukkan Nama : <input type="text" name="nama">
      <br />
      <button type="submit" name="submit">kirim!</button>
    </form>
    
    <?php endif; ?>
  </body>
</html>
