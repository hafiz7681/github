<?php
    $mahasiswa = [
        [
            "nama"=>"Aminul Hafiz",
            "umur"=>"17th",
            "alamat"=>"mns.tgk di gadong",
            "gambar"=>"images.jpeg",
            "nrp"=>"7681237681"

        ],
        [
            "nama"=>"Amar Dafiq",
            "umur"=>"18th",
            "alamat"=>"mns.dayah",
            "gambar"=>"images2.jpeg",
            "nrp"=>"3768176812"

        ],
        [
            "nama"=>"david",
            "umur"=>"19th",
            "alamat"=>"newyork",
            "gambar"=>"images3.png",
            "nrp"=>"2377681681"

        ]

    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Nama Mahasiswa</title>
</head>
<body>
    <h1>Nama Mahasiswa</h1>
    
    <ul>
        <?php foreach($mahasiswa as $mhs) : ?>
            <li>
                <a href="info.php?nama=<?= $mhs["nama"]; ?>&umur=<?= $mhs["umur"]; ?>&alamat=<?= $mhs["alamat"]; ?>&gambar=<?= $mhs["gambar"]; ?>&nrp=<?= $mhs["nrp"]; ?>"><?= $mhs["nama"] ?></a>
            </li>
        <?php endforeach; ?>
    </ul>

</body>
</html>