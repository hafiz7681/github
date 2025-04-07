<?php
require 'functions.php';

$rows = query('select * from mahasiswa');

if(isset($_POST['button'])) {
	$text = $_POST['text'];
	$rows = query("select * from mahasiswa where nama like '%$text%' or nrp like '%$text%' or email like '%$text%' or jurusan like '%$text%'");
}

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width" />
		<title>Index</title>
	</head>
	<body>
		<h1>Daftar Mahasiswa</h1>
		<a href="tambah.php">Tambah Data Mahasiswa</a>
		<form action="" method="post" accept-charset="utf-8">
			<input type="text" value="" name="text" placeholder="Search..."/>
			<button type="submit" name="button">search</button>
		</form>
		<table border="1px" cellpadding="10px" cellspacing="0">
			<tr>
				<th>No</th>
				<th>Aksi</th>
				<th>Gambar</th>
				<th>Nama</th>
				<th>NRP</th>
				<th>Email</th>
				<th>Jurusan</th>
			</tr>
		<?php $i = 1; ?>
		<?php foreach($rows as $row): ?>
			<tr>
				<td><?= $i; ?></td>
				<td>
					<a href="ubah.php?id=<?= $row['id']; ?>">Ubah</a> |
					<a href="hapus.php?id=<?= $row['id']; ?>">Hapus</a>
				</td>
				<td>
					<img src="img/<?= $row['gambar']; ?>" width="80px" alt="error"/>
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
