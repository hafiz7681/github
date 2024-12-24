<?php
require 'functions.php';
// cek apakah tombol submit sudah di tekan atau belum
if( isset($_POST["submit"]) ) {

	// cek apakah data berhasil di tambahkan atau tidak
	if( tambah($_POST) > 0 ) {
		echo "
			<script>
				document.location.href = 'index.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('Data gagal ditambahkan!');
				document.location.href = 'index.php';
			</script>
		";
	}

}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Halaman Tambah Mahasiswa</title>
</head>
<body>
	<ul>
	<form action="" method="post">
		<h1>Tambah data mahasiswa</h1>

		<li>
			<label for="Nama">Nama : </label>
			<input type="text" name="Nama" id="Nama" required>
		</li>
		<li>
			<label for="NRP">NRP : </label>
			<input type="text" name="NRP" id="NRP" required>
		</li>
		<li>
			<label for="Email">Email : </label>
			<input type="text" name="Email" id="Email" required>
		</li>
		<li>
			<label for="Jurusan">Jurusan : </label>
			<input type="text" name="Jurusan" id="Jurusan" required>
		</li>
		<li>
			<label for="Gambar">Gambar : </label>
			<input type="text" name="Gambar" id="Gambar" required>
		</li>
		<li>
			<button type="submit" name="submit">Tambah Data!</button>
		</li>

	</form>
	</ul>

</body>
</html>