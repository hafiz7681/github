<?php
	require 'functions.php';
	
	session_start();
	if( !$_SESSION['login'] ) {
		header('location: login.php'); exit;
	}

	$dataPerhalaman = 3;
	$jumlahData = count(query($conn, "SELECT * FROM mahasiswa"));
	$jumlahHalaman = ceil($jumlahData / $dataPerhalaman);
	$halamanAktif = $_GET['hal'];

	if( $_GET['hal'] ) {
		$awalData = $halamanAktif * $dataPerhalaman;
	} else {
		$awalData = 0;
	}

	$mahasiswa = query($conn, "SELECT * FROM mahasiswa ORDER BY nama ASC LIMIT $awalData, $dataPerhalaman");

	if( isset($_POST['cari']) ) {
		$username = $_POST['username'];
		$mahasiswa = cari($conn, $username);
		if( !$mahasiswa ) {
			$error = true;
		}
	}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>halaman index.php</title>
	<style type="text/css">
		#username {
			font-size: 20px;
			color: red;
			font-style: italic;
			text-align: center;
		}
		table {
			border-collapse: collapse;
		}
	</style>
</head>
<body>
	<a href="logout.php">Logout</a>
	<h1>Daftar Mahasiswa</h1>
	<form action="" method="post">
		<input type="text" name="username" autocomplete="off">
		<button type="submit" name="cari">Cari</button>
	</form><br>
	<!-- previous halaman -->
	<?php if( $halamanAktif > 0 ) : ?>
		<a href="?hal=<?= $halamanAktif-1; ?>">&lt;</a>
	<?php endif; ?>
	<!-- pengulangan a href -->
	<?php for( $i = 0; $i < $jumlahHalaman; $i++ ) : ?>
		<a href="?hal=<?= $i; ?>">h<?= $i+1; ?></a>
	<?php endfor; ?>
	<!-- next halaman -->
	<?php if( $halamanAktif < ($jumlahHalaman-1) ) : ?>
		<a href="?hal=<?= $halamanAktif+1; ?>">&gt;</a>
	<?php endif; ?>

	<table border="1px" cellpadding="10px" cellspacing="0px">
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
		<?php foreach( $mahasiswa as $mhs ) : ?>
		<tr>
			<td><?= $i; ?></td>
			<td>
				<a href="ubah.php?id=<?= $mhs['id']; ?>">Ubah</a> |
				<a href="hapus.php?id=<?= $mhs['id']; ?>">Hapus</a>
			</td>
			<td><img src="img/<?= $mhs['gambar']; ?>" width="100px"></td>
			<td><?= $mhs['nama']; ?></td>
			<td><?= $mhs['nrp']; ?></td>
			<td><?= $mhs['email']; ?></td>
			<td><?= $mhs['jurusan']; ?></td>
		</tr>
		<?php $i++; ?>
	<?php endforeach; ?>

	<?php if( isset($error) ) : ?>
		<tr><td colspan="7" id="username"><?= $_POST['username']; ?> tidak ada didaftar mahasiswa!</td></tr>
	<?php endif; ?>
	</table>
</body>
</html>