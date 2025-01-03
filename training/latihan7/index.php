<?php
	require 'functions.php';

	$mahasiswa = query('SELECT * FROM mahasiswa');

	if( isset($_POST['cari']) ) {
		$data = htmlspecialchars($_POST['keywords']);
		$mahasiswa = query("SELECT * FROM mahasiswa WHERE nama LIKE '%$data%' OR jurusan LIKE '%$data%'");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Halaman Admin</title>
</head>
<body>
	<h1>Halaman Admin</h1>
	<a href="tambah.php">Tambah Data Mahasiswa</a>
	<form action="" method="post">
		<input type="text" name="keywords">
		<button type="submit" name="cari">Cari</button>
	</form>
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
				<a href="ubah.php?id=<?= $mhs['id']; ?>">Ubah</a> |
				<a href="hapus.php?id=<?= $mhs['id']; ?>"
					onclick="confirm('Hapus <?= $mhs['nama']; ?> ?')">Hapus</a>
			</td>
			<td><img width="100px" src="img/<?= $mhs['gambar']; ?>" alt="ERROR"></td>
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