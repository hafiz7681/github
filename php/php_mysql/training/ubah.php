<?php
require 'functions.php';
session_start();
if(!$_SESSION['login']) {
	header('location: login.php');
	return false; exit;
}

$id = $_GET['id'];
if(isset($_POST['submit'])) {
	if(ubah($id, $_POST) === 1) {
		header('location: index.php');
	} else {
		$error = true;
	}
}

$result = mysqli_query($conn, "select * from mahasiswa where id = $id");
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		<title>ubah data</title>
		<style>
			img {
				border: 1px solid black;
			}
		</style>
	</head>
	<body>
		<h1>ubah mahasiswa</h1>
		<?php if(isset($error)) : ?>
			<p style="color: red; font-style: italic;">gagal mengubah mahasiswa</p>
		<?php endif; ?>
		<form action="" method="post" accept-charset="utf-8" enctype="multipart/form-data">
			<ul type="none">
				<li>
					<img src="img/<?= $row['gambar']; ?>" width="80px"/>
				</li>
				<li>
					<label for="gambar">gambar :</label>
					<input type="file" name="gambar" id="gambar"/>
				</li>
				<li>
					<input type="hidden" name="gambarlama" value="<?= $row['gambar']; ?>"/>
				</li>
				<li>
					<label for="nama">nama :</label>
					<input type="text" name="nama" id="nama" value="<?= $row['nama']; ?>"/>
				</li>
				<li>
					<label for="nrp">nrp :</label>
					<input type="text" name="nrp" id="nrp" value="<?= $row['nrp']; ?>"/>
				</li>
				<li>
					<label for="email">email :</label>
					<input type="text" name="email" id="email" value="<?= $row['email']; ?>"/>
				</li>
				<li>
					<label for="jrs">jurusan :</label>
					<input type="text" name="jrs" id="jrs" value="<?= $row['jurusan']; ?>"/>
				</li>
				<li>
					<button type="submit" name="submit">ubah</button>
				</li>
			</ul>
		</form>
	</body>
</html>
