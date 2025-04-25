<?php
require 'functions.php';

if(isset($_POST['signup'])) {
	header('location: signup.php');
}

session_start();
if(!empty($_SESSION['login'])) {
	header('location: index.php');
	return false; exit;
}


if(isset($_POST['sigin'])) {
	if(sigin($_POST) !== 1) {
		$error = true;
	}
	header('location: index.php');
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		<title>login</title>
		<style>
			input[type="text"], input[type="password"] {
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
		<h1>silahkan login</h1>
		<?php if(isset($error)) : ?>
			<p style="font-style: italic; color: red;">username / password salah</p>
		<?php endif; ?>
		<form action="" method="post" accept-charset="utf-8">
			<label for="username">username :</label>
			<input type="text" name="username" id="username"/>

			<label for="password">password :</label>
			<input type="password" name="password" id="password"/>

			<input type="checkbox" name="remember" id="remember"/>
			<label for="remember">remember me</label>
			<br />

			<button type="submit" name="sigin">login</button>
			<button type="submit" name="signup">signup</button>
		</form>
	</body>
</html>
