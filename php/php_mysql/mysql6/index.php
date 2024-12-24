<?php
	
	require 'functions.php';
	$mahasiswa = show("SELECT * FROM mahasiswa");

	if( isset($_POST['search']) ) {

		$input = $_POST['input'];
		$mahasiswa = show("SELECT * FROM mahasiswa where 
			nama LIKE '%$input%' OR jurusan LIKE '%$input%'");
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Data Mahasiswa</title>
</head>
<body>
	<h1>Data Mahasiswa</h1>
	<a href="add.php">Tambah data mahasiswa</a>
	<form action="" method="post">
		<input type="text" name="input">
		<button type="submit" name="search">Cari</button>
	</form>
	<table border="1px" cellpadding="10px" cellspacing="0px">
		<tr>
			<th>No.</th>
			<th>Aksi</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Jurusan</th>
		</tr>
		<?php $i = 1; ?>
		<?php foreach( $mahasiswa as $mhs ) : ?>
		<tr>
			<td><?= $i; ?></td>
			<td>
				<!-- UPDATE -->
				<a href="update.php?id=<?= $mhs['id']; ?>">Ubah</a> |
				<!-- end UPDATE -->

				<!-- DELETE -->
				<a onclick="return confirm('Ingin menghapus <?= $mhs["nama"] ?>?');"
				href="delete.php?id=<?= $mhs['id']; ?>">Hapus</a>
				<!-- end DELETE -->
			</td>
			<td><?= $mhs["nama"]; ?></td>
			<td><?= $mhs["email"]; ?></td>
			<td><?= $mhs["jurusan"]; ?></td>
		</tr>
		<?php $i++; ?>
	<?php endforeach; ?>
	</table>

</body>
</html>