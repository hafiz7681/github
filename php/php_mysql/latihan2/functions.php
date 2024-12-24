<?php 
$hostname = "localhost";  //hostname: localhost / ip: 127.0.0.1
$username = "root";  //username: root, dll
$password = "hafiz7681";  //password for username
$database = "phpdasar";  //database name: phpdasar, dll
$conn = mysqli_connect($hostname,$username,$password,$database);

function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$box = [];
	while( $row = mysqli_fetch_assoc($result) ) {
		$box[] = $row;
	}
	return $box;
}
?>