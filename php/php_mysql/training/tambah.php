<?php
require 'functions.php';
session_start();
if(empty($_SESSION['login'])) {
	header('location: login.php');
	return false; exit;
}

if(isset($_POST['submit'])) {
	if(tambah($_POST) === 1) {
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
		<meta name="viewport" content="width=device-width">
		<title>tambah data</title>
	</head>
	<body>
		<h1>tambah mahasiswa</h1>
		<?php if(isset($error)) : ?>
			<p style="color: red; font-style: italic;">gagal menambahkan mahasiswa</p>
		<?php endif; ?>
		<form action="" method="post" accept-charset="utf-8" enctype="multipart/form-data">
			<ul type="none">
				<li>
					<label for="gambar">gambar :</label>
					<input type="file" name="gambar" id="gambar"/>
				</li>
				<li>
					<label for="nama">nama :</label>
					<input type="text" name="nama" id="nama"/>
				</li>
				<li>
					<label for="nrp">nrp :</label>
					<input type="text" name="nrp" id="nrp"/>
				</li>
				<li>
					<label for="email">email :</label>
					<input type="text" name="email" id="email"/>
				</li>
				<li>
					<label for="jrs">jurusan :</label>
					<input type="text" name="jrs" id="jrs"/>
				</li>
				<li>
					<button type="submit" name="submit">tambah</button>
				</li>
			</ul>
		</form>
	</body>
</html>
