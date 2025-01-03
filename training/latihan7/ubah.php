<?php
	require 'functions.php';

	$id = $_GET['id'];
	$mhs = query('SELECT * FROM mahasiswa WHERE id = '.$id)[0];

	if( isset($_POST['submit']) ) {
		if( ubah($_POST, $id) > 0 ) {
			echo "<script>
				alert('Data diubah!');
				document.location.href = 'index.php';
			</script>";
		} else {
			echo "<script>
				alert('Data tidak diubah!');
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
	<title>Ubah Mahasiswa</title>
</head>
<body>
	<h1>Ubah Data Mahasiswa</h1>
	<ul>
	<form action="" method="post">
		<li>
			<label for="nama">Nama :</label>
			<input type="text" name="nama" id="nama" value="<?= $mhs['nama']; ?>">
		</li>
		<li>
			<label for="nrp">NRP :</label>
			<input type="text" name="nrp" id="nrp" value="<?= $mhs['nrp']; ?>">
		</li>
		<li>
			<label for="email">Email :</label>
			<input type="text" name="email" id="email" value="<?= $mhs['email']; ?>">
		</li>
		<li>
			<label for="jurusan">Jurusan :</label>
			<input type="text" name="jurusan" id="jurusan" value="<?= $mhs['jurusan']; ?>">
		</li>
		<li>
			<label for="gambar">Gambar :</label>
			<input type="text" name="gambar" id="gambar" value="<?= $mhs['gambar']; ?>">
		</li>
		<li>
			<button type="submit" name="submit">Ubah Data</button>
		</li>
	</form>
</ul>
</body>
</html>