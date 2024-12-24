<?php
	
	require 'functions.php';
	$mahasiswa = query('SELECT * FROM mahasiswa');
	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Data Mahasiswa</title>
</head>
<body>
<h1>Data Mahasiswa</h1>
<a href="add.php">Tambah data mahasiswa</a>
<table border="1px" cellpadding="10px" cellspacing="0px">
	<tr>
		<th>No.</th>
		<th>actions</th>
		<th>Pictures</th>
		<th>Names</th>
		<th>Emails</th>
		<th>Majors</th>
	</tr>
	<?php $i = 1; ?>
	<?php foreach($mahasiswa as $mhs) : ?>
	<tr>
		<td><?= $i; ?></td>
		<td>
			<a href="">Change</a> |
			<a href="">Delete</a>
		</td>
		<td><img src="<?= $mhs['gambar']; ?>" alt="ERROR"></td>
		<td><?= $mhs['nama']; ?></td>
		<td><?= $mhs['email']; ?></td>
		<td><?= $mhs['jurusan']; ?></td>
	</tr>
	<?php $i++; ?>
<?php endforeach; ?>
</table>
</body>
</html>