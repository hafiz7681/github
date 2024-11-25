<!-- <?php 
if( !isset($_GET["img"]) ||
!isset($_GET["nama"]) ||
!isset($_GET["nrp"]) ||
!isset($_GET["jurusan"]) ||
!isset($_GET["email"]) ) {
  header("Location: post.php");
  exit;
}
?> -->
<!doctype html>
<html>
  <head>
    <title>latihan 2</title>
  </head>
  <body>
    
    <ul>
      <li><img src="img/<?= $_GET["gambar"];  ?>" alt=""></li>
      <li><?= $_GET["nama"]; ?></li>
      <li><?= $_GET["nrp"]; ?></li>
      <li><?= $_GET["jurusan"]; ?></li>
      <li><?= $_GET["email"]; ?></li>
    </ul>
    
    <a href="post.php">Back</a>
    
  </body>
</html>