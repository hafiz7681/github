<?php
require 'functions.php';

$rows = query('select * from mahasiswa');
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		<title>daftar mahasiswa</title>
	</head>
	<body>
		<h1>daftar mahasiswa</h1>
		<a href="tambah.php">tambah data mahasiswa</a>
		<table border="1px" cellpadding="10px" cellspacing="0px">
			<tr>
				<th>no</th>
				<th>aksi</th>
				<th>gambar</th>
				<th>nama</th>
				<th>nrp</th>
				<th>email</th>
				<th>jurusan</th>
			</tr>
		<?php $i = 1; ?>
		<?php foreach($rows as $row) : ?>
			<tr>
				<td><?= $i; ?></td>
				<td>
					<a href="ubah.php?id=<?= $row['id']; ?>">ubah</a> |
					<a onclick="return confirm('hapus?')" href="hapus.php?id=<?= $row['id']; ?>">hapus</a>
				</td>
				<td>
					<img src="img/<?= $row['gambar']; ?>" alt="error"/>
				</td>
				<td><?= $row['nama']; ?></td>
				<td><?= $row['nrp']; ?></td>
				<td><?= $row['email']; ?></td>
				<td><?= $row['jurusan']; ?></td>
			</tr>
		<?php $i++; ?>
		<?php endforeach; ?>
		</table>
	</body>
</html>
