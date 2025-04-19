<?php
require 'functions.php';

$id = $_GET['id'];
if(hapus($id) === 1) {
	header('location: index.php');
} else {
	echo 'error';
}
?>
