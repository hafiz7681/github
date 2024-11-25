<?php
  $mahasiswa = [
    [
      "nama"=>"sandhika",
      "nrp"=>"043040023",
      "jurusan"=>"teknik informatika",
      "email"=>"sandhikagalih@unpas.ac.id",
      "gambar"=>"images.jpeg"
    ],
    [
      "nama"=>"doddy",
      "nrp"=>"033040001",
      "jurusan"=>"teknik industri",
      "email"=>"doddy@yahoo.com",
      "gambar"=>"images2.jpeg"
    ],
    [
      "nama"=>"erik",
      "nrp"=>"023040123",
      "jurusan"=>"teknik planalogi",
      "email"=>"erik@gmail.com",
      "gambar"=>"images3.png"
    ]
  ];
?>
<!doctype html>
<html>
  <head>
    <title>latihan 1</title>
  </head>
  <body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
      
      <?php foreach($mahasiswa as $mhs) : ?>
        <li>
          <a href="get.php?gambar=<?= $mhs["gambar"]; ?>&nama=
          <?= $mhs["nama"]; ?>&nrp=
          <?= $mhs["nrp"]; ?>&jurusan=
          <?= $mhs["jurusan"]; ?>&email=
          <?= $mhs["email"];  ?>
          "><?= $mhs["nama"]; ?></a>
        </li>
      <?php endforeach; ?>
      
    </ul>
  </body>
</html>