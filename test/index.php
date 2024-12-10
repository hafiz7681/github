<?php
// koneksi ke database
$connect = mysqli_connect("localhost", "root", "hafiz7681", "phpdasar");
// ambil data dari tabel mahasiswa / query data mahasiswa
$table = mysqli_query($connect, "SELECT * FROM mahasiswa");

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Halaman Admin</title>
</head>
<body>

	<h1>Daftar Mahasiswa</h1>

	<table border="1px" cellpadding="10px" cellspacing="0px">
		<tr>
			<th>No.</th>
			<th>Aksi</th>
			<th>Gambar</th>
			<th>NRP</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Jurusan</th>
		</tr>
	<?php $i = 1; ?>
	<?php while($mhs = mysqli_fetch_object($table)) : ?>
		<tr>
			<td style="text-align: center;"><?= $i; ?></td>
			<td>
				<a href="">Ubah</a> |
				<a href="">Hapus</a>
			</td>
			<td><img src="img/<?= $mhs->Gambar; ?>" width="50"></td>
			<td><?= $mhs->NRP; ?></td>
			<td><?= $mhs->Nama; ?></td>
			<td><?= $mhs->Email; ?></td>
			<td><?= $mhs->Jurusan; ?></td>
			<?php $i++; ?>
		</tr>
	<?php endwhile; ?>
	</table>

</body>
</html>