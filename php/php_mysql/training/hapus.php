<?php
require 'functions.php';
session_start();
if(empty($_SESSION['login'])) {
	header('location: login.php');
	return false; exit;
}

$id = $_GET['id'];
if(hapus($id) === 1) {
	header('location: index.php');
} else {
	echo 'error';
}
?>
