<?php
	require 'functions.php';

	session_start();
	if( !$_SESSION['login'] ) {
		header('location: login.php'); exit;
	}
	if( isset($_POST['batal']) ) {
		header('location: index.php');
	}
	if( isset($_POST['tambah']) ) {
		if( tambah($conn, $_POST) === 1 ) {
			header('location: index.php');
		} else {
			$error = true;
		}
	}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>halaman tambah.php</title>
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
	<h1>Tambah Data Mahasiswa</h1>
	<?php if( isset($error) ) : ?>
		<p style="font-style: italic; color: red; font-size: 20px;">data gagal di tambahkan!</p>
	<?php endif; ?>
	<form action="" method="post" enctype="multipart/form-data">
		<label for="gambar">Gambar :</label>
		<input type="file" name="gambar" id="gambar" autocomplete="off">

		<label for="nama">Nama :</label>
		<input type="text" name="nama" id="nama" autocomplete="off">

		<label for="nrp">NRP :</label>
		<input type="text" name="nrp" id="nrp" autocomplete="off">

		<label for="email">Email :</label>
		<input type="text" name="email" id="email" autocomplete="off">

		<label for="jurusan">Jurusan :</label>
		<input type="text" name="jurusan" id="jurusan" autocomplete="off">

		<button type="submit" name="tambah">Tambah Data</button>
		<button type="submit" name="batal">Batal</button>
	</form>
</body>
</html>