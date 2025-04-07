<?php
	session_start();

	$_SESSION = [];
	session_unset();
	session_destroy();

	setcookie('login', '', time());
	setcookie('key', '', time());

	header('location: login.php');
?>