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
	<?php foreach($mahasiswa as $mhs) : ?>
		<tr>
			<td style="text-align: center;"><?= $mhs["ID"]; ?></td>
			<td>
				<a href="">Ubah</a> |
				<a href="">Hapus</a>
			</td>
			<td><img width="50px" src="img/<?= $mhs["Gambar"]; ?>"></td>
			<td><?= $mhs["NRP"]; ?></td>
			<td><?= $mhs["Nama"]; ?></td>
			<td><?= $mhs["Email"]; ?></td>
			<td><?= $mhs["Jurusan"];?></td>
		</tr>
	<?php endforeach; ?>
	</table>

</body>
</html>