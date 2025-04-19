<?php
    // cek apakah tidak ada data di $_GET
    if( !isset($_GET["nama"]) || !isset($_GET["umur"]) || !isset($_GET["alamat"]) || !isset($_GET["gambar"]) || !isset($_GET["nrp"]) ) {
        // redirect
        header("Location: daftar.php");
        exit;

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi <?= $_GET["nama"]; ?></title>
    <style>
        #gambar {
            width: 100px;
        }
    </style>
</head>
<body>
    <h1>Informasi Mahasiswa</h1>
    <ul>
        <li>
            <img id="gambar" src="img/<?= $_GET["gambar"]; ?>" alt="not found">
        </li><br>
        <li>nama : <?= $_GET["nama"]; ?></li><br>
        <li>umur : <?= $_GET["umur"]; ?></li><br>
        <li>alamat : <?= $_GET["alamat"]; ?></li><br>

        <li><button><a href="daftar.php">Kembali</a></button></li>
        
    </ul>
</body>
</html>