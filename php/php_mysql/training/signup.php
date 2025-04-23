<?php
require 'functions.php';

session_start();
if($_SESSION['login']) {
	header('location: index.php');
	return false; exit;
}

if(isset($_POST['back'])) {
	header('location: login.php');
}
if(isset($_POST['submit'])) {
	if(signup($_POST) === 1) {
		header('location: login.php');
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
		<title>signup</title>
		<style>
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
		<h1>regristrasi mahasiswa</h1>
		<?php if($error) : ?>
			<p style="color: red; font-style: italic;">username / password kurang dari 8 karakter</p>
		<?php endif; ?>
		<form action="" method="post" accept-charset="utf-8">
			<label for="username">username :</label>
			<input type="text" name="username" id="username"/>

			<label for="password">password :</label>
			<input type="password" name="password" id="password"/>

			<label for="password2">confirm password :</label>
			<input type="password" name="password2" id="password2"/>

			<button type="submit" name="submit">signup</button>
			<button type="submit" name="back">login</button>
		</form>
	</body>
</html>
