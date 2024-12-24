<?php
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Halaman Admin</title>
</head>
<body>

	<h1>Daftar Mahasiswa</h1>
	<a href="tambah.php" style="text-decoration: none;">Tambah Data Mahasiswa</a>
	<br>

	<table border="1px" cellpadding="10px" cellspacing="0px">
		<tr>
			<th>No.</th>
			<th>Aksi</th>
			<th>Gambar</th>
			<th>NRP</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Jurusan</th>
		</tr>
	<?php $i = 1; ?>
	<?php foreach($mahasiswa as $mhs) : ?>
		<tr>
			<td style="text-align: center;"><?= $i; ?></td>
			<td>
				<a href="" style="text-decoration: none;">Ubah</a> |
				<a href="hapus.php?id=<?= $mhs["ID"]; ?>" style="text-decoration: none;" onclick="return confirm('Yakin?');">Hapus</a>
			</td>
			<td><img width="50px" src="img/<?= $mhs["Gambar"]; ?>"></td>
			<td><?= $mhs["NRP"]; ?></td>
			<td><?= $mhs["Nama"]; ?></td>
			<td><?= $mhs["Email"]; ?></td>
			<td><?= $mhs["Jurusan"];?></td>
		</tr>
	<?php $i++; ?>
	<?php endforeach; ?>
	</table>

</body>
</html>