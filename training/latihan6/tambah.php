<?php
	require 'functions.php';
	if( isset($_POST['submit']) ) {
		if( tambah($_POST) > 0 ) {
			echo "<script>
				alert('Data ditambahkan!');
				document.location.href = 'index.php';
			</script>";
		} else {
			echo "<script>
				alert('Data gagal ditambahkan!');
				document.location.href = 'index.php';
			</script>";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tambah Mahasiswa</title>
</head>
<body>
	<h1>Tambah Data Mahasiswa</h1>
	<ul>
	<form action="" method="post">
		<li>
			<label for="nama">Nama :</label>
			<input type="text" name="nama" id="nama">
		</li>
		<li>
			<label for="nrp">NRP :</label>
			<input type="text" name="nrp" id="nrp">
		</li>
		<li>
			<label for="email">Email :</label>
			<input type="text" name="email" id="email">
		</li>
		<li>
			<label for="jurusan">Jurusan :</label>
			<input type="text" name="jurusan" id="jurusan">
		</li>
		<li>
			<label for="gambar">Gambar :</label>
			<input type="text" name="gambar" id="gambar">
		</li>
		<li>
			<button type="submit" name="submit">Tambah Data</button>
		</li>
	</form>
</ul>
</body>
</html>