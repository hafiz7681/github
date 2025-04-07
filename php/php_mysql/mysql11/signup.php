<?php
	require 'functions.php';

	if( isset($_POST['login']) ) {
		header('location: login.php');
	}
	if( isset($_POST['signup']) ) {
		if( signup($conn, $_POST) === 1 ) {
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
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>halaman signup.php</title>
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
	<h1 style="font-family: arial;">Halaman Pendaftaran!</h1>
	<?php if( isset($error) ) : ?>
		<p style="font-style: italic; color: red; font-size: 20px;">pendaftaran gagal di lakukan!</p>
	<?php endif; ?>
	<form action="" method="post">
		<label for="username">Username :</label>
		<input type="text" name="username" id="username">

		<label for="password">Password :</label>
		<input type="password" name="password" id="password">

		<label for="password2">Confirm Password :</label>
		<input type="password" name="password2" id="password2">

		<button type="submit" name="signup">Signup</button>
		<button type="submit" name="login">Login</button>
	</form>
</body>
</html>