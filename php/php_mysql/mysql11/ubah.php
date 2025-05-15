<?php
	require 'functions.php';

	session_start();
	if( !$_SESSION['login'] ) {
		header('location: login.php'); exit;
	}
	if( isset($_POST['batal']) ) {
		header('location: index.php');
	}
	if( isset($_POST['ubah']) ) {
		if( ubah($conn, $_POST) === 1 ) {
			header('location: index.php');
		} else {
			$error = true;
		}
	}

	$id  = $_GET['id'];
	$mhs = query($conn, "SELECT * FROM mahasiswa WHERE id = $id")[0];

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>halaman ubah.php</title>
	<style type="text/css">
		input {
			display: block;
			margin-bottom: 10px;
		}
		button {
			margin-top: 10px;
			margin-right: 10px;
		}
	</style>
</head>
<body>
	<h1>Ubah Data Mahasiswa</h1>
	<?php if( isset($error) ) : ?>
		<p style="font-style: italic; color: red; font-size: 20px;">data gagal di ubah!</p>
	<?php endif; ?>
	<form action="" method="post" enctype="multipart/form-data">
		<label for="gambar">Gambar :</label>
		<input type="file" name="gambar" id="gambar">
		<input type="hidden" name="oldgambar" value="<?= $mhs['gambar']; ?>">

		<img src="img/<?= $mhs['gambar']; ?>" width="100px"><br><br>

		<label for="nama">Nama :</label>
		<input type="text" name="nama" id="nama" value="<?= $mhs['nama']; ?>" autocomplete="off">

		<label for="nrp">NRP :</label>
		<input type="text" name="nrp" id="nrp" value="<?= $mhs['nrp']; ?>" autocomplete="off">

		<label for="email">Email :</label>
		<input type="text" name="email" id="email" value="<?= $mhs['email']; ?>" autocomplete="off">

		<label for="jurusan">Jurusan :</label>
		<input type="text" name="jurusan" id="jurusan" value="<?= $mhs['jurusan']; ?>" autocomplete="off">

		<button type="submit" name="ubah">Ubah Data</button>
		<button type="submit" name="batal">Batal</button>
	</form>
</body>
</html>