<?php
	require 'functions.php';

	$mahasiswa = query('SELECT * FROM mahasiswa');

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>halaman admin</title>
</head>
<body>
	<h1>Halaman Admin</h1>
	<table border="1px" cellpadding="10px" cellspacing="0px">
		<tr>
			<th>No.</th>
			<th>Aksi</th>
			<th>Gambar</th>
			<th>Nama</th>
			<th>NRP</th>
			<th>Email</th>
			<th>Jurusan</th>
		</tr>
		<?php $i = 1; ?>
		<?php foreach( $mahasiswa as $mhs ) : ?>
		<tr>
			<td><?= $i; ?></td>
			<td>
				<a href="">Ubah</a> |
				<a href="">Hapus</a>
			</td>
			<td><img alt="<?= $mhs['gambar']; ?>" src="img/<?= $mhs['gambar']; ?>"></td>
			<td><?= $mhs['nama']; ?></td>
			<td><?= $mhs['nrp']; ?></td>
			<td><?= $mhs['email']; ?></td>
			<td><?= $mhs['jurusan']; ?></td>
		</tr>
		<?php $i++; ?>
	<?php endforeach; ?>
	</table>
</body>
</html>