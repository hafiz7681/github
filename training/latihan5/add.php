<?php
require 'functions.php';

$massage_work = "<script type='text/javascript'>
			alert('Data ditambahkan!');
			document.location.href = 'index.php';
			</script>";
$massage_error = "<script type='text/javascript'>
			alert('Data bermasalah!');
			document.location.href = 'index.php';
			</script>";

	if( isset($_POST["submit"]) ) {

		if( add($_POST) > 0 ) {
			echo $massage_work;
		} else {
			echo $massage_error;
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
			<label for="Nama">Nama :</label>
			<input type="text" name="Nama" id="Nama">
		</li>
		<li>
			<label for="NRP">NRP :</label>
			<input type="text" name="NRP" id="NRP">
		</li>
		<li>
			<label for="Email">Email :</label>
			<input type="text" name="Email" id="Email">
		</li>
		<li>
			<label for="Jurusan">Jurusan :</label>
			<input type="text" name="Jurusan" id="Jurusan">
		</li>
		<li>
			<button type="submit" name="submit">Tambah data!</button>
		</li>
	</form>
	</ul>

</body>
</html>