<?php
require 'functions.php';

$id = $_GET['id'];
mysqli_query($conn, 'delete from mahasiswa where id = ' . $id);
if(mysqli_affected_rows($conn) === 1) {
	header('location: index.php');
} else {
	echo error;
}

?>
