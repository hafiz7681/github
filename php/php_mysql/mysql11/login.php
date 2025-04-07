<?php
	require 'functions.php';

	session_start();
	if( $_SESSION['login'] ) {
		header('location: index.php'); exit;
	}
	if( isset($_POST['signup']) ) {
		header('location: signup.php');
	}
	if( isset($_POST['login']) ) {
		if( login($conn, $_POST) === false ) {
			$error = true;
		}
	}
	if( $_COOKIE['key'] && $_COOKIE['login'] ) {
		$key = $_COOKIE['key'];
		$login = $_COOKIE['login'];

		$result = mysqli_query($conn, "SELECT * FROM users WHERE id = '$key'");
		$row = mysqli_fetch_assoc($result);

		if( password_verify($row['username'], $login) ) {
			$_SESSION['login'] = true;
			header('location: index.php');
		}

	}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>halaman login.php</title>
	<style type="text/css">
		.input {
			display: block;
			margin-bottom: 10px;
		}
		button {
			margin-top: 10px;
			margin-right: 10px;
		}
		p {
			font-size: 20px;
			font-style: italic;
			color: red;
		}
	</style>
</head>
<body>
	<h1 style="font-family: arial;">Silahkan Login!</h1>
	<?php if( isset($error) ) : ?>
		<p>username / password salah</p>
	<?php endif; ?>
	<form action="" method="post">
		<label for="username">Username :</label>
		<input class="input" type="text" name="username" id="username" autocomplete="off">

		<label for="password">Password :</label>
		<input class="input" type="password" name="password" id="password">

		<input class="remember" type="checkbox" name="cookie" id="cookie">
		<label for="cookie">Remember me</label><br>

		<button type="submit" name="login">Login</button>
		<button type="submit" name="signup">Signup</button>
	</form>
</body>
</html>