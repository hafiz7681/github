<?php require 'functions.php';

	$id = $_GET["id"];
	$mhs = show("SELECT * FROM mahasiswa WHERE id = $id")[0];

	if( isset($_POST['submit']) ) {

		if( update() > 0 ) {
			echo "<script>
				alert('Data diubah!');
				document.location.href = 'index.php';
			</script>";
		} else {
			echo "<script>
				alert('Data gagal diubah!');
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
				<input type="hidden" name="id" value="<?= $mhs['id']; ?>">
			</li>
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
				<button type="submit" name="submit">Ubah Mahasiswa</button>
			</li>
		</form>
	</ul>
</body>
</html>